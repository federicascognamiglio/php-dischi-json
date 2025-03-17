<?php

require_once "./data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                MY-MUSIC
            </a>
        </div>
    </nav>

    <!-- Main -->
    <main class="container pb-5">
        <!-- Title -->
        <h1 class="text-center mt-5">I TUOI DISCHI</h1>

        <!-- Disk Cards -->
        <div class="row">
            <?php 
                foreach ($dischi as $disco) {
            ?>
            <div class='col-sm-12 col-md-4 col-lg-3'>
                <div class='card mt-4'>
                    <img src="<?php echo $disco["url_cover"] ?>" class="card-img-top" alt="<?php $disco["titolo"] ?>">
                    <div class='card-body'>
                        <span class="badge text-bg-secondary mb-3"><?php echo $disco["genere"] ?></span>
                        <h5 class="card-title"><?php echo $disco["titolo"] ?></h5>
                        <p class="card-text"><?php echo $disco["artista"] ?></p>
                        <p class="card-text"><small
                                class='text-muted'><?php echo $disco["anno_pubblicazione"] ?></small></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!-- /Disk Cards -->

        <!-- Form -->
        <form action="server.php" method="POST">
            <h2 class="text-center mt-5 mb-4">Aggiungi un nuovo disco:</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="titolo" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Abbey Road" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="artista" class="form-label">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista" placeholder="The Beatles" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="url_cover" class="form-label">URL Poster</label>
                    <input type="text" class="form-control" id="url_cover" name="url_cover"
                        placeholder="https://upload.wikimedia.org/wikipedia/en/4/42/Beatles_-_Abbey_Road.jpg" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="anno_pubblicazione" class="form-label">Anno di pubblicazione</label>
                    <input type="text" class="form-control" id="anno_pubblicazione" name="anno_pubblicazione"
                        placeholder="1969" required>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label for="genere" class="form-label">Genere</label>
                    <select class="form-select" id="genere" name="genere" aria-label="Default select example" required>
                        <option selected>Seleziona un genere</option>
                        <?php foreach($generi as $genere) {
                            echo "<option value='$genere'>$genere</option>";
                        } ?>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 mb-3 align-self-end">
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>
            </div>
        </form>
        <!-- /Form -->
    </main>

</body>

</html>