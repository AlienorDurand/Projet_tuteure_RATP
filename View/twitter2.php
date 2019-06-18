<?php
include_once "header.php" 

$num = $_GET['num'];
$url = array(
    "<a class='twitter-timeline' href='https://twitter.com/Ligne1_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne1_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne2_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne2_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne3_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne3_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne4_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne4_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne5_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne5_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne6_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne6_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne7_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne7_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne8_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne8_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne9_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne9_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne10_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne10_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne11_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne11_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne12_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne12_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne13_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne13_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    ,
    "<a class='twitter-timeline' href='https://twitter.com/Ligne14_RATP?ref_src=twsrc%5Etfw'>Tweets by Ligne14_RATP</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>"
    
    include_once "header.php" 
);



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Test Twitter recupération</title>
        <?php
        echo $url[$num-1];
        ?>
    </head>    
	<body>
    </body>
</html>
 