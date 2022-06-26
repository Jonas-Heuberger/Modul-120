<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');



    $navbar = new ViewNavbar();
    $table = new ViewBuecherDetails();
    $query = new Query();

    $navbar->printNavbar();

    

    $id = $_GET['id'];    
    $limit = 20;
    $result = $query->getBuecherDetails($conn, $limit, $id);

    
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
