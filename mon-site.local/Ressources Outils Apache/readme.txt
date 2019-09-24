/*
 * Installation du projet
 */
Si vous souhaitez parcourir et afficher le projet depuis votre navigateur :
 * Placer le dossier myapp dans le répertoire web de WAMP/XAMPP/MAMP
 * Créer de la bdd à partir du script SQL fournit
 * Changer les chaines de connexion à la BDD dans le programme
    - /mini/index.php ligne 24 $bdd =...
    - /mini-plus/includes/pdo.php
    - /mvc/libs/pdo.php
    - /mvc-plus/libs/pdo.php

/*
 * Description du projet
 */
 Le dossier ci-joint "myapp" présente différentes structures.
 Nous pouvons observer la progression d'une architecture non élaborée, vers des structures d'applications plus pratiques et plus maintenables, qui se rapprochent un peu du concept des frameworks, avec une séparation dite MVC :
 * M = Modèles, vos fichiers entités ou classes qui correspondent à vos objets présents en BDD, et traitements vers la BDD (requêtes, récupération de données, etc.).
 * V = Vues, une vue permet de gérer l'affichage des éléments nécessaires. De façon simplifiée une vue peut correspondre à une page de votre application. De préférence, la vue contient uniquement le code qui concerne l'affichage (pas de requete dans la vue etc.).
 * C = Contrôleur, le rôle du contrôleur est faire le lien entre vos vues et vos modèles. En quelques sortes : le client appelle le contrôleur qui charge les données depuis le modèle et affiche la vue.

 Dans notre exemple "myapp", de la structure la plus simple à la plus complexe nous retrouvons les approches dites :
 * mini (non recommandée)
    - approche minimale, sans aucune factorisation au niveau du code (réutilisation de portions de codes), etc.
    un dossier /assets pour séparer les ressources (images, css, js, etc.) de votre projet
 * mini-plus
    - une approche minimale améliorée : les codes communs entre les pages sont utilisés via des include ou require
    chaque fichier php est organisé avec d'un côté les traitements, et de l'autre le code html
 * mvc
    - une approche mvc minimaliste : les vues et modèles sont séparés de façon distinctes. Aucun code dit métier (requête, traitement, etc.) n'est présent dans les vues, qui ne font que de l'affichage.
 * mvc-plus
    - une approche mvc un peu plus poussée. Un ficher unique (index.php) constitue le point d'entrée de l'application. Grâce à un fichier d'initialisation et de configuration, toutes les requêtes (urls) seront "redirigées" vers le bon contrôleur, qui se chargera du modèle et de l'affichage.
