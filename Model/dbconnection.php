<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book";
	
	// Verbindung herstellen
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Verbindung prüfen
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

?>