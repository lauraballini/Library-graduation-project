<?php

session_start();

include('function.php');

$conn = conn();
head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content catalogo'>";

sidenav();

echo "<h2 align='center'> Gestione CATALOGO LIBRI </h2> <br><br>";

echo "<div class='boxFunction'>
      <form action='insert_book.php' method='get' name='insertUser'>
      <label for='insert'> Aggiungi Libro </label> <br>
      <input type='submit' name='aggiungi' value='Aggiungi'/>
      </form> </div>

      <div class='boxFunction'>
      <form action='delete_book.php' method='get' name='deleteUser'>
      <label for='delete'> Elimina Libro </label> <br>
      <input type='submit' name='elimina' value='Elimina'/>
      </form> </div>
      <br><br><br><br>

      <form method='get' action='admin_book.php' name='insertUser'>
      <label for='insert'> Cerca Libro per AUTORE</label> <br>
      <input type='text' name='cerca'/>
      <input type='submit' name='cerca' value='Cerca'/>
      </form>
      <br><br><br><br>";

echo "<p> Catalogo Libri: </p>
      <table align='center'>
      <tr><th> Disponibile </th> <th> Numero Catalogazione </th> <th> Titolo </th> <th> Autore </th> <th> Casa Editrice </th> <th> Sezione </th> </tr>";    

      
$sql = "SELECT `disponibile`, `num_catalogazione`, `titolo`, `autore`, `casa_ed`, `sezione` FROM `libri`";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

while($row=mysqli_fetch_array($ris)) {
    $disponibile = $row['disponibile'];
    $numCatalogazione = $row['num_catalogazione'];
    $titolo = $row['titolo'];
    $autore = $row['autore'];
    $casaEd = $row['casa_ed'];
    $sezione = $row['sezione'];

echo "<tr> <td> $disponibile </td> <td> $numCatalogazione </td> <td> $titolo </td> <td> $autore </td> <td> $casaEd </td> <td> $sezione </td> </tr>";
}

echo "</table>";

sidenavDX();

echo "</div></div>";

footer();

?>