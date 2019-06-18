<?php
    include_once "header.php" ;
?>     

    <form action="./index.php?ctrl=membre&action=sauvInforPerso" method="post">
        Nom : <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" placeholder="<?php echo $_SESSION['nom']; ?>"><br />
        Prénom : <input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>" placeholder="<?php echo $_SESSION['prenom']; ?>"><br />
        <!--Mail : <input type="mail" name="mail" value="<php echo $_SESSION['mail']; ?>" placeholder="<php echo $_SESSION['mail']; ?>"><br />
        Mot de passe : <input type="password" name="password"><br />-->
        Adresse : <input type="text" name="adresse" value="<?php echo $_SESSION['adresse']; ?>" placeholder="<?php echo $_SESSION['adresse']; ?>"><br />
        Ville : <input type="text" name="ville" value="<?php echo $_SESSION['ville']; ?>" placeholder="<?php echo $_SESSION['ville']; ?>"><br />
        Date de Naissance : <input type="text" name="dateNaissance" value="<?php echo ($_SESSION['dateNaissance']); ?>" placeholder="<?php echo ($_SESSION['dateNaissance']); ?>"><br />
        Téléphone : <input type="text" name="telephone" value="<?php echo $_SESSION['telephone'];?>" placeholder="<?php echo ($_SESSION['telephone']); ?>"><br />
        Ligne préférée : <input type="text" name="lignePreferee" value="<?php echo ($_SESSION['lignePreferee']); ?>" placeholder="<?php echo ($_SESSION['lignePreferee']); ?>"><br />
        Station préférée : <input type="text" name="stationPreferee" value="<?php echo($_SESSION['stationPreferee']); ?>" placeholder="<?php echo($_SESSION['stationPreferee']);?>"><br />
        Satisfait ? : <input type="text" name="satisfait" value="<?php echo ($_SESSION['satisfait']); ?>" placeholder="<?php echo ($_SESSION['satisfait']);?>"><br />
        Station préférée 2: <input type="text" name="stationPreferee2" value="<?php echo ($_SESSION['stationPreferee2']); ?>" placeholder="<?php echo ($_SESSION['stationPreferee2']); ?>"><br />
        <input type="submit" name="ajouter" value="ajouter">
    </form>
    <?php
    if (isset($erreur)) echo '<br />',$erreur;
    ?>

<?php
    include_once "header.php" ;
?>