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

echo "<h2 align='center'> Elimina LIBRO </h2> <br><br>";

echo "<form action='DEL_BOOK.php' method='get' name='insertBook'>
      <label for='txt'> Titolo: </label> <br>
      <input type='text' name='titolo'>
      <br><br>
      <label for='txt'> Autore: </label> <br>
      <input type='text' name='autore'>
      <br><br>
      
      <input type='submit' name='elimina' value='Elimina'>
      <br><br>"; 

sidenavDX();

echo "</div></div>";

footer();

?>