<?php

// Klasse ViewBuecherDetails
class ViewBuecherDetails{

  // printTable Funktion die die Query Datensätze und die Connection übernimmt
    public function printTable($result, $conn){

      // Geprüft ob der Query leer ist
        if ($result!== false && $result->num_rows > 0) {

           
            // Ausgabe Tabellen Kopf 
            echo "<table class='table'><tr><th>Katalog</th><th>Nummer</th><th>Kurztitel</th><th>Autor</th><th>Kategorie</th><th>Zustand</th><th>Titel</th><th>Verfasser</th></tr>";

            // Hier wird die Row ausgegeben
            // output data of each row
            while($row = $result->fetch_assoc()) {

              // hier fange ich eine Variable ab und verändere ihren Wert 
              if ($row["zustand"] == 'G') {
                $row['zustand'] = "Gut";
              } else if ($row['zustand'] == 'M') {
                $row['zustand'] = "Mittel";
              } else {
                $row['zustand'] = "Schlecht";
              }

              echo "
              <tr>
              <td>".$row["katalog"]."</td>
              <td>".$row["nummer"]."</td>
              <td>".$row['kurztitle']."</td>
              <td>".$row['autor']."</td>
              <td>".$row['kategorie']."</td>
              <td>".$row['zustand']."</td>
              <td>".$row['title']."</td>
              <td>".$row['verfasser']."</td>
              </tr>
             ";
       }
            echo "</table>";
            } else {
            echo "0 results";
            }
            $conn->close();  
        }
    }
?>