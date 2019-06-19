<?php
    include_once "header.php" ;
?> 
        <h2>Rapport du trafic</h2>
        <ul id="incident"></ul>

<script>
    // Url to retrieve lines available on the coverage
    var trafic = 'https://api.navitia.io/v1/coverage/fr-idf/disruptions?count=10';

    // Call Navitia API
    $.ajax({
      type: 'GET',
      url: trafic,
      dataType: 'json',
      headers: {
        Authorization: 'Basic ' + btoa('fe15dc43-d76a-4788-897f-100247da13df')
      },
      success: displayIncident,
      error: function(xhr, textStatus, errorThrown) {
        alert('Error: ' + textStatus + ' ' + errorThrown);
      }
    });

    
    
    function displayIncident(navitiaResult) {
        var $ul = $('ul#incident');
        
        $.each(navitiaResult.disruptions, function(i, dis) {
            var $li = $('<li>');
        
            $li.html('Type : '+ dis.cause + ' - Début : ' + dis.application_periods[0].begin + ' - Fin : '+ dis.application_periods[0].end + ' - Message : ' + dis.messages[0].text + ', ' + dis.messages[1].text + '<br /><br />');
            
            $ul.append($li);
        });
    }
    
    
    
</script>


<?php
    include_once "footer.php" ;
?>