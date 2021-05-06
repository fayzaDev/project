<?php 
    session_start();
    if(empty($_SESSION['nom'])){
        header("Location: index.php"); 
    }
    include('db/connexion.php');
    $query ="SELECT * FROM acteurs ORDER BY ID DESC";  
    $result = mysqli_query($conn, $query);  
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
  <link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
  <script src="asset/plugins/jquery/jquery.min.js"></script>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Activités
                <span class="badge right text-white" style="background-color:#fd7e14"></span>
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
            <a href="ajoutActeur.php" class="btn text-white  mb-2"  style="background-color:#edba35;"><i class="fas fa-plus"></i> Ajouter Acteur</a>
            <div class="card card-outline card-dark">
                <div class="card-header">
                <h3 class="card-title text-dark"><i class="fas fa-list-ul fa-sm"></i> Listes des Acteurs</h3>
                
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="tableActeur" class="table table-bordered text-center">
                    <thead>
                    <tr>
                    <th>Région</th>
                    <th>Département</th>
                    <th>Commune</th>
                    <th>Type d'Acteur</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Lieu de Naissance</th>
                    <th>Age</th>
                    <th>Domaine d'activité Commerciale</th>
                    <th>Années d'exercice</th>
                    <th>Catégorie professionnelle</th>
                    <th>Lieu d'activité</th>
                    <th>Téléphone</th>
                    <th>Zone de couverture</th>
                    <th>Type de produits commercialisés</th>
                    <th>Mode de commercialisation ou d'achat</th>
                    <th>Période de commercialisation</th>
                    <th>Circuits de ravitaillement</th>
                    <th>Quantité produite</th>
                    <th>Quantité vendue</th>
                    <th>Expérience dans l'agriculture contractuelle</th>
                    <th>Type d'agriculture contractuelle</th>
                    <th>Engagement pour l'expérience</th>
                    <th>Produit</th>
                    <th>Période</th>
                    </tr>
                    </thead>
                    <?php 
                      while($row = mysqli_fetch_array($result)){
                        echo '
                          <tr>
                              <td>'.$row['region'].'</td>
                              <td>'.$row['departement'].'</td>
                              <td>'.$row['commune'].'</td>
                              <td>'.$row['acteur'].'</td>
                              <td>'.$row['nom'].'</td>
                              <td>'.$row['prenom'].'</td>
                              <td>'.$row['sexe'].'</td>
                              <td>'.$row['naissance'].'</td>
                              <td>'.$row['age'].'</td>
                              <td>'.$row['domaine'].'</td>
                              <td>'.$row['annee'].'</td>
                              <td>'.$row['categorie'].'</td>
                              <td>'.$row['lieu'].'</td>
                              <td>'.$row['telephone'].'</td>
                              <td>'.$row['zones'].'</td>
                              <td>'.$row['type_produit'].'</td>
                              <td>'.$row['mode'].'</td>
                              <td>'.$row['commercialisation'].'</td>
                             
                              <td>'.$row['circuit'].'</td>
                              <td>'.$row['qte_produite'].'</td>
                              <td>'.$row['qte_vendue'].'</td>
                              <td>'.$row['experience'].'</td>
                              <td>'.$row['type_agriculture'].'</td>
                              <td>'.$row['engagement'].'</td>
                              <td>'.$row['produit'].'</td>
                              <td>'.$row['periode'].'</td>

                          <tr>
                        ';
                        
                        }
                    
                    ?>
                    
                </table>
                </div>
        <!-- /.card-body -->
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

<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="asset/plugins/jszip/jszip.min.js"></script>
<script src="asset/plugins/pdfmake/pdfmake.min.js"></script>
<script src="asset/plugins/pdfmake/vfs_fonts.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="asset/dist/js/adminlte.min.js"></script>


<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
</body>
</html>

<script>
  $(document).ready(function(){  
      $('#tableActeur').DataTable();  
 });  
 </script>  