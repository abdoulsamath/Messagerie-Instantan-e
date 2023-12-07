<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            /* background-image: url("OIP.jfif");
            background-repeat: no-repeat;
            background-size: cover; */
            
        }
        .msg{
            background:rgb(103, 198, 105);
            padding: 5px 10px;
            border-radius:10px;
            margin-bottom:8px;
            width: fit-content;
            margin-right:45px;
            
        }
        .sect{
            /* background-color:rgb(4, 105, 68); */
            padding: 5px 10px;
            border-radius:5px;
            margin-bottom:8px;
            width: fit-content;
            margin-left:1000px;
            height :100px;
            float: right;
            clear: both;
        }
        .msg1{
            background: rgb(236, 233, 233);
            padding: 5px 10px;
            border-radius:10px;
            margin-bottom:8px;
            width: fit-content;
            margin-left:50px;
        }
        .msg p{
           margin: 0;
           font-weight:bold;
        }
        .msg span{
            font-size:0.7rem;
            margin-left:15px;
        }
        .mms{
            overflow-y: auto;
            height: 500px;
            background:fixed;
        }
        .photo{
            height:40px;
            float:left;
        }
        .photo1{
            height:40px;
            float : right;
        }
        .heure{
            float: right;
            margin-bottom:0px;
        }
        p{
            font-weight: bold;
        }
        .sect1{
            padding: 5px 10px;
            border-radius:5px;
            margin-bottom:8px;
            width: fit-content;
            margin-left:30px;
            height :100px;
            float: left;
            clear: both;

        }
        .msge{
            font-size:200px;
        }
        /* .messages{
            height: 1000px;
        } */
        /* .pseudo{
            margin-top:500px;
        } */
    
    </style>
</head>
<body>
<div class="messages">
<div class="mms">
<?php
        $dbd= new PDO('mysql:host=localhost;dbname=projet_abdou;charse=utf8;','root','');
        $message=$dbd->query('SELECT * from messagerie order by id asc');
        session_start();
while($sms=$message->fetch()){
    if($sms['pseudo']==$_SESSION['email']){
    ?>
    
        <div class="sect" >
        <img src="image/emetteur.svg" alt="profil" class="photo1"> 
        <div class="msg">
            <p class="pseudo">
                <?= $sms['prenom'] ; ?>
            </p>       
                <?= $sms['message']; ?>
                <span >  
                <?= $sms['heure']; ?>
            </span>
        </div>
        </div>
    <?php
    }
    else{
        ?>
        <div class="sect1" >
        <img src="image/destinateur.svg" alt="profil" class="photo"> 
        <div class="msg1" >
            <p class="pseudo1">
                <?= $sms['prenom']; ?>
            </p>
                <?= $sms['message']; ?>
            <span class="heure1">
                <?= $sms['heure']; ?>
            </span>
        </div><br>
        </div>
       <?php
    }
}
?>
</div>

</body>
</html>