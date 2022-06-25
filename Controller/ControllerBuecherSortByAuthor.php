<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    echo $navbar->printNavbar();

    $query = new Query();
    $result = $query->getBuecherByAutor($conn);

    $table = new ViewBuecher();
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
