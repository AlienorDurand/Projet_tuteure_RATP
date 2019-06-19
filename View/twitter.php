<?php
    include_once "header.php" ;
?>


<div id="partietwitter" > 

<?php
        
        for($i=0;$i<$total;$i++){
            echo "<a href='./index.php?ctrl=twitter&action=afficheTwitter2&num=$i'><img src='$tab[$i]'/></a>";
        }
?>        


    
</div>
    
    
    
 <?php   
    include_once "footer.php" ;
?>