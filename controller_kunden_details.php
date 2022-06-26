<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewKundenDetails.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    $table = new ViewKundenDetails();
    $query = new Query();

    $navbar->printNavbar();
    
    $kid = $_GET['kid'];    
    $limit = 20;
    $result = $query->getKundenDetails($conn, $kid, $limit);

    
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
