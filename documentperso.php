<?php

include("page/navPerso.php");

?>
<!--<style>
    .clique
    {
        
        background-color:red;
    }
    .clique:hover
    {
        background-color: blue;
    }
</style>-->

<section class="container">
    
    <?php
login();
if (($_SESSION["loginVrai"]==="adminYohanan"))
{
    ?>
    
    <section class="container">
       
        <div class='well'>
        <h4>choix des document à envoyer</h4>
    <form action="documentPerso/docadmin.php" method="post" enctype="multipart/form-data">
        <p>Adresse login</p>
        <input type="text" id='adresseLogin' name='adresseLogin' value='valeur' class='form-control'></input>
        <span id="reponse"></span>
        <p>Choix du document</p>
        <input type="file" name="documentAdmin"/>
        <input type="submit" name="submit"/>
    </form>
    </div>
    <div class='well'>
        <p>document integrer</p>
        <?php
        lectureDoc();
        ?>
    </div>
    </section>
    
    <?php
}

else 
{
    ?>
<h3>page document reception </h3>
<?php
echo "voici le session: ".$_SESSION["loginVrai"];
lectureDocLogin($_SESSION["loginVrai"]);
?>
</section>
<?php
}

?>
<span id="js2"></span>
<script src='js/adresse.js'>
</script>


</body>