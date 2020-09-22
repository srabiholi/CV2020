<?php
require 'Controleur/controleur.php';

$scriptName = '/'.basename($_SERVER['SCRIPT_NAME']);
$base = str_replace($scriptName, '', $_SERVER['SCRIPT_NAME']);
$url = str_replace([$scriptName, $base], '', $_SERVER['REQUEST_URI']);
// var_dump($url);
$url= strtok($url, '?');

if ('/' === $url){
    detail();
}

