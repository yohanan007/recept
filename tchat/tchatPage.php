<?php
             if ($_SESSION["mdpVrai"]=="cestlemdp" && !empty($_SESSION["loginVrai"]) && !empty($_SESSION["nomTable"]))
             {
                 
                 
              
    if ($conn->connect_error)
    {
        echo"erreur de connection à la base de donnée";
    }

?>


    <div class='container'>
<article  id='tchat' data-spy='affix' data-offset-top='197' style='padding:0; margin: 0; ' >
   <div id='tchatFenetre' style='background-color: #036635; color:#FFFBCC; position:relative; top:0;'>
     
  <?php echo"bienvenue  " .$_SESSION['loginVrai']; ?>
  <div style='display:block; background-color:black; height: 1px;'></div>
    </div>
    <span id="message"  style= 'display: block; height:75%;  overflow: scroll;'>
        <?php
        $table = $_SESSION["nomTable"];
        lecturetchatBddmyDBTO($table);
        ?>
    </span>
    <div id='formTchat' class='container'>
        <!---action="tchat/action.php" method="post"-->
    <form  class="form-horizontal">
        <div class="form-group">
        <input id="messageInput" type="text" name="message"/>
        <button class="btn btn-primary" id="buttonTchat2">valider</button>
        </div>

    </form>
</div>
</article>
</div>

<!-- chargement du dernier message avec jquery !-->
    <script src="js/charge.js"></script>
   <script>
   
  
   $("#buttonTchat2").click(function(){
       var donnee = $("#messageInput").val();
      
       console.log("donne du input: " + donnee);
       
     $.post(
        "tchat/action.php",
        {message: donnee},
        function(data,success){
           console.log("data: " + data + " et success: " + success);
        });
   });
   
   var i=1;
          $('#tchatFenetre').click(function(){
              if (i===1)
              {
                  $('#message').hide();
                  $('#formTchat').hide();
                  $('#tchat').css('height','5%');
                  i=0;
                  
              }
              else
              {
                   $('#message').show();
                  $('#formTchat').show();
                  $('#tchat').css('height','45%');
                  i=1;
              }
          });
          
       </script>
       <?php
                   
                 
             }
            ?>
