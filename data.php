<?php

$dischi_text = file_get_contents("./dischi.json");
$dischi = json_decode($dischi_text, true);

$generi = [ "Rock", "Rock Progressivo", "Pop", "Hip Hop", "Jazz", "Blues", "Metal", "Classica", "Reggae", "Funk", "Grunge", "Soul", "R&B", "Punk", "Electronic", "House", "Techno", "Indie", "Alternative",];

?>