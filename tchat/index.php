<?php
session_start();
include("../page/header.php");
require("../phpFunction/connect.php");
if ($_SESSION["mdpVrai"]=="cestlemdp" && !empty($_SESSION["loginVrai"]))
                    {
                        if($_SESSION["loginVrai"]!==adminYohanan)
                        {
                        echo "<b>bonjour ".$_SESSION["loginVrai"]."</b>";
                         if ($conn -> connect_error)
                         {
                             die("connecttion à la base de donnée echoué" .$conn->connect_error);
                         }
                             $sql = "CREATE TABLE  IF NOT EXISTS blabla_".$_SESSION["loginVrai"]."(id INT(6) AUTO_INCREMENT PRIMARY KEY ,login VARCHAR(30) NOT NULL ,phrase TEXT ,heure TIMESTAMP)";
 
                                 if ($conn-> query($sql) === TRUE)
                                 {
                                     $_SESSION["nomTable"] = "blabla_".$_SESSION["loginVrai"];
                                     echo   "</br>phase 1 ok";
                                     $sql = "SELECT * FROM  discussion WHERE tableNom = blabla_".$_SESSION["loginVrai"];
                                     $result = $conn->query($sql);
                                     if ($result -> num_rows > 0)
                                     {
                                         echo "</br>il existe deja une entrée";
                                     }
                                     else 
                                     {
                                         echo "</br>preparation phase 2";
                                         // problème à resoudre
                                     $sql ="INSERT INTO discussion (tableNom) VALUES ('blabla_".$_SESSION["loginVrai"]."')";
                                     
                                   if ($conn->query($sql) === TRUE)
                                   {
                                       echo "</br>phase 2 ok";
                                      header("Location:../pageperso.php");
                                       
                                   }
                                   else
                                   {
                                       echo "</br>erreur phase 2";
                                   }
                                     }
                                 }
                                 else 
                                 {
                                    echo  "erreur phase 1";
                                 }
                        }
                        if (($_SESSION["loginVrai"]=="adminYohanan"))
                        {
                            header("location:adminTchat.php");
                        }
 
                    }
                    
                    
                    else {
                        echo "vous n'êtes pas connecté";
                    }
?>
</br><a href="../index.php">index</a>

<?php
include("../page/footer.php");
?>
