<?php
    class Model{
        private static $dbd;

        //connexion a la base de donnee
        public static function init() {
            self::$dbd= new PDO('mysql:host=localhost;dbname=projet_abdou;charse=utf8;','root','');
            self::$dbd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

        //insertion des message
        public function insert_message($pseudo,$sms,$heure){
                    $prenom=$_SESSION['prenom'];
                    $insert =self::$dbd->prepare('INSERT INTO messagerie(pseudo,message,heure,prenom) VALUES (?,?,?,?)');
                    $insert->execute(array($pseudo,$sms,$heure,$prenom));
        }

        //recuperation des message
        public function recuperer_message(){
            $recupmessage=self::$dbd->query('SELECT * from messagerie order by id asc');
            return $recupmessage;
        }
    }
?>