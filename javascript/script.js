$('#eye').click(function() {


    if ($("#pwd").attr("type") === "password") {
        $("#pwd").attr("type", "text");
    } else {
        $("#pwd").attr("type", "password");
    }
})

$('#ceye').click(function() {
    if ($("#cpwd").attr("type") === "password") {
        $("#cpwd").attr("type", "text");
    } else {
        $("#cpwd").attr("type", "password");
    }
})

$(document).ready(function() {
    $("#envoyer").hide();
    $("#email").keyup(function() {
        if (valideremail()) {
            $("#email").css("border", "2px solid green");
            $("#smsemail").html("<p class= 'text-success' > valider </p>");
        } else {
            $("#email").css("border", "2px solid red");
            $("#smsemail").html("<p class= 'text-danger'> email invalide</p>");
        }
        masquer_envoyer();
    })

    $("#pwd").keyup(function() {
        if (validermdp()) {
            $("#pwd").css("border", "2px solid green");
            $("#smspwd").html("<p class= 'text-success' > valider </p>");
        } else {
            $("#pwd").css("border", "2px solid red");
            $("#smspwd").html("<p class= 'text-danger' > mot de passe invalide</p>");
        }
        masquer_envoyer();
    });
    $("#cpwd").keyup(function() {
        if (valider_conf_pwd()) {
            $("#pwd").css("border", "2px solid green");
            $("#smscpwd").html("<p class= 'text-success' > valider </p>");
        } else {
            $("#pwd").css("border", "2px solid red");
            $("#smscpwd").html("<p class= 'text-danger' >utiliser le meme mot de passe</p>");
        }
        masquer_envoyer();
    })
    $("#annuler").click(function() {
        $("#inscrit").trigger("reset");
    });

})


function masquer_envoyer() {
    if (valideremail() && validermdp() && valider_conf_pwd()) {
        $("#envoyer").show();
    } else {
        $("#envoyer").hide();
    }
}

function valideremail() {
    var email = $("#email").val();
    var filtre = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    if (filtre.test(email)) {
        return true;
    } else {
        return false;
    }
}

function validermdp() {
    var pwd = $("#pwd").val();
    if (pwd.length > 8) {
        return true;
    } else {
        return false;
    }
}

function valider_conf_pwd() {
    var pwd = $("#pwd").val();
    var cpwd = $("#cpwd").val();
    if (pwd == cpwd) {
        return true;
    } else {
        return false;
    }
}