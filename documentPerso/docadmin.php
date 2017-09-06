<?php
require("../phpFunction/functionBDD.php");

$target_dir  = "../documentenvoye/";
$target_file = $target_dir. basename($_FILES["documentAdmin"]["name"]);
$upload_ok = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION).
    // cherche si le fichier est un fichier pdf ou doc
    $extension = array('.doc','.pdf');
    // function strrchr retourne la derniere occurence du nom d'un fichier
    $extensions = strrchr($_FILES["documentAdmin"]["name"],'.');
    $taille = filesize($_FILES["documentAdmin"]["tmp_name"]);
    $tailleMaxi = 100000000;
    echo "debut des conditions";
    echo "type de document </br>". $extensions;
    echo "</br>taille du fichier" .$taille;
    echo "</br> taille maxi" .$tailleMaxi;
    if(isset($_POST["submit"]))
    {
        $nom = $_POST["adresseLogin"];
       
        if (in_array($extensions,$extension))
        {
            if($taille<$tailleMaxi)
            {
                //upload du fichier
                if (move_uploaded_file($_FILES["documentAdmin"]["tmp_name"],$target_file))
                {
                    echo "fichier telechargé";
                    insertion_document_bdd($target_file,$nom);
                    header("Location:../documentperso.php");
                    
                }
            }
           else  
           {
                echo "fichier trop lourd";
            }
        }
        else 
        {
            echo  "n'est pas un fichier de type doc ou pdf";
        }
    }
    else 
    {
        echo "erreur envoi vide";
    }


?>