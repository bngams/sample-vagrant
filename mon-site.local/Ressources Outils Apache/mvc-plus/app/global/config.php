<?php

// Identifiants pour la base de données. Nécessaires a PDO2.
define('SQL_DSN', 'mysql:host=localhost;dbname=movies_db;charset=utf8');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

// Chemins à utiliser pour accéder aux vues/modeles/controleurs
$display = empty($display) ? !empty($_GET['display']) ? $_GET['display'] : 'index' : $display;
define('CHEMIN_VUE',   'app/views/');
define('CHEMIN_MODEL', 'app/models/');
define('CHEMIN_CTRL',    'app/controllers/');
define('CHEMIN_LIB',    'app/libs/');
define('CHEMIN_INCLUDE',    'app/includes/');
