<?php
// include der Dateien
include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecherDetails.php');
include('Model/Query.php');
include('Model/dbconnection.php');

// erstellen der Notwendigen Objekte
    $navbar = new ViewNavbar();
    $table = new ViewBuecherDetails();
    $query = new Query();
// ausgabe der Navbar
    $navbar->printNavbar();

    // erhalte id von der url
    $id = $_GET['id'];    
    // erhalte Datensatz aus Query
    $result = $query->getBuecherDetails($conn, $id);

// gebe Tabelle aus Datensatz und Query wird übergeben    
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
