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
$dataRitiro = $_GET['dataRitiro'];

$sql = "SELECT utente.num_tessera, libri.num_catalogazione FROM utente JOIN libri WHERE utente.nome = '$nome' AND utente.cognome = '$cognome' AND libri.titolo = '$titolo' AND libri.autore = '$autore'";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

if($row=mysqli_fetch_array($ris)) {
    $tessera = $row['num_tessera'];
    $libro = $row['num_catalogazione'];

    $sql = "UPDATE `prenotazioni` SET `data_ritiro`='$dataRitiro' WHERE `num_catalogazione` = '$libro' AND `utente` = '$tessera'";
        $ris = mysqli_query($conn, $sql) or die (mysqli_error());

    if($ris) {
        $sql = "INSERT INTO `prestiti`(`num_prestito`, `data_prestito`, `data_rientro`, `num_catalogazione`, `utente`) VALUES ('','$dataRitiro','','$libro','$tessera')";
        $ris = mysqli_query($conn, $sql) or die (mysqli_error());

        if($ris){
            $sql = "UPDATE `libri` SET `disponibile`='no' WHERE `titolo` = '$titolo' AND `autore` = '$autore'";
            $ris = mysqli_query($conn, $sql) or die (mysqli_error());

            if($ris) {
            echo "<h3> La prenotazione è stata chiusa e aggiunta ai prestiti </h3>";
           } else {
            echo "<h3> Qualcosa è andato storto. </h3>";
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