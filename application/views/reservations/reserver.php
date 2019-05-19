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
                <h1 class="mx-auto">Faire une réservation</h1>
            </div>
            
            <?php echo validation_errors(); ?>
            <?php echo form_open('Reservations/doReservation'); ?>
                                    
            <form>
                <!---->
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Date Début</label>
                    <div class="col-10">
                        <input class="form-control" name="datearrivee" type="date" value="aaaa-mm-jj" id="example-date-input">
                    </div>
                </div>
                <!---->
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Date Fin</label>
                    <div class="col-10">
                        <input class="form-control" name="datedepart" type="date" value="aaaa-mm-jj" id="example-date-input">
                    </div>
                </div>
                <!---->
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Nombre de personnes</label>
                    <div class="col-10">
                       <input class="form-control" name="nbpersonnes" type="number" value="" id="example-number-input">
                    </div>
                </div>
                <!---->
                <fieldset class="form-group">
                    <legend>Menage</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="menage" value="Oui" id="optionsRadios1" checked>
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="menage" value="Non" id="optionsRadios2">
                            Non
                        </label>
                    </div>                    
                </fieldset>
                <!-- -->
                <input class="btn bg-dark text-white mx-auto" type="submit" value="Réserver"/>
            </form>
        </div>
         
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>


