<?php

class Searchbar{

    // Funktion die die Searchbar erscheinen lässt
    public function searchbar(){

        // Searchbar wird ausgegeben
    echo" <form class='d-flex' role='search' method='post'>
    <input class='form-control me-2' type='search' placeholder='Search' name='search' aria-label='Search'>
    <button class='btn btn-outline-primary' type='submit'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>  <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
     </svg></button>
    </form>"; 

    // hier fange ich noch ein paar Werte ab und passe sie an wenn nötig
        if (isset($_POST["search"])){
        $search = $_POST["search"];

        if ($search == "Ja"){
            $search = 1;
        } 
        
        if ($search == "Nein"){
            $search = 0;
        } 

        if ($search == "Gut"){
            $search = "G";
        } 

        if ($search == "Mittel"){
            $search = "M";
        }

        if ($search == "Schlecht"){
            $search = "S";
        }

        return $search;
        }
    }    
}
?>