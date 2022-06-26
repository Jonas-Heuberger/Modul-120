<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    $table = new ViewBuecher();
    $query = new Query();

    $navbar->printNavbar();

    

    
    $limit = 20;
    $result = $query->getBuecherById($conn, $limit);

    
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
