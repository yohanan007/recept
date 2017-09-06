<?php






include("page/navPerso.php");
?>
          <section class='container-fluid'> <table class='table'><thead><p> RAPPEL DES INFORMATIONS VOUS CONCERNANT: </p></thead><tbody>
          
             <tr><td> <b>ID: </b></td><td>  <?php echo $id; ?></td></tr>
            <tr class='success'><td><b> LOGIN : </b></td><td><?php echo $login; ?></td></tr>
            <tr><td> <b>NOM :</b></td><td> <?php echo $nom; ?></td></tr>
           <tr class='success'><td><b>PRENOM :</b></td><td><?php echo $prenom;?> </td></tr>
             <tr><td> <b>DATE DE NAISSANCE :</b> </td><td><?php echo $naissance; ?></td></tr>
            <tr class='success'><td> <b>EMAIL :</b></td><td><?php echo $mail;?></td></tr>
            <tr><td> <b>DATE D'INSCRIPTION :</b> </td><td><?php echo $dateInscription; ?></td></tr>
            </tbody></table>
            
            </br><b><a href='phpFunction/fin.php'>deconnexion</a></b>
        </section>
        </body>
      
