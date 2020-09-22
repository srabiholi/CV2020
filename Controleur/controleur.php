<?php
require_once 'Modele/modele.php';

function detail() {
    $experiences = getExperiences();
    $formations = getFormations();
    require_once 'Vue/template.php';
}

