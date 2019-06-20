<?php
    include_once "header.php" ;
?> 
<div id="partietrafic"> 
        <h2> Info Trafic </h2>
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
        
            $li.html(' <div class="infotrafic"> <h6 class="typeinfo"> Type : '+ dis.cause + ' <h6/> <h6 class="temps"> Début : ' + dis.application_periods[0].begin + '  Fin : '+ dis.application_periods[0].end + ' <h6/>  <h6 class="message"> ' + dis.messages[0].text + ' ' + dis.messages[1].text + '<h6/> </div>');
            
            $ul.append($li);
        });
    }
    
    
    
</script>

</div>
<?php
    include_once "footer.php" ;
?>