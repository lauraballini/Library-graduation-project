<?php

session_start();

include('function.php');

conn();
head();

echo "<body ng-app='MyApp2'>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content biblioteca'>";

sidenavSX();

echo "<h1 align='center'> <strong>Biblioteca Civica di Livorno Ferraris </strong></h1> 
      <img id='biblio' src='immagini/biblio.jpg'> <br><br><br>
      <p> Istituita nel <strong>1968</strong>, a seguito di alcuni spostamenti, la Biblioteca civica trova la sua attuale collocazione soltanto nel 1998 a <strong>Palazzo Ferraris</strong>, centro culturale cittadino che ospita la sede dell’Archivio storico comunale ed il Museo civico Ferraris dedicato ad Adamo e Galileo Ferraris. 
      <br><br>
      La Biblioteca civica afferisce al Sistema Bibliotecario “Piana del vercellese” e vanta attualmente un patrimonio librario di circa 26.200 volumi suddivisi in sezioni differenti:
      <ul>
      <li>Sezione dedicata alla <b>lettura per adulti</b> con testi di vario genere, dalla filosofia alle scienze sociali, dalle scienze naturali alla storia e alla letteratura; </li>
      <li>Sezione per <b>ragazzi</b>, la quale è suddivisa in due sale: una destinata ai bambini della scuola dell’infanzia e del primo ciclo della scuola primaria, mentre una seconda è destinata ai ragazzi del secondo ciclo della scuola primaria e della scuola secondaria di primo grado;</li>
      <li>Sezione dedicata ai libri in <b>lingua originale</b> francese ed inglese; </li>
      <li>Sezione dedicata al genere <b>fantasy e al graphic novel</b>;</li>
      <li>Sezione per <b>consultare</b> dizionari di lingua italiana e straniera ed enciclopedie nella sala in cui nacque Galileo Ferraris.</li>
      </ul>       
      </p>   
      <br>";

sidenavBiblio();

echo "</div></div>";

footer();

?>