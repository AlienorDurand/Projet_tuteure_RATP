<?php
    include_once "header.php" ;
        
        $tab=[ "./img/ligne/M1.svg" , "./img/ligne/M2.svg" , "./img/ligne/M3.svg" , "./img/ligne/M4.svg" , "./img/ligne/M5.svg" , "./img/ligne/M6.svg" , "./img/ligne/M7.svg" , "./img/ligne/M8.svg" , "./img/ligne/M9.svg" , "./img/ligne/M10.svg" , "./img/ligne/M11.svg" , "./img/ligne/M12.svg" , "./img/ligne/M13.svg" , "./img/ligne/M14.svg" ];

        $total = 14;

?>


<div id="partietwitter" > 

<?php
        
        for($i=0;$i<=$total;$i++){
            echo "<a href='./index.php?ctrl=twitter&action=afficheTwitter2.php?num=$i'> <img src='$tab[$i]'/></a><br/> ";
  
        }
?>        


    
</div>
    
    
    
 <?php   
    include_once "footer.php" ;
?>