<?php 
$query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie  FROM buecher where id between 1 and 20";
$result = $conn->query($query);

?>