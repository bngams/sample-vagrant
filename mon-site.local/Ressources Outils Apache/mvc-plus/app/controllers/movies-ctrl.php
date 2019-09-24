<?php
// /!\ Il est possible d'organiser le controller sous forme d'objet 

// inclure votre modele movies, qui peut aussi être une classe
require CHEMIN_MODEL.'movies.php';

// /!\ Il est possible et même recommandé d'utiliser un "switch" pour gérer plusieurs actions

// Si une action est specifiée, on regarde si elle existe
if (!empty($_GET['action'])) {
	$action = $_GET['action'];
	// Si l'action existe, on l'exécute
	if ($action == 'detail') {
		showDetail();
	// Sinon, on affiche la page d'accueil !
	} else {
		showAll();
	}
// Acion non specifiée ou invalide ?
} else {
	showAll();
}

function showDetail() {
    // possible de récupérer l'id du film en paramètre également
    $movie = getMovie(2);
    require CHEMIN_VUE.'movie-details-view.php';
}

function showAll() {
    $movies = getMovies();
    require CHEMIN_VUE.'movies-view.php';
}
