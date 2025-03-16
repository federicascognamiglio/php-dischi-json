<?php

$dischi_text = file_get_contents("./dischi.json");
$dischi = json_decode($dischi_text, true);

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
    <main class="container">
        <!-- Title -->
        <h1 class="text-center mt-5">I TUOI DISCHI</h1>

        <!-- Disk Cards -->
        <div class="row">
            <?php 
                foreach ($dischi as $disco) {
            ?>
            <div class='col-sm-12 col-md-4 col-lg-3'>
                <div class='card mt-4'>
                    <img src="<?php echo $disco["url_cover"] ?>" class="card-img-top"
                        alt="<?php echo $disco["titolo"] ?>">
                    <div class='card-body'>
                        <span class="badge text-bg-secondary mb-3"><?php echo $disco["genere"] ?></span>
                        <h5 class="card-title"><?php echo $disco["titolo"] ?></h5>
                        <p class="card-text"><?php echo $disco["artista"] ?></p>
                        <p class="card-text"><small class='text-muted'><?php echo $disco["anno_pubblicazione"] ?></small></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!-- /Disk Cards -->
    </main>

</body>

</html>