<?php
try {
		$bddMySql = new PDO('mysql:host=localhost;dbname=crb;charset=utf8', 'crb', 'root');
} catch (PDOException $e) {
     echo "Connection à la base de données MySQL impossible : ", $e->getMessage();
    die();
}
?>


