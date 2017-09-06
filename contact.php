<?php
session_start();
include("page/header.php");
include("page/nav.php");
?>
<section>
    <div class="container">
        <form action="actionContact.php" method="post">
            <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" name="nom" class="form-control" placeholder="entrez votre nom" required/>
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" class="form-control" placeholder="entrez votre prénom" required/>
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" placeholder="entrez votre é-mail" required/>
            <label for="question">votre demande</label>
            <textarea name="question" class="form-control" rows="6" placeholder="décrivez nous votre besoin" required></textarea>
            </br><input type="submit" value="valider" class="btn btn-control"/>
            </div>
        </form>
    </div>
</section>
<?php
include("page/footer.php");
?>