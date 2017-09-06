<?php
session_start();

include("../page/header.php");
include("../page/nav.php");
  ?>  
<?php
$servername = "localhost";
$username = "hirsch";
$passwd = "2310";
$ok = false;
$login = $_POST["login"];
$mdp  = md5($_POST["mdp"]);
try
{
    $conn = new PDO("mysql:host=$servername;dbname=myDBTO;charset=utf8",$username,$passwd);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $conn -> prepare( "SELECT * FROM personne WHERE login = :login  AND mot_de_passe = :mot_de_passe" );
    $req -> execute(array(':login' => $login , ':mot_de_passe' => $mdp ));
    $resultat = $req-> fetch();
    if ($req)
    {
        echo"ok la requête marche";
        
        if (!$resultat)
        {
            echo "</br> il n'y a pas de resultat ";
        }
        else 
        {
            
           $id  = $resultat[id];
           $login = $resultat[login];
          $nom  = $resultat[nom];
            $prenom = $resultat[prenom] ;
            $naissance = $resultat[date_de_naissance];
            $mail =  $resultat[email];
       $dateInscription  = $resultat[date_inscription];
       
     
            
            $_SESSION["loginVrai"] = $login;
            $_SESSION["mdpVrai"]  = "cestlemdp";
            $_SESSION["mailAction"] = $mail;
            $_SESSION["naissanceAction"] = $naissance;
            $_SESSION["prenomAction"] = $prenom;
            $_SESSION["nomAction"] = $nom;
            $_SESSION["idAction"] = $id;
            $_SESSION["dateInscriptionAction"] = $dateInscription;
            
            header("Location:../tchat");
        }
       
    }
    
}
    
catch ( PDOException $e)
{
    echo "erreur " .$e ;
}


echo "</br> <a href='../index.php'>index</a>";
echo"</br><a href='../tchat'>acceder au tchat</a>"


?>
</body>
</html>