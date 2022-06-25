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

$query = new Query();
$result = $query->getKundenBySearchName($conn, $search);

$table = new ViewKunden();
echo $table->printTable($result, $conn);


include('Partials/footer.php'); 

?>
