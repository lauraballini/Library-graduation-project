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
echo "</strong> </h2> 
<div class='admin'> <img class='icona' src='immagini/prestito.png'> <p class='admin1'> <a href='USER_PRESTITI.php' class='admin2'> I tuoi PRESTITI </a></p> </div>
<div class='admin'> <img class='icona' src='immagini/booking.png'> <p class='admin1'> <a href='USER_PRENOTAZIONI.php' class='admin2'> Le tue PRENOTAZIONI </a></p> </div>
<br><br><br>

<p align='center'> Vorresti leggere un nuovo libro non ancora presente tra quelli catalogati? Scrivilo qui sotto e inviaci il messaggio.
\n
<form action='mailto:biblioteca@comune.livornoferraris.vc.it' method='post' enctype='text/plain' align='center'>
<textarea name='commento' cols='50' rows='6'> Testo di default</textarea> <br>
<input type='submit' value='Invia'>
</form>";

sidenavDX();

echo "</div></div>";

footer();

?>