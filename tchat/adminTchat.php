<?php
session_start();
include("../page/header.php");
require("../phpFunction/connect.php");
 if (($_SESSION["loginVrai"]==="adminYohanan"))
 {
     $sql ="SELECT * FROM discussion";
     $result = $conn -> query($sql);
      if ($result -> num_rows > 0)
      {
       ?>
       <div class="container">
        <h2>Table de choix de discussion</h2>
        <table class="table">
         <thead>
          <th>ID</th>
          <th>nom de table</th>
          <th>action</th>
         </thead>
        
       <?php
       $i=0;
       while($row = $result -> fetch_assoc())
        {if ($i%2 === 0)
        {
            echo "<tr><td>id:".$row['id']."</td><td>".$row['tableNom']."</td><td><button id=".$row['tableNom'].">envoyer</button></td></tr>";
        }
        else {
          echo "<tr class='success'><td>id:".$row['id']."</td><td>".$row['tableNom']."</td><td><button id=".$row['tableNom'].">envoyer</button></td></tr>";
        }
            $i++;
        }
        ?>
        </table>
       </div>
        <?php
      }
 }
 else 
 {
  echo"</br>vous n'avez pas accés à cette page";
  echo"</br><a href='../index.php'>index du site</a>";
 }

?>

<script src="../js/adminTchat.js"></script>