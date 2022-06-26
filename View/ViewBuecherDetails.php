<?php


class ViewBuecherDetails{

    public function printTable($result, $conn){
        if ($result!== false && $result->num_rows > 0) {

           

            echo "<table class='table'><tr><th>Katalog</th><th>Nummer</th><th>Kurztitel</th><th>Autor</th><th>Kategorie</th><th>Zustand</th><th>Titel</th><th>Verfasser</th></tr>";

            // output data of each row
            while($row = $result->fetch_assoc()) {

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
             echo ' <ul class="pagination">
             <li class="page-item"><a class="page-link" href="#">Previous</a></li>
             <li class="page-item"><a class="page-link" href="#">1</a></li>
             <li class="page-item"><a class="page-link" href="#">2</a></li>
             <li class="page-item"><a class="page-link" href="#">3</a></li>
             <li class="page-item"><a class="page-link" href="#">Next</a></li>
           </ul>';
        }
    }
?>