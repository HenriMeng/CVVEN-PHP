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

        <div class="row m-5">
            <h1 class="mx-auto text-light">CCVEN-PHP</h1>     
        </div>

        <div class="container shadow p-5 bg-light rounded" style="margin-top: 150px; width: 600px;">
            <!-- title -->
            <div class="row">
                <h1 class="mx-auto mb-3">Page d'inscription</h1>     
            </div>
                        
            <?php 
                if ($result == 'error'){
                    echo    '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                                Attention, identifiant indisponible
                            </div>';
                }
                else if ($result == 'error2'){
                    echo    '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                        Attention, vos mots de passe ne sont pas identiques
                    </div>';
                }
            ?>

            <!-- form -->            
            <?php echo validation_errors(); ?>
            <?php echo form_open('Welcome/doInscription'); ?>

            <form>
                <div class="form-group">
                    <label>Identifiant</label>
                    <input type="text" name="user_identifiant" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="user_mdp" class="form-control">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input type="password" name="confirm_user_mdp" class="form-control">
                </div>
                
                <hr class="my-5">
                
                <div class="row">         
                    <div class="col">
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="user_prenom" class="form-control" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="user_nom" class="form-control" placeholder="Nom">
                        </div>
                    </div>    
                </div>    
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="user_email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" name="user_adresse" class="form-control">
                </div>
                <div class="form-group">
                    <label>Date de naissance</label>
                    <input type="text" name="user_datenaissance" class="form-control">
                </div>
                <div class="form-group">
                    <label>Téléphone</label>
                    <input type="text" name="user_tel" class="form-control">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_sexe" id="inlineRadio1" value="t">
                    <label class="form-check-label" for="inlineRadio1">Homme</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_sexe" id="inlineRadio2" value="f">
                    <label class="form-check-label" for="inlineRadio2">Femme</label>
                </div>
                <div class="mt-5">
                    <input class="btn bg-dark text-white mx-auto" type="submit" value="S'inscrire"/>
                    <a class="btn border bg-dark text-white" style="margin-left: 340px; padding-top: 7px; padding-bottom: 7px; padding-left: 10px; padding-left: 10px;" href="<?php echo base_url('index.php/Welcome/index')?>">Retour</a>                                
                </div>
            </form>                     
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>


