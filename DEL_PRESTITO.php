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

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$titolo = $_GET['titolo'];
$autore = $_GET['autore'];
$dataR = $_GET['dataR'];

$sql = "SELECT utente.num_tessera, libri.num_catalogazione, libri.disponibile FROM utente JOIN libri WHERE utente.nome = '$nome' AND utente.cognome = '$cognome' AND libri.titolo = '$titolo' AND libri.autore = '$autore'";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

if($row=mysqli_fetch_array($ris)) {
    $disponibile = $row['disponibile'];
    $tessera = $row['num_tessera'];
    $numCatalogazione = $row['num_catalogazione'];

    if($disponibile == "no") {
        $sql = "UPDATE `prestiti` SET `data_rientro`='$dataR' WHERE `num_catalogazione` = '$numCatalogazione' AND `utente` = '$tessera'";
        $ris = mysqli_query($conn, $sql) or die (mysqli_error());

        if($ris) {
            $sql = "UPDATE `libri` SET `disponibile`='si' WHERE `titolo` = '$titolo' AND `autore` = '$autore'";
            $ris = mysqli_query($conn, $sql) or die (mysqli_error());

            if($ris) {
            echo "<h3> Prestito chiuso con successo";
            } else {
                echo "<h3> Qualcosa è andato storto.</h3>";
            } 
        }
    } else {
        echo "<h3> Qualcosa è andato storto.</h3>";
    }
} 


sidenavDX();

echo "</div></div>";

footer();

?>

"SELECT UPDATE `prestiti` SET `data_rientro`='' WHERE ";