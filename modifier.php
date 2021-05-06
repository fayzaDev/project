<?php
include('db/connexion.php');

if(isset($_POST['submit'])){
  $id=$_POST['id'];
 $region=$_POST['region'];
 $dep=$_POST['departement'];
 $c=$_POST['commune'];
$tel=$_POST['telephone'];
if(!empty($id) && !empty($dep) && !empty($region) && !empty($c) && !empty($tel) ){
	//echo $id;
	$req="UPDATE acteurs set region='$region',departement='$dep',commune='$c',telephone='$tel' where id='$id'";
    
     $resultat=mysqli_query($conn,$req) ;

     	header('Location:mapage.php'); 
}
    
}


?>



