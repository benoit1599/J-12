<?php

session_start();
if (isset($_SESSION["id"])) {
echo "<p>Login:".$_SESSION["id"]."</p>";
}

if($_FILES["files"]["size"]>2097152){
    echo"Le fichier de correspond pas.";
$upload0k = 0;
}
?>