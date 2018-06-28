<?php
	$action = $_REQUEST['action'];	
		switch($action)
		{
			case 'accueil':{
			$entreprises = recupListeEntreprises($bddMySql);
			include("view/v_accueil.php");
			break;
			}
			
			case 'admin':{
			include("view/v_adminLogin.php");
			break;
			}
			case 'connexion':{
			if(!empty($_POST['username'])){			   
				$password = checkLoginPassword($bddMySql, $_POST['username'], $_POST['password']);
				//$password = true;
				if($password){
					if(isadmin($bddMySql, $_POST['username'])){

						$_SESSION['admin'] = 1;
						$_SESSION['username'] = $_POST['username'];
						$entreprises = recupListeEntreprises($bddMySql);
						include("view/v_admin.php");
					}
					else{
					   $_SESSION['username'] = $_POST['username'];
		               $_SESSION['idUser'] = recupIdUserFromNom($bddMySql,$_SESSION['username']);		
					   include ("view/v_accueil.php");
					}
				}
				else{
					include("view/structure/v_error.php");
				}
			}
			else{
				include("view/structure/v_error.php");
			}
		   break;
		   }
		   
		   
		   case 'creationEntreprise':{
				$dossier = 'util/images/';
				$fichier = basename($_FILES['icone']['name']);
				$taille_maxi = 100000;
				$taille = filesize($_FILES['icone']['tmp_name']);
				$extensions = array('.png', '.gif', '.jpg', '.jpeg');
				$extension = strrchr($_FILES['icone']['name'], '.'); 
				//Début des vérifications de sécurité...
				if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
				{
					 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
				}
				if($taille>$taille_maxi)
				{
					 $erreur = 'Le fichier est trop gros...';
				}
				if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
				{
					 //On formate le nom du fichier ici...
					 $fichier = strtr($fichier, 
						  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
						  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
					 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
					 if(move_uploaded_file($_FILES['icone']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
					 {
						  //echo 'Upload effectué avec succès !';
					 }
					 else //Sinon (la fonction renvoie FALSE).
					 {
						  //echo 'Echec de l\'upload !';
					 }
				}
				else
				{
					 echo $erreur;
				}			   
				insertionNouvelleEntreprise($bddMySql, $_POST['nom'], $_POST['ville'],$fichier, $_POST['siteNet'], $_POST['description'], $_POST['telephone']);
				$entreprises = recupListeEntreprises($bddMySql);
				include("view/v_admin.php");
		   break;
		   }
		   
			case'modificationEntreprise':{
				$nom = $_GET['nom'];
				$entreprises = recupListeEntrepriseByNom($bddMySql,$nom);
				include("view/v_modifEntreprise.php");
			break;
			}
			
			case'applicationModifications':{
				$ancienNom = $_GET['nom'];
				$nom = $_POST['nom'];
				$ville = $_POST['ville'];
				$site = $_POST['siteNet'];
				$description = $_POST['description'];
				$telephone = $_POST['telephone'];
				$dossier = 'util/images/';
				$fichier = basename($_FILES['icone']['name']);
				$taille_maxi = 100000;
				$taille = filesize($_FILES['icone']['tmp_name']);
				$extensions = array('.png', '.gif', '.jpg', '.jpeg');
				$extension = strrchr($_FILES['icone']['name'], '.'); 
				//Début des vérifications de sécurité...
				if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
				{
					 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
				}
				if($taille>$taille_maxi)
				{
					 $erreur = 'Le fichier est trop gros...';
				}
				if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
				{
					 //On formate le nom du fichier ici...
					 $fichier = strtr($fichier, 
						  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
						  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
					 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
					 if(move_uploaded_file($_FILES['icone']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
					 {
						  //echo 'Upload effectué avec succès !';
					 }
					 else //Sinon (la fonction renvoie FALSE).
					 {
						  //echo 'Echec de l\'upload !';
					 }
				}
				else
				{
					 echo $erreur;
				}
				modificationEntreprise($bddMySql,$nom, $ville, $fichier,$site,$description,$telephone, $ancienNom);			
				$entreprises = recupListeEntreprises($bddMySql);

				include("view/v_admin.php");
			break; 
			}
			case'suppressionEntreprise':{
				$nom = $_GET['nom'];
				$image = recupLogoByNom($bddMySql,$nom);
				suppressionEntreprise($bddMySql,$nom);		
				$entreprises = recupListeEntreprises($bddMySql);
				echo "tamere".$image;
				include("view/v_admin.php");
				unlink("util/images/".$image);
			break;
			}
			
			case'envoiMail':{
				$entreprises = recupListeEntreprises($bddMySql);
				$nom = $_GET['nom'];
				$ville = recupVilleByNom($bddMySql,$nom);
				$site = recupSiteByNom($bddMySql,$nom);
				$description = recupDescriptionByNom($bddMySql,$nom);
				$telephone = recupTelephoneByNom($bddMySql,$nom);
				$adresse = $_POST['adresse'];
				fopen($nom.".vcf","w");
file_put_contents($nom.'.vcf',
'BEGIN:VCARD
VERSION:3.0
N:'.$nom.'
FN:'.$nom.'
ORG:'.$description[0].';
TEL;TYPE=WORK;VOICE:'.$telephone[0].'
URL;WORK:'.$site[0].'
END:VCARD');
				$mail = file_get_contents($nom.'.vcf', FILE_USE_INCLUDE_PATH);
				mail( $adresse , $nom , $mail);
				include("view/v_accueil.php");
			break;	
			}
		}
		
		
?>