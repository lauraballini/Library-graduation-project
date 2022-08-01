<?php

session_start();

include('function.php');

$conn = conn();
head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content registrati'>";

sidenav();

echo "<h2 align='center'> Gestione PRESTITI </h2> <br><br>";

echo "<div class='boxFunction'>
      <form action='insert_prestito.php' method='get' name='insertUser'>
      <label for='insert'> Aggiungi Prestito </label> <br>
      <input type='submit' name='aggiungi' value='Aggiungi'/>
      </form> </div>

      <div class='boxFunction'>
      <form action='delete_prestito.php' method='get' name='deleteUser'>
      <label for='delete'> Chiudi Prestito </label> <br>
      <input type='submit' name='chiudi' value='Chiudi'/>
      </form> </div>
      <br><br><br><br>

      <form method='get' action='admin_prestiti.php' name='insertUser'>
      <label for='insert'> Cerca Prestito per UTENTE</label> <br>
      <input type='text' name='cerca'/>
      <input type='submit' name='cerca' value='Cerca'/>
      </form>
      <br><br><br><br>";

echo "<p> Elenco Prestiti: </p>
      <table align='center'>
      <tr><th> Nome </th> <th> Cognome </th> <th> Titolo </th> <th> Autore </th> <th> Sezione </th> <th> Data Prestito </th> <th> Data Rientro </th></tr>";    

      
$sql = "SELECT utente.nome, utente.cognome, libri.titolo, libri.autore, libri.sezione, prestiti.data_prestito, prestiti.data_rientro FROM utente JOIN libri JOIN prestiti WHERE utente.num_tessera = prestiti.utente AND libri.num_catalogazione = prestiti.num_catalogazione;";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

while($row=mysqli_fetch_array($ris)) {
    $nome = $row['nome'];
    $cognome = $row['cognome'];
    $titolo = $row['titolo'];
    $autore = $row['autore'];
    $sezione = $row['sezione'];
    $dataP = $row['data_prestito'];
    $dataR = $row['data_rientro'];

echo "<tr> <td> $nome </td> <td> $cognome </td> <td> $titolo </td> <td> $autore </td> <td> $sezione </td> <td> $dataP </td> <td> $dataR </td> </tr>";
}

echo "</table>";

sidenavDX();

echo "</div></div>";

footer();

?>