<?php

// Return all Movies
function getMovies() {
    // utilisation de la methode statique getInstance() de la classe MyPDO
    $movies = MyPDO::getInstance()->query('select * from movies order by ranking asc limit 10');

    return $movies;
}

// Return movie by ID
function getMovie($id) {
    // utilisation de la methode statique getInstance() de la classe MyPDO
    $stmt = MyPDO::getInstance()->prepare("SELECT * FROM movies where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch();
    return $row;
}
