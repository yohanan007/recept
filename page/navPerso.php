<?php

session_start();
  require("phpFunction/connect.php");
require("phpFunction/functionBDD.php");
        $login =  $_SESSION["loginVrai"];
        $mdp  =$_SESSION["mdpVrai"] ;
        $mail = $_SESSION["mailAction"] ;
        $naissance  = $_SESSION["naissanceAction"];
        $prenom =  $_SESSION["prenomAction"] ;
        $nom  = $_SESSION["nomAction"] ;
        $id  = $_SESSION["idAction"] ;
        $dateInscription = $_SESSION["dateInscriptionAction"];
             if (!empty($login) && $mdp ==="cestlemdp")
             {
echo"
<!DOCTYPE html>
<html>
     <head>
        <title>index du site</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        </head>
        <body>
            <nav class='navbar navbar-default' data-spy='affix' data-offset-top='197'>
            <div class='container'>
                <div class='navbar-header'>
                <a class='navbar-brand' href='index.php'>
     
               index
         </a>
                </div>
                <ul class='nav navbar-nav'>
                  <li class='active'><a href='pageperso.php'>INDEX PAGE PERSO</a></li>
                  <li><a href='donnee.php'>DONNEE ET MODIFICATION</a></li>
                  <li><a href='tchatperso.php'>TCHAT</a></li>
                  <li><a href='documentperso.php'>DOCUMENT</a></li>
                  <li><a href='mail.php'>MESSAGE INTERNE</a></li>
                </ul>
                </div>
        </nav>
";}
else
{
    header("Location:index.php");
}

?>
