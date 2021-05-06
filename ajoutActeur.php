<?php 
    session_start();
    if(empty($_SESSION['nom'])){
        header("Location: index.php"); 
    }
    include('db/connexion.php');
    $message ='';
    if(isset($_POST['submit'])){
      
      $region =$_POST['region'];
      $departement = $_POST['departement'];
      $commune = $_POST['commune'];
      $acteur = $_POST['acteur'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $sexe = $_POST['sexe'];
      $naissance = $_POST['naissance'];
      $age = $_POST['age'];
      $domaine = $_POST['domaine'];
      $annee = $_POST['annee'];
      $categorie = $_POST['categorie'];
      $lieu = $_POST['lieu'];
      $telephone = $_POST['telephone'];
      $zones = $_POST['zone'];
      $type_produit = $_POST['type_produit'];
      $mode = $_POST['mode'];
      $commercialisation = $_POST['commercialisation'];
      $circuit = $_POST['circuit'];
      $qte_produit = $_POST['produite'];
      $qte_vendue = $_POST['vendue'];
      $experience = $_POST['experience'];
      $type_agriculture = $_POST['type_agriculture'];
      $engagement = $_POST['engagement'];
      $produit = $_POST['produit'];
      $periode = $_POST['periode'];
      // print_r($region); print_r($departement); print_r($commune); print_r($acteur); print_r($nom); print_r($prenom);
      // print_r($sexe); print_r($naissance); print_r($age); print_r($domaine); print_r($annee);
      // print_r($categorie); print_r($lieu); print_r($telephone); print_r($zones); print_r($type_produit); print_r($mode);
      // print_r($commercialisation); print_r($circuit); print_r($qte_produit); print_r($qte_vendue); print_r($experience); 
      // print_r($type_agriculture);print_r($engagement);print_r($produit);print_r($periode);
if(!empty($region) && !empty($departement) && !empty($commune) && !empty($acteur) && !empty($nom) && !empty($prenom)
&& !empty($sexe) && !empty($naissance) && !empty($age) && !empty($domaine) && !empty($annee) && !empty($categorie)
&& !empty($lieu) && !empty($telephone) && !empty($zones) && !empty($type_produit) && !empty($mode) && !empty($commercialisation) && !empty($circuit)
&& !empty($qte_produit) && !empty($qte_vendue) && !empty($experience) && !empty($type_agriculture) && !empty($engagement) && !empty($produit) && !empty($periode)){

   include('db/connexion.php');
     
 $ajout = "INSERT into acteurs(region,departement,commune, acteur, nom,prenom,sexe,naissance,age,domaine,annee,
  categorie,lieu,telephone,zones,type_produit,mode,commercialisation,circuit,qte_produite,qte_vendue,experience,type_agriculture,engagement,produit,periode) VALUES ('$region',
  '$departement','$commune','$acteur','$nom','$prenom','$sexe','$naissance','$age', '$domaine','$annee','$categorie','$lieu','$telephone','$zones','$type_produit','$mode','$commercialisation','$circuit',
  '$qte_produit','$qte_vendue','$experience','$type_agriculture','$engagement','$produit','$periode') ";

    $result = mysqli_query($conn, $ajout); 
   
        $message = '<div class="alert alert-success text-center" role="alert">
          Enregistrement reussis
           </div>';
   
}
else{
  $message = '<div class="alert alert-danger text-center" role="alert">
          Veuillez Remplir tout les champs!
           </div>';
}
      
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mcfim | NDEV</title>
  <link rel="shortcut icon" href="asset/img/ndev.png"  type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-light" style="background-color:#edba35;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link"href="#">
          <i class="fas fa-user"></i> <?php echo $_SESSION['nom']; ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="asset/img/ndev.png" alt="AdminLTE Logo" class="brand-image " >
      <span class="brand-text text-dark font-weight-dark">Mcfim |<b> NDEV</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      
      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header"><h5>Tableau de Bord</h5> </li>
          
          <li class="nav-item">
            <a href="accueil.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>
          
          
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <!-- <h5 class=""> Listes des Acteurs</h5> -->
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 m-auto">
        <?php if($message){
                    echo $message;
                    } ?>
            <form action="ajoutActeur.php" method="POST">
            <div class="card">
                <div class="card-header">
                        <h5 class="text-center text-orange">Informations + Reclamations</h5>
                        
                </div>
                <div class="card-body">
                      <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Region</label>
                              <input type="text" name="region" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label> Departement</label>
                              <input type="text" name="departement" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Commune</label>
                              <input type="text" name="commune" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-2">
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
                              <input type="text" name="nom" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Prenom</label>
                              <input type="text" name="prenom" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>Sexe</label>
                              <select name="sexe" class="form-control select2" style="width: 100%;">
                                    <option  disabled >Choisir Sexe</option>
                                   <option value="Masculin">Masculin</option>
                                   <option value="Feminin">Feminin</option>
                              </select>
                            </div>
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Lieu de Naissance</label>
                              <input type="text" name="naissance" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label> Age</label>
                              <input type="text" name="age" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Domaine d'activite commerciale</label>
                              <select name="domaine" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Domaine</option>
                                   <option value="Maraichage">Maraichage</option>
                                   <option value="Agroalimentaire">Agroalimentaire</option>
                                   <option value="Elevage">Elevage</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>Annee d'exercice</label>
                              <input type="text" name="annee" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Categorie professionnelle</label>
                              <select name="categorie" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Categorie</option>
                                   <option value="Grossiste">Grossiste</option>
                                   <option value="Detaillant">Detaillant</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label> Lieu d'activite</label>
                              <input type="text" name="lieu" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>Telephone</label>
                              <input type="text" name="telephone" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Zone de Couverture</label>
                              <select name="zone" class="form-control select2" style="width: 100%;">
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
                            <div class="form-group">
                              <label>Circuits de Ravitaillement</label>
                              <select name="circuit" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Circuit</option>
                                   <option value="Jardin à Niamey">Jardin à Niamey</option>
                                   <option value="Jardin au marche">Jardin au marche</option>
                                    <option value="Bakin Tabki">Bakin Tabki</option>
                                    <option value="Tombon Kasso">Tombon Kasso</option>
                                  
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label> Quantite Produite</label>
                              <input type="text" name="produite" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label> Quantite Vendue</label>
                              <input type="text" name="vendue" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Experience dans l'agriculture contractuelle</label>
                              <select name="experience" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Experience</option>
                                   <option value="Oui">Oui</option>
                                   <option value="Non">Non</option>     
                              </select>
                            </div>
                          </div>
                          
                          </div> 
                          <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label> Type d'agriculture contractuelle</label>
                              <input type="text" name="type_agriculture" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Engagement pour l'experience</label>
                              <input type="text" name="engagement" class="form-control" placeholder="Enter ..." >
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                                <label>Produit</label>
                                <select name="produit" class="form-control select2" style="width: 100%;">
                                      <option  disabled>Choisir Produit</option>
                                      <option value="Laitue">Laitue</option>
                                      <option value="Huile">Huile</option>
                                      
                                </select>
                              </div>
                              </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Periode</label>
                              <select name="periode" class="form-control select2" style="width: 100%;">
                                    <option  disabled>Choisir Periode</option>
                                   <option value="Saisin Seche">Saisin Seche</option>
                                   <option value="Toute l\'annee">Toute l'annee</option> 
                                    <option value="Hivernale">Hivernale</option>    
                              </select>
                            </div>
                          </div>
                          
                          </div> 
                  </div>
                            
                </div>
                <div class="card-footer">
                <a href="accueil.php"  class="btn btn-primary">Retour</a>
                     <button type="submit" name="submit" class="btn text-white" style="background-color:#fd7e14;">Enregistrer</button>
                </div>
          </form>
              
          
      </div>
      </div>
    </section>
</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">MCFIM NDEV</a>.</strong> Tous droits reserves.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
</body>
</html>

<script>
  
</script>