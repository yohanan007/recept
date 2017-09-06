


$('#adresseLogin').keyup(function(){
   console.log("fonction en action"); 
   var a = $(this).val();
   console.log("valeur :" + a);
   $.post("phpFunction/session2.php",{recherche:a},function(result){console.log(result);
      
   });
   // fonction ok
   $.ajax({url:"phpFunction/rechercheLogin.php",
 
   success: function(result){
         console.log("resultat" + result);
$("#ajout").remove();
         $("#reponse").append("<div id='ajout'  style='position:absolute;  opacity:0.9; '>"+result+"</div>");
            $(".clique").click(function(){
   console.log("verif");
   var a = $(this).text();
   console.log("valeur de a"  + a);
   var b = $('#adresseLogin').val();
   console.log("valeur de b" + b);
   b = b+a;
   $('#adresseLogin').val(b);
   console.log("valeur theorique input"  +b);
});
      }
   });
});

