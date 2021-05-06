<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION['nom']);
unset($_SESSION['acces']) ;
header("Location:index.php");
?>