<?php
require_once 'Modele/modele.php';

function detail() {
    $experiences = getExperiences();
    $formations = getFormations();
    require_once 'Vue/template.php';
}

// function tache($tache){
//     var_dump( $tache );
// echo json_encode( $tache );
//     require_once 'Vue/exp.php';
// }