<?php 
session_start();
require("functionBDD.php");
$recherche = $_SESSION["recherche"];
$result = login();
 while ($row = $result ->fetch_assoc())
    {
        echo "<div class='clique' style=' display:inline-block; z-index:999;'><b>id: </b>".$row["id"]. " nom ".$row["login"]."</div>";
    }

?>
