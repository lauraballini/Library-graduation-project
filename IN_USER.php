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

$tipo = $_POST['tipo'];    
$nome = $_POST['name'];
$cognome = $_POST['cogn'];
$birth = $_POST['birth'];
$citta = $_POST['residenza'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
 
$sql = "INSERT INTO `utente`(`num_tessera`, `nome`, `cognome`, `data_nascita`, `citta`, `telefono`, `email`, `password`, `tipo`) VALUES ('','$nome','$cognome','$birth','$citta','$phone','$email','$pwd', '$tipo')";
$ris = mysqli_query($conn, $sql);    

   if($ris) {
    echo "<h3> Operazione andata a buon fine, utente aggiunto. </h3>";
   } else {
    echo "<h3> Qualcosa è andato storto, riprova. </h3>";
    } 

sidenavDX();

echo "</div></div>";

footer();

?>