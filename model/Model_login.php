<?php
    class Model_login{
        private static $dbd;

        //connexion a la base de donnee
        public static function init() {
            self::$dbd= new PDO('mysql:host=localhost;dbname=projet_abdou;charse=utf8;','root','');
            self::$dbd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }


        //verifier si le user existe deja dans la base
        public function user_existe($mail,$mdp){
            $recuptel=self::$dbd->prepare("SELECT mon_email,mot_de_passe from inscription where mon_email=:mon_email and mot_de_passe=:mot_de_passe;");
            $recuptel->execute(array('mon_email'=>$mail,'mot_de_passe'=>$mdp));
            $resultat=$recuptel->fetchAll(PDO::FETCH_ASSOC);
            return count($resultat);
        }

        public function user_name($mail){
            $recuptel=self::$dbd->prepare("SELECT prenom from inscription where mon_email=:mon_email limit 1 ;");
            $recuptel->execute(array('mon_email'=>$mail));
            $resultat=$recuptel->fetchAll(PDO::FETCH_ASSOC);
            //$resultat[0]['prenom'];
            return $resultat[0]['prenom'];
        }

    }
?>

