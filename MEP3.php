<?php

function afficherDurée($secondes) {
    $heures = 0;
    $minutes = 0;
    $result = "";

    if ($secondes >= 3600) {
        $heures = intval($secondes / 3600);
        $secondes = $secondes % 3600;
        $result .= $heures . " heure ";
    }

    if ($secondes >= 60) {
        $minutes = intval($secondes / 60);
        $secondes = $secondes % 60;
        $result .= $minutes . " min ";

    }

    if ($result == "" || $secondes !=0 ) {
        $result .= $secondes . " sec ";

    }

    echo $result;
}

     afficherDurée(3608);

?>