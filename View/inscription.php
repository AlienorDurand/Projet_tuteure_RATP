<?php
    include_once "header.php" 
?>

Inscription à l'espace membre :<br />
<form action="inscription.php" method="post">
Nom : <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>"><br />
Prénom : <input type="text" name="prenom" value="<?php if (isset($_POST['prénom'])) echo htmlentities(trim($_POST['prénom'])); ?>"><br />
Mail : <input type="text" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>"><br />
Mot de passe : <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"><br />
Confirmation du mot de password : <input type="password" name="password_confirm" value="<?php if (isset($_POST['password_confirm'])) echo htmlentities(trim($_POST['password_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</form>
<?php
if (isset($erreur)) echo '<br />',$erreur;
?>

<?php
    include_once "footer.php" 
?>