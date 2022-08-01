<?php

session_start();

include('function.php');

$conn = conn();

head();

echo "<body>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content'>";

sidenavSX(); 

echo "<h2 align='center'>Libri catalogati</h2> <br>
      <p align='center'> Consulta il catalogo dei libri per scoprire nuovi titoli. </p>
      <hr>";

echo "<p> I libri sono suddivisi per sezioni: <br>
      <strong> 800R </strong> letteratura per ragazzi, <strong> 813 </strong> letteratura americana, <strong> 823 </strong> letteratura inglese, <strong> 833 </strong> letteratura germanica, 
      <strong> 843 </strong> letteratura francese, <strong> 853 </strong> letteratura italiana, <strong> 863 </strong> letteratura spagnola, <strong> 940 </strong> storia europea. </p>
      <br>
      <table align='center'>";

      if(isset($_SESSION['autorizzato']) and $_SESSION['autorizzato']=== 1) {
      echo "<tr><th> PRENOTA </th> <th> DISPONIBILITA' </th> <th> TITOLO </th> <th> AUTORE </th> <th> CASA EDITRICE </th> <th> SEZIONE </th></tr>";
      } else { echo "<tr><th> TITOLO </th> <th> AUTORE </th> <th> CASA EDITRICE </th> <th> SEZIONE </th></tr>"; }

$sql = "SELECT `disponibile`, `titolo`, `autore`, `casa_ed`, `sezione` FROM `libri` ORDER BY sezione";
$ris = mysqli_query($conn, $sql) or die (mysqli_error());

while($row=mysqli_fetch_array($ris)) {
      $disponibile=$row['disponibile'];
      $titolo=$row['titolo'];
      $autore=$row['autore'];
      $casaEd=$row['casa_ed'];
      $sezione=$row['sezione'];      

      if(isset($_SESSION['autorizzato']) and $_SESSION['autorizzato']=== 1) {
            if($disponibile == 'si') {
               echo "<tr> <td>
               <form method='get' action='insert_prenotazioni.php'>
               <input type='submit' name='prenota' value='Prenota'>
               </form> </td> <td>$disponibile </td> <td> $titolo </td> <td> $autore </td> <td> $casaEd </td> <td> $sezione </td></tr>"; 
            } else {
                   echo "<tr> <td><input type='hidden' name='prenota' value='prenota' action='personal.php' disabled></td> <td>$disponibile </td> <td> $titolo </td> <td> $autore </td> <td> $casaEd </td> <td> $sezione </td></tr>";
                  }
      } else {
            echo "<tr> <td> $titolo </td> <td> $autore </td> <td> $casaEd </td> <td> $sezione </td></tr>";
      }

}      

echo "</table>";

sidenavDX();

echo "</div></div>";

footer();



?>