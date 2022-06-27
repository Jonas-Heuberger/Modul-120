<?php

// Klasse Query
class Query {

// mit limit 20 im Query kann man sagen das nur 20 Datensätze angezeigt werden sollen
// Ich habe aber die Pagination nicht hinbekommen, aber ich kann nur 20 Datensätze anzeigen 
// Die ganze liste wird angezeigt wenn Sie limit 20 rausnehmen
// Ich war mir nicht sicher was besser ist, das limit drin zulassen oder raus zu nehmen
// Ich habe mich fürs drin lassen entschieden
// $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand  FROM buecher order by id;"; // So würde dann der
// Query aussehen ohne limit

// Funktion um die Bücher nach der ID sortiert aus der DB zu bekommen
    public function getBuecherById($conn){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand  FROM buecher order by id limit 20;"; // SQL Query
        $result = $conn->query($query); 
        return $result;
    }

    // Funktion um die Bücher nach dem Katalog sortiert aus der DB zu bekommen
    public function getBuecherByKatalog($conn){
        $query = "select id, katalog, nummer, kurztitle, autor, kategorie, zustand from buecher order by katalog limit 20;";
        $result = $conn->query($query);
        return $result;
    }

// Funktion um die Bücher nach der Nummer sortiert aus der DB zu bekommen
    public function getBuecherByNummer($conn){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand  FROM buecher order by nummer limit 20;";
        $result = $conn->query($query);
        return $result;
    }

// Funktion um die Bücher nach dem Kurztitel sortiert aus der DB zu bekommen
    public function getBuecherByKurztitle($conn){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by kurztitle limit 20;";
        $result = $conn->query($query);
        return $result;
    }
// Funktion um die Bücher nach dem Autor sortiert aus der DB zu bekommen
    public function getBuecherByAutor($conn){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by autor limit 20;";
        $result = $conn->query($query);
        return $result;
    }

// Funktion um die Bücher nach der Kategorie sortiert aus der DB zu bekommen
    public function getBuecherByKategorie($conn){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by kategorie limit 20;";
        $result = $conn->query($query);
        return $result;
    }  

// Funktion um die Bücher nach dem Zustand sortiert aus der DB zu bekommen
    public function getBuecherByZustand($conn){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by zustand limit 20;";
        $result = $conn->query($query);
        return $result;
    }  

// Funktion um die Bücher nach der gemäss Suche nach Katalog gefilterd aus der DB zu bekommen
    public function getBuecherBySearchKatalog($conn, $search){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where katalog like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Bücher gemäss Suche nach Nummer gefilterd aus der DB zu bekommen
    public function getBuecherBySearchNummer($conn, $search){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where nummer like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Bücher gemäss Suche nach Kurztitel gefilterd aus der DB zu bekommen
    public function getBuecherBySearchKurztitle($conn, $search){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where kurztitle like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Bücher gemäss Suche nach Autor gefilterd aus der DB zu bekommen
    public function getBuecherBySearchAutor($conn, $search){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where autor like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Bücher gemäss Suche nach Kategorie gefilterd aus der DB zu bekommen
    public function getBuecherBySearchKategorie($conn, $search){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where kategorie like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Bücher gemäss Suche nach Zustand gefilterd aus der DB zu bekommen
    public function getBuecherBySearchZustand($conn, $search){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where zustand like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }
// Funktion um das gewünschte Buch im Detail anzuzeigen
    public function getBuecherDetails($conn, $id){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand, title, verfasser FROM buecher where id = $id;";
        $result = $conn->query($query);
        return $result;
    }
    
    // Funktion um Kunden nach ID sortiert aus der DB zu erhalten
    public function getKundenById($conn){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by kid limit 20;"; 
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um Kunden nach Vorname sortiert aus der DB zu erhalten
    public function getKundenByVorname($conn){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by vorname limit 20;"; 
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um Kunden nach Name sortiert aus der DB zu erhalten
    public function getKundenByName($conn){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by name limit 20;"; 
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um Kunden nach Kunde Seit sortiert aus der DB zu erhalten
    public function getKundenByKundeSeit($conn){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by kunde_seit limit 20;"; 
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um Kunden nach Kontakt per Mail sortiert aus der DB zu erhalten
    public function getKundenByKontaktPerMail($conn){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by kontaktpermail desc limit 20;"; 
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Kunden gemäss Suche nach Vorname gefilterd aus der DB zu bekommen
    public function getKundenBySearchVorname($conn, $search){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where vorname like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Kunden gemäss Suche nach Name gefilterd aus der DB zu bekommen
    public function getKundenBySearchName($conn, $search){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where name like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Kunden gemäss Suche nach Kunde Seit gefilterd aus der DB zu bekommen
    public function getKundenBySearchKundeSeit($conn, $search){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where kunde_seit like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um die Kunden gemäss Suche nach Kontakt per Mail gefilterd aus der DB zu bekommen
    public function getKundenBySearchKontaktPerMail($conn, $search){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where kontaktpermail like '%$search%' limit 20;";
        $result = $conn->query($query);
        return $result;
    }

    // Funktion um den gewählten Kunden im Detail anzusehen
    public function getKundenDetails($conn, $kid){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail, kontaktpermail, geschlecht, email, geburtstag FROM kunden where kid = $kid;"; 
        $result = $conn->query($query);
        return $result;
    }
}
?>