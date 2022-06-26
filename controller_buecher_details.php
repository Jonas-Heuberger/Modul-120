<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecherDetails.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    $table = new ViewBuecherDetails();
    $query = new Query();

    $navbar->printNavbar();

    $id = $_GET['id'];    
    $limit = 20;
    $result = $query->getBuecherDetails($conn, $id, $limit);

    
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
