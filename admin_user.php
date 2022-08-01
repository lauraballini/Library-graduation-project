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

echo "<h2 align='center'> Gestione UTENTI </h2> <br><br>";

echo "<div class='boxFunction'>
      <form action='update_user.php' method='get' name='updateUser'>
      <label for='update'> Modifica Utente </label> <br>
      <input type='submit' name='modifica' value='Modifica'/>
      </form> </div>
      
      <div class='boxFunction'>
      <form action='delete_user.php' method='get' name='deleteUser'>
      <label for='delete'> Elimina Utente </label> <br>
      <input type='submit' name='elimina' value='Elimina'/>
      </form> </div>
      
      <div class='boxFunction'>
      <form action='insert_user.php' method='get' name='insertUser'>
      <label for='insert'> Aggiungi Utente </label> <br>
      <input type='submit' name='aggiungi' value='Aggiungi'/>
      </form> </div>
      <br><br><br>

      <form method='get' action='admin_book.php' name='insertUser'>
      <label for='insert'> Cerca Utente per COGNOME</label> <br>
      <input type='text' name='cerca'/>
      <input type='submit' name='cerca' value='Cerca'/>
      </form>
      <br><br><br><br>";

echo "<p align='center'> Tabella utenti: </p>
      <table align='center'>
      <tr><th> Numero tessera </th> <th> Nome </th> <th> Cognome </th> <th> Data di nascita </th> <th> Città </th> <th> Telefono </th> <th> Email </th> <th> Tipo Utente </th> </tr>";    

      
$sql = "SELECT `num_tessera`, `nome`, `cognome`, `data_nascita`, `citta`, `telefono`, `email`, `tipo` FROM `utente`";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

while($row=mysqli_fetch_array($ris)) {
    $tessera = $row['num_tessera'];
    $nome = $row['nome'];
    $cognome = $row['cognome'];
    $dataNascita = $row['data_nascita'];
    $citta = $row['citta'];
    $telefono = $row['telefono'];
    $email = $row['email'];
    $tipoUtente = $row['tipo'];

echo "<tr> <td> $tessera </td> <td> $nome </td> <td> $cognome </td> <td> $dataNascita </td> <td> $citta </td> <td> $telefono </td> <td> $email </td> <td> $tipoUtente </td> </tr>";
}

echo "</table>";

sidenavDX();

echo "</div></div>";

footer();

?>