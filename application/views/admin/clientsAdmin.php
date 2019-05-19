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
<!--    <body style="background-image: url(<?php echo base_url(); ?>assets/images/paysageJura4.jpg); background-size: cover;">-->
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url('index.php/Admin/displayAccueil'); ?>">        
                <img src="<?php echo base_url('assets/images/logoJura.png'); ?>" class="img-fluid mx-5" style="height: 50px; margin-top: 10px; margin-bottom: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-5">
                        <a class="nav-link text-white" href="<?php echo base_url('index.php/Admin/displayClients'); ?>">Clients</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link text-white" href="<?php echo base_url('index.php/Admin/displayReservations'); ?>">Réservations</a>
                    </li>                         
                </ul>
                <a class="nav-link text-white mr-3" href="<?php echo base_url('index.php/Welcome/index'); ?>">Déconnexion</a>
            </div>
        </nav>


        <div class="container-fluid px-5">
            <!-- title -->
            <div class="row my-5">
                <h1 class="mx-auto"><?php echo "Les clients"; ?></h1> 
            </div>

            <!-- outils -->
<!--            <div class="row mb-3">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Croissant
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Décroissant
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Client
                    </label>
                </div>


                <button type="button" class="btn btn-success" onclick="<?php $dsdclients = "null" ?>">Sign Up</button>
            </div>-->

            <!-- affichage -->
            <div class="row">
                <table class="table text-center border">
                    <thead>
                        <tr>
                            <th scope="col">idclient</th>
                            <th scope="col">user_identifiant</th>
                            <th scope="col">user_mdp</th>
                            <th scope="col">user_prenom</th>
                            <th scope="col">user_nom</th>
                            <th scope="col">user_email</th>
                            <th scope="col">user_adresse</th>
                            <th scope="col">user_datenaissance</th>
                            <th scope="col">user_tel</th>
                            <th scope="col">user_sexe</th>
                            <th scope="col">admin</th>
                            <th scope="col">Gestion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clients as $client): ?>
                            <tr>
                                <td><?php echo $client["idclient"] ?></td>
                                <td><?php echo $client["user_identifiant"] ?></td>
                                <td><?php echo $client["user_mdp"] ?></td>
                                <td><?php echo $client["user_prenom"] ?></td>
                                <td><?php echo $client["user_nom"] ?></td>
                                <td><?php echo $client["user_email"] ?></td>
                                <td><?php echo $client["user_adresse"] ?></td>
                                <td><?php echo $client["user_datenaissance"] ?></td>
                                <td><?php echo $client["user_tel"] ?></td>
                                <td><?php echo $client["user_sexe"] ?></td>
                                <td><?php echo $client["admin"] ?></td>
                                <td>
                                    <?php
                                        echo '<a class="btn btn-success" href="'  .  base_url("index.php/Admin/DeleteUser/".$client["idclient"])  .  '">Supprimer</a>';    
                                    ?>
                                </td>                            
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>                                
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>