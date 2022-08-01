<?php

session_start();

include('function.php');

conn();
$utente = $_SESSION['user'];

head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content accedi'>";

sidenavSX();

echo "<h2 align='center'> <strong> Ciao ";
print_r ($utente['nome']);
echo "</strong> </h2> <br>
<div class='admin'> <img class='icona' src='immagini/utente.png'> <p class='admin1'> <a href='admin_user.php' class='admin2'> Gestisci UTENTI </a> </p> </div>
<div class='admin'> <img class='icona' src='immagini/book2.png'> <p class='admin1'> <a href='admin_book.php' class='admin2'> Gestisci CATALOGO LIBRI </a></p> </div> 
<div class='admin'> <img class='icona' src='immagini/prestito.png'> <p class='admin1'> <a href='admin_prestiti.php' class='admin2'> Gestisci PRESTITI </a></p> </div>
<div class='admin'> <img class='icona' src='immagini/booking.png'> <p class='admin1'> <a href='admin_prenotazioni.php' class='admin2'> Gestisci PRENOTAZIONI </a></p> </div>";

sidenavDX();

echo "</div></div>";

footer();

?>
