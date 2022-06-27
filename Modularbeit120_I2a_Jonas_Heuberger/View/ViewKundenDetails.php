<?php 
class ViewKundenDetails {

  // printTable Funktion
  public function printTable($result, $conn){
    // geprüft ob der Query keine Datensätze enthält
    if ($result!== false && $result->num_rows > 0) {
 
      // Tabellen Kopf
    echo "<table class='table'><tr><th>Vorname</th><th>Nachname</th><th>Kunde Seit</th><th>Kontakt per Mail</th><th>Geschlecht</th><th>Email</th><th>Geburtstag</th></tr>";
    // output data of each row
  // Alle Datensätze gemäss Query werden ausgegeben
    while($row = $result->fetch_assoc()) {

      if ($row['kontaktpermail'] == 1) {
        $row['kontaktpermail'] = "Ja";
      } else {
        $row['kontaktpermail'] = "Nein";
      }

      if ($row['geschlecht'] == "M"){
        $row["geschlecht"] = "Maennlich";
      } else {
        $row['geschlecht'] = "Weiblich";
      }

      echo 
      "<tr><td>".$row["vorname"]."</td>
      <td>".$row["name"]."</td>
      <td>".$row['kunde_seit']."</td>
      <td>".$row['kontaktpermail']."</td>
      <td>".$row['geschlecht']."</td>
      <td>".$row['email']."</td>
      <td>".$row['geburtstag']."</td>
      </tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  $conn->close();
    }
}
?>