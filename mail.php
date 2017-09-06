<?php
include("page/navPerso.php");
if ($_SESSION["mdpVrai"]=="cestlemdp" && !empty($_SESSION["loginVrai"]))
{
?>
<div class="container">
    <div class="well">
    <form action="mail/mailAction.php" method="post">
        <div class='form-group'>
    <?php
if (($_SESSION["loginVrai"]==="adminYohanan"))
{
    echo "<input type='text' id='adresseLogin' name='adresseLogin' class='form-control'></input>";
}
else
{
    echo"<input type='hidden' name='adresseLogin' value='adminYohanan'></input>";
    echo"<p>mail destiné à: adminisrateur</p>";
}
?>
</br>
<textarea name="mailLogin" rows="10" class="form-control"></textarea>
<input type="submit" class='btn btn-default'></input>
</div>
</form>
</div>
     </div>   
<?php
}
else
{
echo"vous n'avez pas l'autorisation pour accéder à cette page";
echo"</br><a href='../index.php'>acceuil du site</a>";
}
?>