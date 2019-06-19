<head>
        <title> NAVI.go </title>
        <meta charset="utf-8"/> 
        <link href="Style/ratp.css" rel="stylesheet" type="text/css"/>
        <link href="Style/menu.css" rel="stylesheet" type="text/css"/>
        <link href="Style/accueil.css" rel="stylesheet" type="text/css"/>
        <link href="Style/login.css" rel="stylesheet" type="text/css"/>

        
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    
        <link rel="icon" href="img/favicon.png"/>
        <script src="javascript/burger.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpksNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
	   <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Liens pour la Map -->
        <link rel="stylesheet"
        href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin="">
        </script>
        <!-- Liens pour l'autocomplétion -->
        <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/places.js@1.16.4/dist/cdn/placesAutocompleteDataset.min.js"></script>


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
                                    <a href="#"><li>Twitter</li></a>
                                    <a href="#"><li>Info trafic</li></a>
                                    <a href="#"><li>Plan hors ligne</li></a>
                                    <a href="#"><li>Statistiques</li></a>
                                    <a href="./index.php?ctrl=membre&action=login"><li>Mon compte</li></a>
                                </ul>
                              </div>
                            </nav>
                        </div> 

                        <div class="col-4"> 
                            <a href="./index.php?ctrl=default&action=defaultPage"><img src="img/LOGO-blanc.png" width="111" height="39"></a>
                        </div>

                        <div class="col-4"> 
                            <a href="./index.php?ctrl=membre&action=login" ><img src="img/contact.svg" width="36" height="36"></a>
                        </div>

                    </div>
                </div>
            </div> 