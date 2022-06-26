<?php

include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewKunden.php');
include('Model/Query.php');
include('Model/dbconnection.php');
include('View/ViewSearchbar.php');

    $navbar = new ViewNavbar();
    echo $navbar->printNavbar();

    $searchbar = new Searchbar();
    $search = $searchbar->searchbar();

    $limit = 20;
    $query = new Query();
    $result = $query->getKundenBySearchKontaktPerMail($conn, $search, $limit);

    $table = new ViewKunden();
    echo $table->printTable($result, $conn);


include('Partials/footer.php'); 

?>





