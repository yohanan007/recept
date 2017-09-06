<?php
echo "salut à toi visiteur la page est en construction";
$mdp = md5($_POST["mdp"]);
$nom = htmlspecialchars($_POST["nom"]);
$login = htmlspecialchars($_POST["login"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$naissance  = htmlspecialchars($_POST["naissance"]);
$email = htmlspecialchars($_POST["email"]);
$servername = "localhost";
$username = "hirsch";
$passwd = "2310";
$ok = false;
try
{
$conn = new PDO("mysql:host=$servername;dbname=myDBTO;charset=utf8",$username,$passwd);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE IF NOT EXISTS personne(id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, prenom VARCHAR(20) NOT NULL, login VARCHAR(20) NOT NULL,
nom VARCHAR(20) NOT NULL,  email VARCHAR(50) NOT NULL, mot_de_passe VARCHAR(50) NOT NULL, date_de_naissance DATE NOT NULL, date_inscritption TIMESTAMP)";
// on utilise exec car aucune donnée n'est retournée

$conn -> exec($sql);
//
}
catch(PDOException $e)
{
    echo  $sql . "</br>". $e->getMessage();
   
}

try
{
  $sql1 ="INSERT INTO personne (nom, prenom, login, email, mot_de_passe, date_de_naissance) VALUES ('".$nom."', '".$prenom."', '".$login."', '".$email."', '".$mdp."',  '".$naissance."')"; 
  $conn -> exec($sql1);
echo "TABLE CREEE ET DONNEE INSEREE<br/>";
$ok = true;
}
catch(PDOException $e)
{
    echo "</br>". $sql1 . "</br>". $e->getMessage();
}

$conn = null;


echo"</br>rappel de vos information";
echo"</br>".$nom;
echo"</br>".$login;
echo"</br>".$prenom;
echo"</br>".$naissance;
echo"</br>".$email;
echo"</br>".$mdp;

if ($ok == true)
{
 header("Location: ../index.php");
}
?>