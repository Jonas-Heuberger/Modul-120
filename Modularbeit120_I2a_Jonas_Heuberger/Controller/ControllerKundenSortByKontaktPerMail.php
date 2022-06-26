<?php
include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewKunden.php');
include('Model/Query.php');
include('Model/dbconnection.php');

    $navbar = new ViewNavbar();
    echo $navbar->printNavbar();

    $limit = 20;
    $query = new Query();
    $result = $query->getKundenByKontaktPerMail($conn, $limit);

    $table = new ViewKunden();
    echo $table->printTable($result, $conn);


include('Partials/footer.php'); 

?>
