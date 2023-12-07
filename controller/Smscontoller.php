<?php
require_once('../model/Model.php');

class Smscontroller{
    public $model;

    //constructeur

public function __construct(){
    $this->model =new Model();
    $this->model->init();
}

//Action a faire en fonction de la demande

public function invoke(){
    if(isset($_POST['envoyer'])){
        if(!empty($_POST['message'])){
            session_start();
            $pseudo=$_SESSION['email'];
            $sms=$_POST['message'];
            //$prenom=$_SESSION['prenom'];
            $heure=date('H:i');
            $this->model->insert_message($pseudo,$sms,$heure);
        }
        else{
            echo "veillez ecrire un message";
        }
         //$message=$this->model->recuperer_message();
        // include '../view/loadmessage.php';
    }
}
}

?>

