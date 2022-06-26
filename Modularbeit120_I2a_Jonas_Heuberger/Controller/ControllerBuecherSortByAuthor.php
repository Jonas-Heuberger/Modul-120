<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    echo $navbar->printNavbar();

    $limit = 20;
    $query = new Query();
    $result = $query->getBuecherByAutor($conn, $limit);

    $table = new ViewBuecher();
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
