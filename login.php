<?php

session_start();

include('function.php');

$conn = conn();

head();

echo "<div class='container-fluid text-center'>    
      <div class='row content accedi'>";
    
$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];

$sql = "SELECT `tipo`, `nome`, `cognome`, `email` , `password` FROM `utente` WHERE `email` = '$email' AND `password` = '$pwd'";
$ris = mysqli_query($conn,$sql) or die (mysqli_error());
$utente = mysqli_fetch_array($ris);


if($utente) {
    $tipo = $utente['tipo'];
    $nome = $utente['nome'];
    $cognome = $utente['cognome'];
    $email = $utente['email'];
    $password = $utente['password'];
    $trovato = 1;   
} else {
    $trovato = 0;
}

if($utente && $utente['tipo'] == 'admin'){
    $_SESSION['admin'] = 1;
} 
 else {
     $_SESSION['admin'] = 0;
}

if($trovato === 1) {
    $_SESSION["autorizzato"] = 1;
    $_SESSION['user'] = $utente;
    header('Location: index.php');
} else {
        headernavLogin();
        echo "<body ng-app='MyLogin'>";
        sidenav();
        echo "<br><br> <p align='center' font-size='15px'> I dati inseriti non sono validi. 
              <br><br> <a href='accedi_biblio.php'> Clicca qui </a> per riprovare. <p>";
    }

sidenavDX();

echo "</div></div>";
    
footer();    


?>