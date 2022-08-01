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

$disponibile = $_GET['disponibile'];
$titolo = $_GET['titolo'];
$autore = $_GET['autore'];
$casaEd = $_GET['casaEd'];
$sezione = $_GET['sezione'];

$sql = "INSERT INTO `libri`(`disponibile`, `num_catalogazione`, `titolo`, `autore`, `casa_ed`, `sezione`) VALUES ('$disponibile','','$titolo','$autore','$casaEd','$sezione')";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

if($ris) {
    echo "<h3> Il libro è stato aggiunto correttamente. </h3>";
} else {
    echo "<h3> Qualcosa è andato storto, riprova. </h3>";
}

sidenavDX();

echo "</div></div>";

footer();

?>