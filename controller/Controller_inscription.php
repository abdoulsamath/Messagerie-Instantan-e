<?php
require_once('../model/Model_inscription.php');

class Controller_inscription{
    public $model;

    //constructeur

public function __construct(){
    $this->model =new Model_inscription();
    $this->model->init();
}

//Action a faire en fonction de la demande

public function invoke(){
    if(isset($_POST['envoyer']) ){
        $ufr="SAT";
        $nom=$_POST['nom'] ;
        $prenom=$_POST['prenom'] ;
       // $_SESSION['prenom']=$prenom;
        $mail=$_POST['email'] ;
        $mdp=$_POST['password'] ;
        $this->model->insert_personne($nom,$prenom,$mail,$mdp,$ufr);
        header('Location: ../index.php');

     } 

}

}
?>




