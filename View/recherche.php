<?php
    include_once "header.php" ;
?>
    <div class="row">
        <div id="partierecherche" class="col-md-12">  
            <input class="recherche" type="search" name="depart" placeholder="Départ" id="input_depart" value="<?php echo $depart ?>" disabled="disabled"><br />
            <input class="recherche" type="search" name="arrivee" placeholder="Arrivée" id="input_arrivee" value="<?php echo $arrivee ?>" disabled="disabled"><br />



        </div>
    </div>

<?php 
    include_once "footer.php"
?>

<script>

    const trajets = JSON.parse(localStorage.getItem('trajets'));
    console.log(trajets);

    $.each(trajets, function(i, trajet)){
        var divTrajet = document.createElement("div");
        var icone
        divTrajet.id = "trajet_"+i;
        $.each(trajet, function(i, section)){
            if(section.mode==="walking"){
                divTrajet
            }
        }
    }


    // Affiche les resultats  : a Modifier

    // function draw(results) {
    //     $.each(results.journeys, function(i, journey) {
    //     var str =
    //         "Depart : " +
    //         journey.departure_date_time.substring(9, 13) +
    //         "  /  Arrivée : " +
    //         journey.arrival_date_time.substring(9, 13) +
    //         "  /  Durée : " +
    //         Math.round(journey.duration / 60) +
    //         " minutes";
    //     document.getElementById("button").insertAdjacentHTML(
    //         "afterend",
    //         "<div id='" + journey.type + "' style='border: solid 1px black; margin: 10px'}>" + str + "</div>"
    //         );
    //     str = "";
    //     $.each(journey.sections, function(i2, section) {
    //         str = "";
    //         if (section.mode === "walking") {
    //             str += "Marche";
    //         }
    //         if (section.type === "public_transport") {
    //             str += section.display_informations.network + " : " + section.display_informations.code;
    //         }
    //         document.getElementById(journey.type).insertAdjacentHTML("beforeend", "<div>" + str + "</div>");
    //     });
    //     });
    //     document.getElementById("autocomplete-dataset").value = "";
    //     document.getElementById("autocomplete-dataset2").value = "";
    // }
</script>