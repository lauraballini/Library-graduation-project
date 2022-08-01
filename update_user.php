<?php

session_start();

include('function.php');

$conn = conn();
head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content accedi'>";

sidenav();

echo "<h2 align='center'> Modifica UTENTE </h2> \n
      <p align='center'> Cambia la tipologia di utente: ADMIN o USER. </p>
      <br>
      <form method='post' action='UP_USER.php' name='updateUser'>
      <label for='txt7'> Numero Tessera: </label> <br>
      <input type='text' name='tessera' id='tessera'> 
      <br><br><label for='txt7'> Tipo: </label> <br>
      <input type='text' name='tipo' id='tipo'> 
      <br><br>
      <input type='submit' id='submit' value='Modifica' name='modifica'>
      </form>
      <br><br>";

sidenavDX();

echo "</div></div>";
      
footer();

?>