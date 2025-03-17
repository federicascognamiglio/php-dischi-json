<?php

require_once "./data.php";

// Recupero valori dal form
$titolo = isset($_POST["titolo"]) && !empty($_POST["titolo"]) ? $_POST["titolo"] : "";
$artista = isset($_POST["artista"]) && !empty($_POST["artista"]) ? $_POST["artista"] : "";
$anno_pubblicazione = isset($_POST["anno_pubblicazione"]) && !empty($_POST["anno_pubblicazione"]) ? $_POST["anno_pubblicazione"] : "";
$genere = isset($_POST["genere"]) && !empty($_POST["genere"]) ? $_POST["genere"] : "";
$url_cover = isset($_POST["url_cover"]) && !empty($_POST["url_cover"]) ? $_POST["url_cover"] : "";

// Inserisco nuovo elemento nell'array di dischi
if ($titolo && $artista && $anno_pubblicazione && $genere && $url_cover) {
$dischi[] = [
    "titolo" => $titolo,
    "artista" => $artista,
    "anno_pubblicazione" => $anno_pubblicazione,
    "genere" => $genere,
    "url_cover" => $url_cover
];

// Converto l'array in JSON
$dischi_json = json_encode($dischi);

// Aggiorno il file JSON
file_put_contents("./dischi.json", $dischi_json);

// Redirect alla home
header("Location: ./index.php");
} else {
    header("Location: ./index.php");
}

?>