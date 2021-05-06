<?php
session_start();
    include('db/connexion.php');
    $message = "";
  if(isset($_POST['submit'])){
    $email = $_POST['login'];
    $password =$_POST['mdp'];
    // var_dump($password); die();
    if(!empty($email) && !empty($password)){
        $login = "SELECT * FROM user WHERE login='$email' AND mdp=md5('$password')";
            $resultat = mysqli_query($conn,$login);
            $count = mysqli_num_rows($resultat);
            // var_dump($count); die();
          foreach($resultat as $row){
           
           $login = $row['login'];
          }
        if($count ==1){
                  $_SESSION['nom'] = $login;
             //     var_dump($_SESSION['nom']); die();
                  header("Location: accueil.php");    
          
        }
        else{
            $message = '<div class="alert alert-danger text-center" role="alert">
                    Votre Login ou Mot de Passe est incorrect! Merci de Réessayer

                </div>';
        }
    }
    else{
        $message = '<div class="alert alert-danger text-center" role="alert">
                    Veuillez Renseigner tout les champs!

                </div>';
    }
  } 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion | Mcfim</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color:#fff;">
    <img src="asset/img/ndev.png" alt="" class="  mb-3" style="width:100px;">
<div class="login-box">
  <!-- /.login-logo -->
 <h5 class="text-center">Plateforme numérique N-DEV MCFIM
 Mise en relation Clients/Fournisseurs et Information sur le Marché
</h5>
            <?php if($message){
                    echo $message;
                    } ?>
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
      <a href="#" class="h5 text-success">Recensement des acteurs</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Connectez-vous à votre Session</p>

<form action="index.php" method="POST">
    <div class="input-group mb-3">
          <input type="text" class="form-control" name="login" placeholder="Entrez Votre Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="mdp" placeholder="Mot de Passe">
          <div class="input-group-append">
            <div class="input-group-text ">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn  text-white " style="background-color:#fd7e14;">Connecter</button>
          </div>
          <div class="col-4">
            
          </div>
          <!-- /.col -->
        </div>
</div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.min.js"></script>
</body>
</html>
