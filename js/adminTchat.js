console.log("bonjour à tous");
$("button").click(function(){
    console.log("le bonton fonctionne correctement");
    var i = $(this).attr("id");
    console.log("id:" + i);
    $.post("../phpFunction/session.php",{nomTable:i},function(result){console.log(result);
    console.log("retour ok");
    });
    console.log("rediretion de page");
    window.location.href="../tchatperso.php";
});