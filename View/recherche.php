<?php
    include_once "header.php" ;
?>
    <div class="row">
        <div id="partierecherche" class="col-md-12">  
            <input class="recherche" type="search" name="depart" placeholder="Départ" id="input_depart" value="<?php echo($depart) ?>" disabled="disabled"><br />
            <input class="recherche" type="search" name="arrivee" placeholder="Arrivée" id="input_arrivee" value="<?php echo($arrivee) ?>" disabled="disabled"><br />



        </div>
    </div>

<?php 
    include_once "footer.php";
?>
<script>
    const trajets = JSON.parse(localStorage.getItem('trajets'));
    console.log(trajets);

    var duree = "";
    var modeTransport = "";
    var color="";
        $.each(trajets, function(i, trajet) {
            duree = Math.round(trajet.duration / 60) + " minutes";
            document.getElementById("partierecherche").insertAdjacentHTML(
                "beforeend",
                "<div id='" + trajet.type + "' class='divTrajet'><div class='duree'>" + duree + "</div></div>"
            );
            document.getElementById(trajet.type).insertAdjacentHTML(
                "beforeend",
                "<img class='fleche' id='fleche_"+trajet.type+"' src='./img/triangledown.png' alt='flèche'/>"
            );
            str="<div class='align-middle icone'>";
            $.each(trajet.sections, function(i2, section) {
                modeTransport = "";
                if (section.mode === "walking") {
                    modeTransport += "<img class='personne' src='./img/man_walking.png' alt='personne qui marche'/>";
                }
                if (section.type === "public_transport") {
                    modeTransport += section.display_informations.code;
                    color = section.display_informations.color;
                }
                
                if(color!==""){
                    str+="<div class='divMoyenTransport divBulleLigne' style='background-color:#"+color+"'>" + modeTransport + "</div>"
                    color="";
                } else {
                    str+="<div class='divMoyenTransport'>" + modeTransport + "</div>";
                }
            });
            str+="</div>";
            document.getElementById(trajet.type).insertAdjacentHTML(
                         "afterbegin", 
                         str
                );
            str="";
        });
</script>