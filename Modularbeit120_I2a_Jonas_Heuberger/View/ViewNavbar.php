<?php

class ViewNavbar {

  // printNavbar Funktion die einfach die Navbar ausgibt
public function printNavbar()
{
  echo '
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a href="index.php"><img src="Image/Logo.jpeg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"><li class="nav-item">
          <a class="nav-link" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg> Buecher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kunden.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Kunden</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filtern nach:<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
          </svg>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="buecher_filtered_by_katalog.php">Katalog</a></li>
            <li><a class="dropdown-item" href="buecher_filtered_by_nummer.php">Nummer</a></li>
            <li><a class="dropdown-item" href="buecher_filtered_by_kurztitle.php">Kurztitel</a></li>
            <li><a class="dropdown-item" href="buecher_filtered_by_autor.php">Autor</a></li>
            <li><a class="dropdown-item" href="buecher_filtered_by_kategorie.php">Kategorie</a></li>
            <li><a class="dropdown-item" href="buecher_filtered_by_zustand.php">Zustand</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="kunden_filtered_by_vorname.php">Vorname</a></li>
            <li><a class="dropdown-item" href="kunden_filtered_by_name.php">Nachname</a></li>
            <li><a class="dropdown-item" href="kunden_filtered_by_kunde_seit.php">Kunde Seit</a></li>
            <li><a class="dropdown-item" href="kunden_filtered_by_kontakt_per_mail.php">Kontakt per Mail</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link disabled">Disabled</a>-->
        </li>
      </ul>
    </div>
  </div>
</nav>
';
    }
}