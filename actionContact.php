<?php
$nom  = $_POST["nom"];
$prenom = $_POST["prenom"];
$email  = $_POST["email"];
$question = $_POST["question"];
mail($eamil,"formulaire de contact",$question);
/*$p = PDF_new();
if (PDF_begin_document($p,"","")==0)
{
    die("ERREUR".PDF_get_errmsg($p));
}

PDF_set_info($p,"Creator","info.php");
PDF_set_info($p,"Author",$nom + " " + $prenom);
PDF_set_info($p,"Title","Information contact");

$font = PDF_load_font($p,"Helvetica-Bold","winansi","");
PDF_set_font($p,$font,24.0);
PDF_set_text_pos($p,50,700);
PDF_show($p,$email);
$lectureTampon = PDF_get_buffer($p);
$len = strlen($lectureTampon);
header("Content-type:application/pdf");
header("Content-length:$len");
header("Content-Disposition:inline; filename=info.pdf");
print $lectureTampon; 

probleme configuration php cloud 9 */
//header("Location:index.php");
echo $nom;
echo "</br>". $prenom;
echo "</br>". $question;

echo 
"</br><a href='index.php'>index</a>";

?>