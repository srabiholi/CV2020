<?php

function bdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    return $bdd;
}

function getExperiences() {
    $bdd = bdd();
    $experiences = $bdd->query('SELECT * FROM t_experience');
    return $experiences;
}

function getFormations() {
    $bdd = bdd();
    $formations = $bdd->query('SELECT * FROM t_formation');
    return $formations;
}

