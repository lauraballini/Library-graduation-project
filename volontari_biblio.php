<?php

session_start();

include('function.php');

conn();
head();

echo "<body ng-app='MyApp5'>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
      <div class='row content volontari'>";

sidenavSX();

echo "<h2 align='center'> I Volontari </h2>
    <p> La Biblioteca civica ha una gestione prevalentemente al femminile, a partire dalla responsabile bibliotecaria e continuando con le volontarie, le quali dedicano quotidianamente il loro tempo alla biblioteca; 
    le donne che si prendono cura del patrimonio librario hanno età tutte diverse, portando così importanti contributi culturali e personali vastissimi provenienti da periodi storici, usanze e costumi differenti.
    È importante sottolineare un'unica presenza maschile, nella figura di un giovane ragazzo, anch'esso indispensabile per il suo prezioso contributo rivolto soprattutto ai giovani.
    <br><br>
    In questa sezione a loro dedicata potete trovare alcuni <strong> consigli, </strong>ognuno proveniente da un genere di preferenza differente dall'altro. 
    </p>
    <br>
    <p align='center'><strong> Si ringraziano i volontari per il loro indispensabile contributo e tempo. </strong> </p>
    <br><br>

    <ul>
      <li><img src='immagini/book1.png' class='book'><strong> Niccolò:</strong> ciò che legge maggiormente è il genere storico, la letteratura antica ed i romanzi classici.
      <br> Il libro da lui consigliato è <i> ''Le notti bianche'', di Fedor Dostoevskij</i>: racconto su un sognatore il quale durante una passeggiata, isolato dalla realtà e da qualsiasi rapporto di amicizia, incontra sul lungofiume una ragazza che risveglia in lui il sentimento dell'amore. </li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Patrizia:</strong> è la responsabile della biblioteca ed i libri che più preferisce sono quelli di narrativa, nello specifico i romanzi ed i saggi, soprattutto italiani o che trattano il tema della cultura ebraica.\n
      <br> I libri da lei consigliati sono <i> ''A parte il cancro tutto bene'', di Corrado Sannucci</i>; 
      <i> ''La vita gioca con me'', di David Grossmann</i> ma più di tutto consiglia la lettura della <i> ''Costituzione italiana''</i>, in particolar modo la prima parte che tratta di diritti e doveri dei cittadini, possibilmente sensibilizzando già i più piccoli. </li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Malvina:</strong> legge un po' di tutto, ma ciò che più le piace sono i racconti su storie realmente accadute.
      <br> Il libro da lei consigliato è <i> ''La chiave di Sara'', di Tatiana de Rosnay</i>: romanzo storico e drammatico che tratta l'episodio del Vel'd'Hiv, dove molti ebrei furono rinchiusi in una grande arena e vennero poi deportati verso 
      il campo di concentramento di Auschwitz dalla polizia francese il 16 e 17 luglio 1942. </li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Laura:</strong> legge un po' di tutto ma è molto appassionata di romanzi e gialli.
      <br> Il libro da lei consigliato è <i> ''Il fu Mattia Pascal'', di Luigi Pirandello</i>: un romanzo che racconta la storia di un uomo il quale, a seguito della rovina della sua famiglia, si ritrova morto per caso e decide quindi di cominciare una nuova vita 
      ma si accorgerà poi di non poterlo fare e, una volta tornato indietro, non gli resterà che portare i fiori sulla sua stessa tomba. </li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Giulia:</strong> i generi che legge sono i più disparati, purché non siano romanzi rosa o thriller, datele un libro di fantascienza e sarà felice.
      <br> Il libro da lei consigliato è <i> ''L'insostenibile leggerezza dell'essere'', di Milan Kundera</i>: un romanzo ambientato a Praga negli anni intorno al 1968 e che descrive la vita degli srtisti e degli intellettuali cecoslovacchi nel periodo
      fra la Primavera di Praga e la successiva invasione da parte del Patto di Varsavia.</li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Mariuccia:</strong> è amante dei generi avventurosi storici e che trattano delle culture orientali.
      <br> Il libro da lei consigliato è <i> ''Mia amata Yuriko'', di Antonietta Pastore</i>: romanzo che parla di Yuriko e Yoshi, due giovani che lottano per il loro amore e che dovranno combattere contro il dolore struggente dell'abbandono e della nostalgia.</li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Rita:</strong> i generi che più preferisce sono i romanzi storici.
      <br> Il libro da lei consigliato è <i> ''A riveder le stelle'', di Aldo Cazzullo</i>: un libro sul più grande poeta nella storia dell'umanità, Dante, sulla nascita della nostra identità nazionale, per essere consapevoli di chi siamo e quanto valiamo. </li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Adriana:</strong> legge un po' tutti i generi e le piace cambiare spesso.
      <br> Il libro da lei consigliato è <i> ''Il figlio perduto'', di C.L. Taylor</i>: un thriller che mette a nudo le difficoltà, spesso drammatiche, di crescere figli adolescenti, e che inquieta per il suo fondo di verità e umanità. </li>
      <br>

      <li><img src='immagini/book1.png' class='book'><strong> Pia:</strong> i generi che preferisce leggere sono i romanzi e thriller. 
      <br> Il libro da lei consigliato è <i> ''Tre'', di Valerie Perrin</i>: un mix tra un giallo ed un romanzo, racconta la storia di tre amici che si conoscono fin dalle elementari e si ripromettono di lasciare la provincia in cui vivono per trasferirsi a Parigi. </li>
      <br> 

      <li><img src='immagini/book1.png' class='book'><strong> Lella:</strong> i generi che legge più frequentemente sono i romanzi ed i gialli.
      <br> Il libro da lei consigliato è <i> ''Enigma'', di R. Harris</i>: thriller ambientato nel 1943 che racconta la storia di un brillante matematico inglese che lavora in una base militare top secret per decifrare i codici segreti utilizzati dall'esercito tedesco ed ideati da una potente macchina.</li>
      <br> 

      <li><img src='immagini/book1.png' class='book'><strong> Cattia:</strong> lettrice appassionata di romanzi storici, saggi culturali e libri fantasy.
      <br> Il libro da lei consigliato è <i> ''L'ultimo elfo'', di Silvana De Mari</i>: romanzo di ambientazione fantasy dedicato ai ragazzi, racconta la storia di un bambino elfo rimasto l'unico della sua stirpe la quale è stata decimata dall'odio e dall'invidia degli Uomini. </li>
</ul><br>";

sidenavDX();

echo "</div></div>";

footer();

?>