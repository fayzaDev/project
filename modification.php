<?php 
require_once('db/connexion.php');
if(!isset($_GET['id'])) 
{
	$id=''; 
}
else {

	$id=$_GET['id'];
}

$req="SELECT * FROM acteurs WHERE id=$id ";
$result=mysqli_query($conn,$req);
//$row=mysqli_fetch_assoc($result);
$row=mysqli_fetch_array($result);
   
   
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Page Title</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
     <link rel="stylesheet" type="text/css" media="screen" href="panel.css" />
    <link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap.min.css">
	
		
</head>
<body>
<div class='container'>
<div class='row'>
<div class='col-md-10'>
        <!-- /.card-body -->
        <!-- /.card-body -->
        <!-- /.card-body -->
		<div class="panel panel-success">
		
			<div class="panel-heading">
                    
				<span>&nbsp;Formulaire de modification</span></div>
<form action="modifier.php" method="POST">
	<div class="panel-body">
              <div class="row">

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Region</label>
                              <input type="text" name="region"  value="<?php echo $row['region'];?>"class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label> Departement</label>
                              <input type="text" name="departement" value="<?php echo $row['departement'];?>"  class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Commune</label>
                              <input type="text" name="commune" value="<?php echo $row['commune'];?>" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                      </div>

		      <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Type Acteur</label>
                              <select name="acteur" class="form-control select2" >
                                    <option   disabled>Choisir Type</option>
                                    <option value="Direct">Direct</option>
                                   <option value="Indirect">Indirect</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label> Nom</label>
                              <input type="text" name="nom" value="<?php echo $row['nom'];?>"  class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Prenom</label>
                              <input type="text" name="prenom" value="<?php echo $row['prenom'];?>"  class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                        
                      </div> 

                        <div class="row">
                        	  <div class="col-sm-4">
                            <div class="form-group">
                              <label>Telephone</label>
                              <input type="text" name="telephone" value="<?php echo $row['telephone'];?>" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-group">
                              <label> Lieu d'activite</label>
                              <input type="text" name="lieu" value="<?php echo $row['lieu'];?>"  class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Annee d'exercice</label>
                              <input type="text" name="annee" value="<?php echo $row['annee'];?>"  class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                      </div>
                       <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Categorie professionnelle</label>
                              <select name="categorie" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Categorie</option>
                                   <option value="Grossiste">Grossiste</option>
                                   <option value="Detaillant">Detaillant</option>
                              </select>
                            </div>
                          </div>
                         
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Zone de Couverture</label>
                              <select name="zone" value="<?php echo $row['zones'];?>"  class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Zone de couverture</option>
                                   <option value="Niamey">Niamey</option>
                                   <option value="Kori Mairouwa">Kori Mairouwa</option>
                                    <option value="Garin Elou">Garin Elou</option>
                                    <option value="Tombon Kasso">Tombon Kasso</option>
                                    <option value="Doutchi">Doutchi</option>
                                    <option value="Gouala">Gouala</option>
                                    <option value="Kori Mairouwa">Kori Mairouwa</option>
                              </select>
                            </div>
                          </div>
                      </div>
                       <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Type de produits commercialises</label>
                              <select name="type_produit" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Type de Produits Commercialises</option>
                                   <option value="Vollaile">Vollaile</option>
                                   <option value="Moringa">Moringa</option>
                                    <option value="Chou">Chou</option>
                                    <option value="Garin Rogo">Garin Rogo</option>
                                    <option value="Huile">Huile</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label> Mode de commercialisation ou d'achat</label>
                              <select name="mode" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Mode de commercialisation ou d'achat</option>
                                   <option value="Cash">Cash</option>
                                   <option value="Achat Credit">Achat Credit</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Periode de commercialisation</label>
                              <select name="commercialisation" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Periode de commercialisation</option>
                                   <option value="Toute l\'annee">Toute l'annee</option>
                                   <option value="Saison seche">Saison seche</option>
                                    <option value="Hivernale">Hivernale</option>
                              </select>
                            </div>
                          </div>
                          
                          </div> 
                          <div class="row">
                                <div class="col-sm-4">
		        <button type="submit" name="submit" class="btn btn-success btn-block">Modifier</button></div>
		        <div class="col-sm-4">
                            <div class="form-group">
                           
                              <input type="hidden" name="id"  value="<?php echo $id;?>" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                      </div>
	</form>
	</div>
	<div class="panel-footer panel-success"></div>
	</div>
</div>
	</div>
	</div>
</body>
</html>