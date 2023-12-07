<?php
require_once('../Controller/Controller_inscription.php');
$controller= new Controller_inscription();
$controller->invoke();     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.js">
    <link rel="stylesheet" href="../bootstrap/stylecss.css">
    <script src="https://kit.fontawesome.com/2aaa3ca070.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              
            </div>
            <div class="col-md-5">
                <form action="" id="inscrit" method="POST">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-left">
                                Formulaire d'Inscription
                            </h3>
                        </div>
                       
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4"><input class="form-control" type="text" name="prenom" placeholder="Prenom"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="nom" placeholder="Nom"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="Email" class="form-control" name="email" placeholder="Email" id="email">
                            <span id="smsemail"></span>
                        </div>
                    </div>
                    <span class="row">
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password" placeholder="mot de passe" id="pwd">
                    </div>
                    <i class="fas fa-eye " id="eye"></i>
                    <span id="smspwd"></span>
                    </span>
                    <span class="row">
                    <div class="col-md-10"><input type="password" class="form-control" name="cpassword" placeholder="Confirmer mot de passe" id="cpwd">
                        <i class="fas fa-eye " id="ceye"></i>
                        <span id="smscpwd"></span>
                    </span>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <select class="form-control select">
                            <option>SAT</option>
                            <option>Medecine</option>
                            <option>SEG</option>
                            <option>IPSL</option>
                            <option>CRAC</option>
                            <option>SJP</option>
                            <option>LSH</option>
                            <option>STAPS</option>
                        </select>
                </div>
            </div>
            <input type="submit" class="btn btn-info" value="envoyer" name="envoyer" id="envoyer">
            <input type="reset" class="btn btn-warning" value="annuler" name="annuler" id="annuler">
            <div class="link">Déjà inscrit? <a href="../index.php">Connectez-vous maintenant</a></div>
            </form>
        </div>
    </div>
    </div>
    <script src="../javascript/jquery-3.6.1.js"></script>
    <script src="../javascript/script.js"></script>
</body>

</html>