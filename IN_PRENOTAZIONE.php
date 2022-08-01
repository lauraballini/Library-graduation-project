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

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$titolo = $_GET['titolo'];
$autore = $_GET['autore'];
$dataP = $_GET['dataP'];
      
$sql = "SELECT utente.num_tessera, libri.num_catalogazione, libri.disponibile FROM utente JOIN libri WHERE utente.nome = '$nome' AND utente.cognome = '$cognome' AND libri.titolo = '$titolo' AND libri.autore = '$autore'";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

if($row=mysqli_fetch_array($ris)) {
    $disponibile = $row['disponibile'];
    $tessera = $row['num_tessera'];
    $numCatalogazione = $row['num_catalogazione'];

    if($disponibile == "si") {
        $sql = "INSERT INTO `prenotazioni`(`data_prenotazione`, `data_ritiro`, `num_catalogazione`, `utente`) VALUES ('$dataP','','$numCatalogazione','$tessera')";
        $ris = mysqli_query($conn, $sql) or die (mysqli_error());

        if($ris) {
            $sql = "UPDATE `libri` SET `disponibile`='no' WHERE `titolo` = '$titolo' AND `autore` = '$autore'";
            $ris = mysqli_query($conn, $sql) or die (mysqli_error());

            if($ris) {
            echo "<h3> Prenotazione aggiunta con successo";
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