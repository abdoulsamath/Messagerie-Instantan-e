<?php
    class Model_inscription{
        private static $dbd;
        //connexion a la base de donnee
        public static function init() {
            self::$dbd= new PDO('mysql:host=localhost;dbname=projet_abdou;charse=utf8;','root','');
            self::$dbd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

        //insertion des message
        public function insert_personne($prenom,$nom,$email,$mdp,$ufr){
                    $insert =self::$dbd->prepare('INSERT INTO inscription(nom,prenom,mon_email,mot_de_passe,ufr) VALUES (?,?,?,?,?)');
                    $insert->execute(array($prenom,$nom,$email,$mdp,$ufr));
        }

        //recuperation des message
    //     public function recuperer_mail($email){
    //         $recupmessage=self::$dbd->query('SELECT * from inscription');
    //         $recupmail->execute(array('mon_email'=>$email));
    //         $resultat=$recuptel->fetchAll(PDO::FETCH_ASSOC);
    //         return count($resultat);
    //     }
    }
?>

