<?php
    include_once "header.php" ;
?>     

    <form id="modifinfocompte" action="./index.php?ctrl=membre&action=sauvInforPerso" method="post" >
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" width="200px" > Nom </span> <span class="col-8" >    <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" placeholder="<?php echo $_SESSION['nom']; ?>"> </span> </div> </div> <br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Prénom </span> <span class="col-8" > <input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>" placeholder="<?php echo $_SESSION['prenom']; ?>"> </span> </div> </div><br />
        
        <!--Mail : <input type="mail" name="mail" value="<php echo $_SESSION['mail']; ?>" placeholder="<php echo $_SESSION['mail']; ?>"><br />
        Mot de passe : <input type="password" name="password"><br />-->
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Adresse </span> <span class="col-8" > <input type="text" name="adresse" value="<?php echo $_SESSION['adresse']; ?>" placeholder="<?php echo $_SESSION['adresse']; ?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Ville </span> <span class="col-8" > <input type="text" name="ville" value="<?php echo $_SESSION['ville']; ?>" placeholder="<?php echo $_SESSION['ville']; ?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Date de Naissance </span> <span class="col-8" > <input type="text" name="dateNaissance" value="<?php echo ($_SESSION['dateNaissance']); ?>" placeholder="<?php echo ($_SESSION['dateNaissance']); ?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Téléphone </span> <span class="col-8" > <input type="text" name="telephone" value="<?php echo $_SESSION['telephone'];?>" placeholder="<?php echo ($_SESSION['telephone']); ?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Ligne préférée </span> <span class="col-8" > <input type="text" name="lignePreferee" value="<?php echo ($_SESSION['lignePreferee']); ?>" placeholder="<?php echo ($_SESSION['lignePreferee']); ?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" >Station préférée </span> <span class="col-8" > <input type="text" name="stationPreferee" value="<?php echo($_SESSION['stationPreferee']); ?>" placeholder="<?php echo($_SESSION['stationPreferee']);?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Satisfait ? </span> <span class="col-8" > <input type="text" name="satisfait" value="<?php echo ($_SESSION['satisfait']); ?>" placeholder="<?php echo ($_SESSION['satisfait']);?>"> </span> </div> </div><br />
        
        <div class="row"> <div class="formmodifinfo"> <span class="col-4" > Station préférée 2 </span> <span class="col-8" > <input type="text" name="stationPreferee2" value="<?php echo ($_SESSION['stationPreferee2']); ?>" placeholder="<?php echo ($_SESSION['stationPreferee2']); ?>"> </span> </div> </div><br />
        
        <input id="bouttonmodif" type="submit" name="ajouter" value="Ajouter">
        
    </form>
    <?php
    if (isset($erreur)) echo '<br />',$erreur;
    include_once "header.php" ;
?>