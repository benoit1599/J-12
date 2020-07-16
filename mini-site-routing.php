<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Mini site routing</title>

</head>
<body>

<nav>
   <ul>

      <li><a href="mini-site-routing.php?page=1">accueil</a></li>	
      <li><a href="mini-site-routing.php?page=2">Page 2</a></li>	
      <li><a href="mini-site-routing.php?page=3">Page 3</a></li>	
	  <li><a href="mini-site-routing.php?page=connexion">Connexion</a></li>


	
	<?php
	session_start();
	if(isset($_COOKIE["id"])){
	?>
	<li><a href="mini-site-routing.php?page=connexion">admin</a></li>

	<?php
	}
	?>
</ul>
</nav>


<?php 


if(isset($_GET['page'])){
	if($_GET['page']==1) {
	echo ("<h1> Accueil ! </h1>");
}

else if($_GET['page'] ==2) {
	echo ("<h1> Page 2 ! </h1>");
}
else if($_GET['page'] ==3) {
	echo "(<h1> Page 3 ! </h1>)";
}
else if($_GET['page'] =='connexion') {
	include ("connexion.php");
}
}
if (isset($_SESSION["id"])) {
	echo "<p>Login: ".$_SESSION["id"]."</p>";
}

if(!isset($_SESSION["id"])){
	if(isset($_COOKIE["id"])){
	$_SESSION["id"]=$_COOKIE["id"];
	}
	else{
	header ('Location: mini-site-routing.php?page=1');
	}
	}
	

?>
</body>
</html>