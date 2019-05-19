


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body class="bg-info">

        <!-- Title -->
        <div class="row m-5">
            <h1 class="mx-auto text-light">CCVEN-PHP</h1>     
        </div>

        <!-- Formulaire -->
        <div class="container shadow p-5 bg-light rounded" style="margin-top: 150px; width: 600px;">
            <!-- Formulaire/title -->
            <div class="row">
                <h1 class="mx-auto mb-3">Page de connexion</h1>     
            </div>

            <?php
            if ($result == 'false'){
                echo    '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Identifiant ou mot de passe incorrect
                        </div>';
            }
            ?>
            <!-- Formulaire/form -->            
            <?php echo validation_errors(); ?>
            <?php echo form_open('Welcome/index'); ?>
            
            <form>
                <div class="form-group">
                    <label for="exampleInputPassword1">Identifiant</label>
                    <input type="text" name="user_identifiant" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="user_mdp" class="form-control" id="exampleInputPassword1">
                </div>
                    <input class="btn bg-dark text-white" type="submit" value="Se connecter"/>
                    <a class="btn border bg-dark text-white" style="margin-left: 300px; padding-top: 7px; padding-bottom: 7px; padding-left: 10px; padding-left: 10px;" href="<?php echo base_url('index.php/Welcome/doInscription')?>">S'incrire</a>            
            </form>                       
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>

