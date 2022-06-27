<?php
// Hole mir die notwendigen Dateien
include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');


    // erstelle mir eine neue View Objekte sowie ein Query objekt
    $navbar = new ViewNavbar();
    $table = new ViewBuecher();
    $query = new Query();

    // hier gebe ich die Navbar aus
    $navbar->printNavbar();

    // Query um Bücher zu holen
    $result = $query->getBuecherById($conn);

    // Tabelle mit den Daten und de Connection aufrufen
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
