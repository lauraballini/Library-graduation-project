<?php

session_start();

include('function.php');

conn();
head();

echo "<body ng-app='MyApp4'>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content contatti'>";

sidenavSX();

echo "<h2 align='center'>Orari</h2>
    <p align='center'>La biblioteca ha i seguenti orari di apertura: </p>

    <table align='center'> 
    <tr><th> GIORNO </th> <th> ORA </th></tr>
    <tr> <td> Lunedì </td> <td> 9.00 - 12.00 / 15.00 - 18.00 </td></tr>
    <tr> <td> Martedì </td> <td> 9.00 - 12.00 / 15.00 - 18.00</td></tr>
    <tr> <td> Mercoledì </td> <td> 9.00 - 12.00 / 15.00 - 18.00</td></tr>
    <tr> <td> Giovedì </td> <td> 9.00 - 12.00 / 15.00 - 18.00</td></tr>
    <tr> <td> Venerdì </td> <td> 9.00 - 12.00 / 15.00 - 18.00</td></tr>
    <tr> <td> Sabato </td> <td> 9.00 - 12.00</td></tr>
    <tr> <td> Domenica </td> <td> Chiuso </td></tr>

    </table>

    <hr>

    <h2 align='center'>Contatti</h2>
    <p align='center'>È possibile contattare la biblioteca durante gli orari di apertura al seguente numero: <strong>0161/411229</strong>. 
    <br> Oppure potete inviare una mail all'indirizzo: <strong> biblioteca@comune.livornoferraris.vc.it</strong></p>";

sidenavDX();

echo "</div></div>";

footer();

?>