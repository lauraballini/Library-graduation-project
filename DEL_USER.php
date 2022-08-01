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

$tessera = $_POST['tessera'];

$sql = "DELETE FROM utente WHERE 'num_tessera' = '$tessera'";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

if($ris) {
    echo "<h3> L'utente è stato eliminato.</h3>";
} else {
    echo "<h3> Qualcosa è andato storto. </h3>";
}

sidenavDX();

echo "</div></div>";

footer();

?>