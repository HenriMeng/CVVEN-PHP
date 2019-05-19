<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">
        
        <style>
            *{    
                font-family: 'Montserrat', sans-serif;
            }
        </style>
        
        <title>Hello, world!</title>        
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url('index.php/Reservations/displayAccueil');?>">        
                <img src="<?php echo base_url('assets/images/logoJura.png');?>" class="img-fluid mx-5" style="height: 50px; margin-top: 10px; margin-bottom: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-5">
                        <a class="nav-link text-white" href="<?php echo base_url('index.php/Reservations/doReservation');?>">Réserver</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link text-white" href="<?php echo base_url('index.php/Reservations/displayReservations');?>">Afficher</a>
                    </li>                       
                    <li class="nav-item px-5">
                        <a class="nav-link text-white" href="<?php echo base_url('index.php/Profil/setPassword');?>">Profil</a>
                    </li>  
                </ul>
                <a class="nav-link text-white mr-3" href="<?php echo base_url('index.php/Welcome/index');?>">Déconnexion</a>
            </div>
        </nav>

        <div class="container border rounded p-5" style="margin-top: 100px;">
            <div class="row mb-5">
                <h1 class="mx-auto">Votre profil</h1>
            </div>
                 
            <?php 
            if ($result == 'error'){
                echo    '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Votre mot de passe est incorrect
                        </div>';                            
            }  
            else if ($result == 'error2'){
                echo    '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Vos nouveaux mots de passe ne sont pas identiques
                        </div>';                     
            }
            else if ($result == 'success'){
                echo    '<div class="alert alert-success text-center font-weight-bold" role="alert">
                            Les modifications ont bien été réalisées
                        </div>';  
            }
            ?>
            
            <!-- form -->            
            <?php echo validation_errors(); ?>
            <?php echo form_open('Profil/setPassword'); ?>

            <form>
                <div class="form-group disabled">
                    <label for="exampleInputPassword1">Identifiant</label>
                    <input class="form-control" type="text" placeholder="<?php echo $this->session->userdata('username') ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe actuel</label>
                    <input type="text" name="user_password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nouveau mot de passe</label>
                    <input type="password" name="new_user_password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmation nouveau mot de passe</label>
                    <input type="password" name="new_confirm_user_password" class="form-control" id="exampleInputPassword1">
                </div>
                <input class="btn bg-dark text-white mx-auto" type="submit" value="Sauvegarder"/>
            </form>     
        </div>
         
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>


