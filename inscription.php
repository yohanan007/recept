
<?php
include("page/header.php");
include("page/nav.php");
?>

<section>
    <div class="container well">
        <h3 style="text-align:center">FORMULAIRE D'INSCRIPTION </h3>
     <form  class="form-horizontal" action="id/inscription.php" method="post">
                        <div class="form-group"> 
                        <label class="control-label col-sm-2" for="nom">NOM:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" id="nom" placeholder="entrée votre nom" class="form-control input-lg"></input>
                        </div>
                        </div>
                        
                        <div class="form-group"> 
                        <label class="control-label col-sm-2" for="prenom">PRENOM:</label>
                        <div class="col-sm-10">
                            <input type="text" name="prenom" id="prenom" placeholder="entrée votre prenom" class="form-control input-lg"></input>
                        </div>
                        </div>
         
                        <div class="form-group"> 
                        <label class="control-label col-sm-2" for="login">LOGIN:</label>
                        <div class="col-sm-10">
                            <input type="text" name="login" id="login" placeholder="entrée votre login" class="form-control input-lg"></input>
                        </div>
                        </div>
                        
                        <div class="form-group"> 
                        <label class="control-label col-sm-2" for="email">EMAIL:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" placeholder="email" class="form-control input-lg"></input>
                        </div>
                        </div>
                        
                         <div class="form-group"> 
                        <label class="control-label col-sm-2" for="naissance">DATE DE NAISSANCE:</label>
                        <div class="col-sm-10">
                            <input type="date" name="naissance" id="naissance"class="form-control input-lg" ></input>
                        </div>
                        </div>
                        
                        <div class="form-group"> 
                        <label class="control-label col-sm-2" for="mdp">MOT DE PASSE</label>
                        <div class="col-sm-10">
                            <input type="password" name="mdp" id="mdp" placeholder="mot de passe" class="form-control input-lg"></input>
                        </div>
                        </div>
                        
                          <div class="form-group"> 
                        <label class="control-label col-sm-2" for="mdpVerif">CONFIRMER VOTRE MOT DE PASSE:</label>
                        <div class="col-sm-10">
                            <input type="password" name="mdpVerif" id="mdpVerif" placeholder="mot de passe"class="form-control input-lg" ></input>
                        </div>
                        </div>
                        
                         <div class="form-group"> 
                        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-default">Valider</button>
                        </div>
                        </div>
                        
                    </form>
                    </div>
</section>

<?php
include("page/footer.php");
?>