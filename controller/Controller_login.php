<?php
require_once('model/Model_login.php');

class Controller_login{
    public $model;

    //constructeur

public function __construct(){
    $this->model =new Model_login();
    $this->model->init();
}

//Action a faire en fonction de la demande

public function invoke(){
    if(isset($_POST['envoyer']) ){
        $mail=$_POST['email'] ;
        $mdp=$_POST['password'] ;
        try{    
          $compteur=$this->model->user_existe($mail,$mdp);
 
         if($compteur > 0){
             session_start();
             $_SESSION['prenom']=$this->model->user_name($mail);
             $_SESSION['email']=$mail;
             header('Location: view/messagerie.php');
         }
         else{
             echo "nom d'utilsateur ou mot de passe incorrect";
         }
        }
        catch(PDOException $e){
         echo "erreur :" .$e->getMessage();
         exit();
        }
     
   }
}

}

?>


