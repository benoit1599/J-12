<?php

function connect_to_database() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "base-site-rooting";


	try {
	     $pdo = new PDO ("mysql:host=$servername;dbname=$databasename", $username, $password);
	     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	     
	     echo "Connected successfully";

		return $pdo;
    
   } catch (PDOException $e){
	echo "connexion failed:".$e->getMessage();
}
} 
$pdo =connect_to_database ();

$login=$_POST["login"];
$users= $pdo->query("SELECT * FROM `utilisateur` WHERE `login`=".$login."");
if ($_POST ["password"]==$users["password"]) {
	$_SESSION["id"]==$_POST["login"];
	setcookie("id", $_SESSION["id"]);
}
else{
?>
"<p>Mauvais couple identifiant / mot de passe. </p>"
"<a href="mini-site-routing"> lien connexion</a>
<?php
}
?>