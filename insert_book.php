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

echo "<h2 align='center'> Aggiungi LIBRO </h2> <br><br>";

echo "<form action='IN_BOOK.php' method='get' name='insertBook'>
      <label for='txt'> Disponibilità: </label> <br>
      <input type='text' name='disponibile'>
      <br><br>
      <label for='txt'> Titolo: </label> <br>
      <input type='text' name='titolo'>
      <br><br>
      <label for='txt'> Autore: </label> <br>
      <input type='text' name='autore'>
      <br><br>
      <label for='txt'> Casa Editrice: </label> <br>
      <input type='text' name='casaEd'>
      <br><br>
      <label for='txt'> Sezione: </label> <br>
      <input type='text' name='sezione'>
      <br><br>
      
      <input type='submit' name='aggiungi' value='Aggiungi'>
      <br><br>"; 

sidenavDX();

echo "</div></div>";

footer();

?>