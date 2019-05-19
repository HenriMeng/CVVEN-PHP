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
                        
        
        <div class="container shadow-lg rounded p-5" style="margin-top: 200px;">  
            <!-- #row_1 -->
            <div class="row"> 
                <p class="text-center col-12">Bienvenue sur mon application Web que j'ai réalisé à l'aide de :</p>                
                <p>
                    <ul class="mx-auto">
                        <li>Alexander JOLLET</li>
                        <li>Maxime DEROO</li>
                        <li>Mohamed MOUSSA</li>
                    </ul>
                </p>
            </div>
            <!-- /.row_1 -->

            <!-- #row_2 -->
            <div class="row">

                <div class="card bg-info m-3 col-sm" style="width: 18rem; height: 18rem;">
                    <h5 class="card-title text-center font-weight-bold mt-5">Qui suis-je ?</h5>
                    <div class="card-body px-3">
                        <p class="card-text">
                            <ul>
                                <li>Je m'appelle Henri MENG</li>
                                <li>J'ai développé cette application dans le cadre de ma 2ème année de BTS SIO</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="card bg-warning m-3 col-sm" style="width: 18rem; height: 18rem;">
                    <h5 class="card-title text-center font-weight-bold mt-5">Environnement de développement</h5>
                    <div class="card-body px-3">
                        <p class="card-text">
                            <ul>
                                <li>IDE: Netbeans 8.2</li>
                                <li>Framework: CodeIgniter</li>
                                <li>Base de données: PostgreSQL</li>
                            </ul>
                        </p>
                    </div>
                </div>  
                <div class="card bg-dark m-3 col-sm text-white" style="width: 18rem; height: 18rem;">
                    <h5 class="card-title text-center font-weight-bold mt-5">Conclusion</h5>
                    <div class="card-body px-3">
                        <p class="card-text">
                            Ce projet m'a été très bénéfique que ce soit en développement ou dans mon attitude à travailler en groupe
                        </p>
                    </div>
                </div>  

            </div>            
            <!-- /.row_2 -->           

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>