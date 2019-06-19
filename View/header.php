<!DOCTYPE html>
<head lang="fr">
        <title> NAVI.go </title>
        <meta charset="utf-8"/> 
        <link href="Style/menu.css" rel="stylesheet" type="text/css"/>
        <link href="Style/accueil.css" rel="stylesheet" type="text/css"/>
        <link href="Style/login.css" rel="stylesheet" type="text/css"/>
        <link href="Style/twitter.css" rel="stylesheet" type="text/css"/>

        <link href="Style/ratp.css" rel="stylesheet" type="text/css"/>
        
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    
        <link rel="icon" href="img/favicon.png"/>
        <script src="javascript/burger.js"></script>
        
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpksNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

        // Charge l'API de visualisation et le package corechart. 
        google.charts.load('current', {'packages':['corechart']});

        // Définir un rappel à exécuter lors du chargement de l'API de visualisation Google. 
        google.charts.setOnLoadCallback(drawChart);

        // Rappel qui crée et remplit une table de données,
        // instancie le graphique à secteurs, passe les données et
        // les dessine
        function drawChart() {

            // Crée la table de données.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Question');
            data.addColumn('number', 'Nombre');
            data.addRows([
                ['Trajets effectués', <?php echo $nbTrajetsEffectues ?>],
                ['Passages par votre station préférée', <?php echo $nbTrajetsStation1 ?>],
                ['Passages par votre 2e station préférée', <?php echo $nbTrajetsStation2 ?>]
            ]);

            // Définir les options du graphique
            var options = {'title':'Statistiques personnelles'};

            // Instancie et dessine notre tableau, en passant quelques options.
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
        </script>
    
    
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
         <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
    
    
    
    
    
	   <meta name="viewport" content="width=device-width, initial-scale=1">
        

    </head>
    
    <body>
        <div id="partiemenu">
                <div id="conteneurmenu" class="conteneur">
                    <div id="structuremenu" class="row" > 
                        <div class="col-4"> 
                            <nav role="navigation">
                              <div id="menuToggle">
                                <input type="checkbox" />
                                <span></span>
                                <span></span>
                                <span></span>
                                <ul id="menu">
                                    <a href="./index.php?ctrl=default&action=defaultPage"><li>Accueil</li></a>
                                    <a href="#"><li>Recherche</li></a>
                                    <a href="./index.php?ctrl=twitter&action=afficheTwitter"><li>Twitter</li></a>
                                    <a href="./index.php?ctrl=trafic&action=display"><li>Info trafic</li></a>
                                    <a href="#"><li>Plan hors ligne</li></a>
                                    <a href="#"><li>Statistiques</li></a>
                                    <?php if($_SESSION['mail']){?><a href="./index.php?ctrl=membre&action=pageAccueilMembre"><li>Mon compte</li></a><?php }else{?><a href="./index.php?ctrl=membre&action=login"><li>Mon compte</li></a><?php } ?>
                                    <a href="./index.php?ctrl=membre&action=deconnexion"><li>Déconnexion</li></a>
                                </ul>
                              </div>
                            </nav>
                        </div> 

                        <div class="col-4"> 
                            <a href="./index.php?ctrl=default&action=defaultPage"><img src="img/LOGO-blanc.png" width="111" height="39"></a>
                        </div>

                        <div class="col-4"> 
                            <?php if($_SESSION['mail']){?><a href="./index.php?ctrl=membre&action=pageAccueilMembre"><img src="img/contact.svg" width="36" height="36"></a><?php }else{?><a href="./index.php?ctrl=membre&action=login"><img src="img/contact.svg" width="36" height="36"></a><?php } ?>
                            
                        </div>

                    </div>
                </div>
            </div> 
        
