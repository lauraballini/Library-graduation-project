<?php

session_start();

include('function.php');

conn();
head();

echo "<body ng-app='MyApp6'>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content'>";

sidenavSX();

echo "<h2 align='center'> I Servizi </h2>
      <img id='banner' src='immagini/servizi/banner.jpg'>
      <br><br><br>
      <p> La biblioteca civica offre alla collettività cittadina vari tipi di servizi che possono comprendere in modo più generale l'ambito culturale: </p>

      <div ng-controller='servizi' id='servizi'>
      <ul>
      <li> <strong> Prestito </strong> e <strong> consultazione </strong> di libri, periodici, dizionari ed enciclopedie; </li> <br>
      <li> <strong> Connessione ad Internet</strong>; </li> <br>
      <li> Postazione con <strong> computer</strong> dedicata agli utenti; </li> <br>
      <li> Scambio <strong> interbibliotecario</strong>; </li> <br>
      <li> Gestione delle <strong> donazioni</strong>; </li> <br>
      <li> Eventi culturali di <strong> promozione della lettura</strong> <span class='glyphicon glyphicon-menu-down' ng-click='eventi()'></span> </li> <br>
      
      <!--Show dettagli servizi-->
      <div ng-show='showMe'>
      <p> 
        <img width='50px' height='50px' src='immagini/servizi/bookcrossing.png'>  Bookcrossing / Scambia Libri <br>
        <hr> <img width='60px' height='60px' src='immagini/servizi/present.png'> Regala un libro a Natale <br>
        <hr> <img width='50px' height='50px' src='immagini/servizi/concorso.png'> Concorso letterario - <a id='concorso' href='https://www.comune.livornoferraris.vc.it/it-it/appuntamenti/concorso-letterario-pagine-di-territorio-storie-di-uomini-e-paesi-77153-1-51d9f7e860d56018cc8b1dba34f6fb48'> Scopri di più </a> 
        <hr> <br>
      </p>
      </div>
      <li> Progetti con l'istituto<strong> Comprensivo Galileo Ferraris</strong> <span ng-click='progetti()' class='glyphicon glyphicon-menu-down'></span> </li> <br>
      
      <div ng-show='showMe1'>
      <p>
        <img width='100px' height='70px' src='immagini/servizi/mondo.png'> Puliamo il mondo - <a id='mondo' href='https://www.comune.livornoferraris.vc.it/it-it/appuntamenti/puliamo-il-mondo-79954-1-798b15959ff729874ef9bb9e8768699f'> Scopri di più </a> 
        <hr> <img width='70px' height='70px' src='immagini/servizi/sito-cor-et-amor.png'> Progetto gentilezza - <a id='gentilezza' href='https://www.comune.livornoferraris.vc.it/it-it/appuntamenti/progetto-gentilezza-77985-1-4538c0ce6173a7b6a92acd206ae57252'> Scopri di più </a> 
        <br> in collaborazione con l'associazione <a href='https://costruiamogentilezza.org/chi-siamo/'> 'Cor et Amor' </a>
        <hr> <br>
      </p>
      </div>
      <li> Laboratori e corsi di <strong> lingua italiana per stranieri</strong> <span ng-click='lingua()' class='glyphicon glyphicon-menu-down'></span> </li> <br>
      
      <div ng-show='showMe2'>
      <p>
        <img width='50px' height='50px' src='immagini/servizi/italia.png'> Corsi di lingua italiana per stranieri con C.P.I.A. Biella/Vercelli - <a id='corsi' href='https://www.cpiabivc.edu.it/index.php?idpag=1'> Scopri di più </a>  
      </p>
      <br>
      </div>
    </ul> 
    </div>";

sidenavDX();

echo "</div></div>";

footer();

?>