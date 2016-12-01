<?php
session_start();

ini_set('display_errors',1);

try

{

/*********** POUR LOCALHOST ***********/

$DB = new PDO('mysql:host=localhost;dbname=tais_bdd', 'root', '');

$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$DB->exec('SET NAMES utf8, lc_time_names = "fr_FR"');

}

catch(Exception $e)

{

// En cas d'erreur, on affiche un message et on arrÃªte tout

die('Erreur : '.$e->getMessage());

}

?>