<?php

class Query {


    public function getBuecherById($conn, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand  FROM buecher order by id limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherByKatalog($conn, $limit){
        $query = "select id, katalog, nummer, kurztitle, autor, kategorie, zustand from buecher order by katalog limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherByNummer($conn, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand  FROM buecher order by nummer limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherByKurztitle($conn, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by kurztitle limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherByAutor($conn, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by autor limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherByKategorie($conn, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by kategorie limit $limit;";
        $result = $conn->query($query);
        return $result;
    }  
    public function getBuecherByZustand($conn, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher order by zustand limit $limit;";
        $result = $conn->query($query);
        return $result;
    }  

    public function getBuecherBySearchKatalog($conn, $search, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where katalog like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherBySearchNummer($conn, $search, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where nummer like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherBySearchKurztitle($conn, $search, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where kurztitle like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherBySearchAutor($conn, $search, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where autor like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherBySearchKategorie($conn, $search, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where kategorie like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getBuecherBySearchZustand($conn, $search, $limit){
        $query = "SELECT id, katalog, nummer, kurztitle, autor, kategorie, zustand FROM buecher where zustand like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }
    
    public function getKundenById($conn, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by kid limit $limit;"; 
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenByVorname($conn, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by vorname limit $limit;"; 
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenByName($conn, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by name limit $limit;"; 
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenByKundeSeit($conn, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by kunde_seit limit $limit;"; 
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenByKontaktPerMail($conn, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden order by kontaktpermail desc limit $limit;"; 
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenBySearchVorname($conn, $search, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where vorname like '%$search% limit $limit';";
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenBySearchName($conn, $search, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where name like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenBySearchKundeSeit($conn, $search, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where kunde_seit like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }

    public function getKundenBySearchKontaktPerMail($conn, $search, $limit){
        $query = "SELECT kid, vorname, name, kunde_seit, kontaktpermail FROM kunden where kontaktpermail like '%$search%' limit $limit;";
        $result = $conn->query($query);
        return $result;
    }
}
?>