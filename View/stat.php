<?php
    include_once "header.php" ;
?>
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
          ['Trajets effectués', <?php echo $nbTrajetsEffectues['COUNT(*)'];?>],
          ['Passages par votre station préférée', <?php echo $nbTrajetsStation1['COUNT(*)'];?>],
          ['Passages par votre 2e station préférée', <?php echo $nbTrajetsStation2['COUNT(*)'];?>]
        ]);

        // Définir les options du graphique
        var options = {'title':'Statistiques personnelles'};

        // Instancie et dessine notre tableau, en passant quelques options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <!--Un div qui contiendra le graphique à secteurs-->
    <div id="chart_div"></div>

<?php
    include_once "footer.php" ;
?>