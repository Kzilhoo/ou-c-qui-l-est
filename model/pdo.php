<?php


function recupListeEntreprises($bddMySql){
	$qry = $bddMySql->prepare("SELECT nom, variante, description FROM objet ORDER BY variante");
	$qry->execute();
	$result = $qry->fetchAll();
	return $result;
}
?>	