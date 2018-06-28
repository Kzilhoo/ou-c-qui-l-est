<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
ob_start();
date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, 'fr_FR');
include("model/connection_pdo.php");
include("model/pdo.php");
include("view/structure/v_header.php") ;
if((!isset($_REQUEST['controler']))||(!isset($_REQUEST['action'])))
     $uc = 'accueil';
else
	$uc = $_REQUEST['controler'];
switch($uc)
{
	case 'accueil':
		{
		$_REQUEST['action'] = 'accueil';
        include("controler/c_accueil.php");
		break;}
	case 'admin':
		{
		include("controler/c_accueil.php");
		break;
		}
	case 'loginAdmin':
		{
		include("controler/c_accueil.php");
		break;
		}
	case 'creationEntreprise' : 
	{
		include("controler/c_accueil.php");
		break;
	}
	default:
		{
		include("view/basic/v_nopage.php");break;}
}
ob_end_flush();
include("view/structure/v_footer.php") ;


?>
