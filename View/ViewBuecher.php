<?php


class ViewBuecher{

     public function printTable($result, $conn)
     {

         $limit = 20;

        if ($result->num_rows > 0) {

            echo "<div><p>Sortieren nach: </p></div>";

            echo "<table class='table'><tr><th><a href='buecher_by_katalog.php'>Katalog</a></th><th><a href='buecher_by_nummer.php'>Nummer</a></th><th><a href='buecher_by_kurztitle.php'>Kurztitel</a></th><th><a href='buecher_by_autor.php'>Autor</a></th><th><a href='buecher_by_kategorie.php'>Kategorie</a></th><th><a href='buecher_by_zustand.php'>Zustand</a></th><th>bearbeiten</th><th>löschen</th></tr>";

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
              <tr><td>".$row["katalog"]."</td>
              <td>".$row["nummer"]."</td>
              <td>".$row['kurztitle']."</td>
              <td>".$row['autor']."</td>
              <td>".$row['kategorie']."</td>
              <td>".$row['zustand']."</td>
              <td><a href='edit.php?id=".$row['id']."' class='text-warning'> 
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg></a></td>
              <td><a href='delete.php?id=".$row['id']."' class='text-danger'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg></a></td></tr>";
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