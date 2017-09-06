//fonction jquery 

function charger()
{
    setTimeout(function(){
        $.ajax({
        url:"phpFunction/tchatLecture.php",
        type: "POST",
        success: function(html){
            $("#message").append(html);
        }
        
    });
    charger();
},1000);
}
charger();
