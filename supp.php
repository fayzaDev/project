<?php
include('db/connexion.php');
if (isset($_GET['id'])) {
   if (isset($_GET['confirm']) && $_GET['confirm'] == 1) {
            // delete
   	 $id_acteur=$_GET['id'];
	 
	 $req = $conn->prepare("DELETE FROM acteurs WHERE id=$id_acteur");
	$req->execute();
	
            header("Location: mapage.php"); 
   }
else {
        echo 'Confirmez-vous la suppression ?';
        echo '<a href="?id=' . $_GET['id'] . '&confirm=1">Oui</a><a href="mapage.php">Non</a>';
   } 
}
?>