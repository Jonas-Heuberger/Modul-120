<?php
include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewKunden.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    echo $navbar->printNavbar();

    $query = new Query();
    $result = $query->getKundenByKundeSeit($conn);

    $table = new ViewKunden();
    echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
