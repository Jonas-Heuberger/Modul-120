<?php
// ich include dateien
include('Partials/head.php');
include('View/ViewNavbar.php'); 
include('View/ViewBuecher.php');
include('Model/Query.php');
include('Model/dbconnection.php');
include('View/ViewSearchbar.php');

// ich erstelle ein Navbar objekt und gebe sie aus
$navbar = new ViewNavbar();
echo $navbar->printNavbar();

$searchbar = new Searchbar();
$search = $searchbar->searchbar();


$query = new Query();
$result = $query->getBuecherBySearchKatalog($conn, $search);

$table = new ViewBuecher();
echo $table->printTable($result, $conn);

include('Partials/footer.php'); 

?>
