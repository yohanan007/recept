// insertion de message dans la bdd
<?php
session_start();
require("../phpFunction/connect.php");
if (!empty($_SESSION["loginVrai"])&&!empty($_SESSION["nomTable"]))
{
$login =  htmlspecialchars($_SESSION["loginVrai"]);
$table = htmlspecialchars($_SESSION["nomTable"]);
$message = htmlspecialchars($_POST["message"]);  
$sql = "INSERT INTO ".$table."(login,phrase) VALUES ('".$login."','".$message."')";
 if ($conn->query($sql) === TRUE)
 {
     echo"insertion ok";
     //header("Location:tchat.php");
 }
 else 
 {
     echo "</br>erreur d'insertion, requete envoye: " .$sql;
 }
}
else 
{
    echo "</br>login ou table non verifié";
    echo "</br> <a href='../index.php'>index</a>";
}

?>
