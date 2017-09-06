<?php 
header('Access-Control-Allow_Origin:*');
$target_dir="uploads/";
/* echo basename("etc/truc/sudoer.d") ; donne  sudoer.d 
 echo basename("etc/truc/sudoer.d",".d"); donne sudoer*/
$target_file = $target_dir . urldecode($_FILES["file"]["name"]).".jpg";
// variable verifiant si le telechargement c'est bien passé
$upload_ok = 1;
/*pathinfo() donne certaine information sur le chemin et le fichier */
$imagefiletype = pathinfo($target_file,PATHINFO_EXTENSION);
// verifie si le fichier est bien une image


            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if ($check !== false )
            {
                echo "</br>le fichier est bien une  image-".$check["mime"].".";
                $upload_ok = 1;
            }
            else 
            {
                echo "</br>le fichier n'est pas supporter par ce site";
                $upload_ok = 0;
            }
    
                    if ($upload_ok ==0)
                    {
                        echo "</br>desolé votre fichier n'a pas été telechargé";
                    }
                    else
                    {
                        if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
                        {
                            echo "</br>le fichier" .basename($_FILES["file"]["name"])."-  à bien été telechargé";
                            
                        }
                        else
                        {
                            echo "</br>desolé il y a eu une erreur durant le telechargement du fichier merci de  prevenir l'administrateur du site
                            en cas de renouvellment du probleme ";
                        }
                    }

echo "</br><a href='index.php'>index du site </a>";
?>
