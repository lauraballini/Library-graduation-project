<?php

session_start();

include('function.php');

conn();
head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
<div class='row content accedi'>";

sidenavSX();

echo "<h1 align='center'> <strong>Biblioteca Civica di Livorno Ferraris </strong></h1> 
      <h3 align='center'> Grazie per aver effettuato l'accesso. </h3>
      <img id='biblio' src='immagini/biblio.jpg'> ";

sidenavBiblio();

echo "</div></div>";

footer();

?>