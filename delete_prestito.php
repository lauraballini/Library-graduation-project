<?php

session_start();

include('function.php');

$conn = conn();
head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content contatti'>";

sidenav();

echo "<h2 align='center'> Chiudi PRESTITO </h2> <br>
      <p> Inserisci i dati dell'utente e del libro </p>
      
      <form method='get' action='DEL_PRESTITO.php'>
      <label for='txt'> Nome: </label> <br>
      <input type='text' name='nome'> <br><br>
      <label for='txt'> Cognome: </label> <br>
      <input type='text' name='cognome'> <br><br>
      <label for='txt'> Titolo: </label> <br>
      <input type='text' name='titolo'> <br><br>
      <label for='txt'> Autore: </label> <br>
      <input type='text' name='autore'> <br><br>
      <label for='txt'> Data rientro: </label> <br>
      <input type='date' name='dataR'> <br><br>
      
      <input type='submit' name='aggiorna' value='Aggiorna'>";

sidenavDX();

echo "</div></div>";

footer();

?>