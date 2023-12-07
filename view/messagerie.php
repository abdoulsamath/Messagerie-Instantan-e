<?php
require_once('../Controller/Smscontoller.php');
$controller= new Smscontroller();
$controller->invoke();     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="lecss.css"> 
    <title>Messagerie</title>
    <script src="../javascript/jquery-3.6.1.js"></script>
    <style>
        h1{
            color:white;
        }
    </style>
</head>
<body>
               <div class="row">
                  <div class="col-md-12">
                      <h1>Chat App</h1>
                  </div>
               </div>
               <div id="messages" class="contenu"></div>
               <div class="messagerie">
               <form method="POST" action="" >
                    
                   <input name="message" id="sms" autocomplete="off" autofocus placeholder="taper votre message">
                   <input type="submit" name="envoyer" class="droite" value="envoyer" id="envoyer">           
               </form>
               </div>

               <script>
                    $(document).ready(function(){
                       setInterval(() => {
                        $.ajax({
                            type:"POST",
                            url:"loadmessage.php",
                            datatype:"html",
                            success: function(data){
                                $("#messages").html(data);
                            }
                        }) 
                       }, 1000);              
                    })
               </script>
             
</body>
</html>