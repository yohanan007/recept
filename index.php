<?php
session_start();
  require("phpFunction/connect.php");
require("phpFunction/functionBDD.php");

include("page/header.php");
include("page/nav.php");
?>
        <section>
           
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
               <div class="well">
                   <h3>DIPLOME</h3>
                   <ul>
                       <li>
                           2016: specialsation dans le language web
                       </li>
                       <li>
                           2014: CAPES MATHEMATIQUE
                       </li>
                       <li>
                           autre dîplome : BAFA, Deug MIAS,Licence mathématiques, Master 1 finance, Master 2 entrepreneuriat
                       </li>
                   </ul>
               </div>
               <div class="well">
                   <h3>EXPERIENCE PROFESSIONNEL</h3>
                   <ul>
                       <li>
                           Depuis 2016: en création d'entreprise dans la création de site web et application mobile.
                       </li>
                       <li>
                           2015: Enseignant à l'éducation nationale.
                       </li>
                       <li>
                             2001-2014 différentes expériences dans l'animation.
                       </li>
                   </ul>
               </div>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <?php
                    if ($_SESSION["mdpVrai"]=="cestlemdp" && !empty($_SESSION["loginVrai"]))
                    {
                        echo "<b>bonjour ".$_SESSION["loginVrai"]."</b>";
                        echo "</br><a href='pageperso.php'>Page personnel</a>";
                        echo"</br><a href='phpFunction/fin.php'>deconnexion</a>";
                    }
                    else {
                        
                        
                        echo"
                          <h4>Connection</h4>
                    <form  class='form-horizontal' action='id/action.php' method='post'>
                        <div class='form-group'> 
                        <label class='control-label col-sm-2' for='login'>nom:</label>
                        <div class='col-sm-10'>
                            <input type='text' name='login' id='login' placeholder='entrée votre login'></input>
                        </div>
                        </div>
                        
                        <div class='form-group'> 
                        <label class='control-label col-sm-2' for='mdp'>mdp:</label>
                        <div class='col-sm-10'>
                            <input type='password' name='mdp' id='mdp' placeholder='mot de passe'></input>
                        </div>
                        </div>
                        
                         <div class='form-group'> 
                        
                        <div class='col-sm-offset-2 col-sm-10'>
                            <button type='submit' name='submit' class='btn btn-default'>valider</button>
                        </div>
                        </div>
                        
                    </form>
                        ";
                    }
                    
                    
                    ?>
                   
                </div>
                <div class="well">
                    <h4>Jeunes programmeur...</h4>
                    <p>Personne avec un parcours unversitaire 
                    eclectique (diplômé bac+5) je me reforme aux languages du web
                    et me specialise dans jquery-angular-php</p>
                </div>
                 <div class="well">
                     <h4>Choississez votre image et telechargé 
                     la dans la bibliothéque d'image.
                     <span class="glyphicon glyphicon-upload"></span></h4>
            <form action="action.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image"></imput>
                <input type="submit" name="submit" value="gestion_image"></input>
            </form>
            </div>
            </div>
            </div>
            </div>
            
            
            <?php
            include("tchat/tchatPage.php")
            ?>

            
            
        
      <?php
      include("page/footer.php");
      ?>