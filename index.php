<?php

/*
Contrôleur frontal
*/

// chargement des dépendances
require_once "config.php";

// Routeur
if(!isset($_GET['pg'])){
    // chargement de l'accueil
    echo "homepage";
}else{
    // pas sur l'accueil
    switch($_GET['pg']){
        case "cv":  
            // import du cv
            echo "cv";
            break;
        case "tuto":
            echo "tuto lulu";
            break;
    }
}