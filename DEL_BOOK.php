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

$titolo = $_GET['titolo'];
$autore = $_GET['autore'];

$sql = "DELETE FROM `libri` WHERE 'titolo' = '$titolo' || 'autore' = '$autore'";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

if($ris) {
    echo "<h3> Il libro è stato eliminato correttamente. </h3>";
} else {
    echo "<h3> Qualcosa è andato storto, riprova. </h3>";
}

sidenavDX();

echo "</div></div>";

footer();

?>