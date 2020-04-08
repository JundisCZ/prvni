<div id="vypis">

</div>
<script>
    window.addEventListener("load", volaniSluzby);
    const HOST = window.location.protocol + "//" + window.location.hostname + ((window.location.port) ? ":" +
        window.location.port : "") + window.location.pathname;
    function volaniSluzby() {
        let url = HOST + "datum.php";
        fetch("https://nodejs-3260.rostiapp.cz/date/").then(function(response) {
            response.text().then(function(text) {
                let obj = JSON.parse(text);
                let datum = obj.date.split(".");
                const mesice = ["leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"];
                document.querySelector("#vypis").innerHTML = "Dnes je " + obj.dowcz + " " + Number(datum[0]) + "." + mesice[Number(datum[1]) - 1] + " " +
                    datum[2] + " a svátek má " + obj.svatek;
            })
        })
    }
</script>

<?php

