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
    header('Location:index.php');
   } else {
    headernav();
    echo "<body ng-app='MyLogin'>";
    sidenav();
    echo "<br><br> <p align='center' font-size='15px'> I dati inseriti non sono validi. 
         <br><br> <a href='registrati_biblio.html'> Clicca qui </a> per riprovare. <p>";
    } 


sidenavDX();

echo "</div></div>";

footer();

?>