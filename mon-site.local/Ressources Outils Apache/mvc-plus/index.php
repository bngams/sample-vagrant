<?php
 /*
    Exemples d'URLs
    myapp/mvc-plus/?display=movies&action=detail
    myapp/mvc-plus/?display=users
  */

// Initialisation
require 'app/global/init.php';

// Début de la tamporisation de sortie
ob_start();

// Si un controller est demandé, on regarde s'il existe
if (!empty($_GET['display'])) {
    // construire le chemin vers le fichier php
	$display = CHEMIN_CTRL.$_GET['display'].'-ctrl.php';

	// Si le fichier existe, on l'utilise
	if (is_file($display)) {
		include $display;
	// Sinon, on affiche la page d'accueil !
	} else {
		include CHEMIN_CTRL.'/movies-ctrl.php';
	}

// controller non specifié ou invalide ? On affiche la page d'accueil
} else {
	include CHEMIN_CTRL.'/movies-ctrl.php';
}

// Fin de la tamporisation de sortie
$contenu = ob_get_clean();

// Début du code HTML
include CHEMIN_INCLUDE.'top.php';

// Contenu de la page demandée
echo $contenu;

// Fin du code HTML
include CHEMIN_INCLUDE.'bottom.php';
