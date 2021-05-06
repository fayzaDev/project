<?php
require_once('db/connexion.php');
if(!isset($_GET['id'])) 
{
	$id=''; 
}
else {

	$id=$_GET['id'];
}

$req="SELECT region,departement,commune, telephone FROM acteurs WHERE id=$id ";
$result=mysqli_query($conn,$req);
//$row=mysqli_fetch_assoc($result);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	

	<div class="col-md-4">
				<div class="panel panel-primary">
<form action="modifier.php" method="POST">

		<div class="input-group">
			
			<input type="text" name="region" value=<?php echo $row['region'];?> class="form-control" placeholder="Entrer le nom">
		</div> 
		<div class="input-group">
		
			<input type="text" name="departement" value=<?php echo $row['departement'];?> class="form-control" placeholder="Entrer le prenom">
		</div>
		<div class="input-group">
			
			<input type="text" name="commune"  value=<?php echo $row['commune'];?> class="form-control" placeholder="Entrer le numero de telephone">
		</div>
		<div class="input-group">
			
			<input type="text" name="telephone" value=<?php echo $row['telephone'];?> class="form-control" placeholder="Entrer l'adresse mail">
		</div>
		<button type="submit" class="btn btn-primary btn-block">Modifier</button>
	</form>
	</div>
		
		</div>
	
</body>
</html>