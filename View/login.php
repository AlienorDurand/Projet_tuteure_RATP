<?php
    include_once "header.php" 
?>

    
        Connexion au compte utilisateur :<br />
        <form action="index.php" method="post">
            Mail : <input type="text" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>"><br />
Mot de passe : <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['mail'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="./index.php?ctrl=membre&action=inscription">Vous inscrire</a>
<?php
if(isset($erreur)) echo '<br /><br />',$erreur;
?>




<?php
    include_once "footer.php" 
?>