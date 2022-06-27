<?php
// ich include notwendige Dateien
include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');
include('View/ViewSearchbar.php');

// ich erstelle ein Navbar Objekt und gebe sie aus
    $navbar = new ViewNavbar();
    echo $navbar->printNavbar();

    // ich erstelle ein Searchbar Objekt und gebe sie aus
    $searchbar = new Searchbar();
    $search = $searchbar->searchbar();

    // ich erstelle mir ein Query objekt und rufe Funktion auf 
    $query = new Query();
    $result = $query->getBuecherBySearchAutor($conn, $search);

    // ich erstelle mir ein View objekt und übergebe  datensätze und connection
    $table = new ViewBuecher();
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
