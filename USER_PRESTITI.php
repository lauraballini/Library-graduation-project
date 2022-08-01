<?php

session_start();

include('function.php');

$conn = conn();
$utente = $_SESSION['user'];
$nome = $utente['nome'];

head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content accedi'>";

sidenavSX();

echo "<h2 align='center'> Ecco i tuoi prestiti: </h2>
      <br><br>
      
      <table align='center'>
      <tr> <th> Nome </th> <th> Cognome </th> <th> Titolo </th> <th> Autore </th> <th> Data Prestito </th> <th> Data Rientro </th> </tr>";

$sql = "SELECT utente.nome, utente.cognome, libri.titolo, libri.autore, prestiti.data_prestito, prestiti.data_rientro FROM utente JOIN libri JOIN prestiti WHERE utente.num_tessera = prestiti.utente AND libri.num_catalogazione = prestiti.num_catalogazione AND utente.nome = '$nome'";     
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

while($row=mysqli_fetch_array($ris)) {
    $nomeUser = $row['nome'];
    $cognome = $row['cognome'];
    $titolo = $row['titolo'];
    $autore = $row['autore']; 
    $dataP = $row['data_prestito'];
    $dataR = $row['data_rientro'];

    echo "<tr> <td> $nomeUser </td> <td> $cognome </td> <td> $titolo </td> <td> $autore </td> <td> $dataP </td> <td> $dataR </td> </tr>";
}

echo "</table>";

sidenavDX();

echo "</div></div>";

footer();

?>