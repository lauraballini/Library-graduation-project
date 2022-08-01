<?php
//RICORDARSI DI APRIRE E CHIUDERE BODY IN HTML 

//connessione db
function conn() {
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password, 'biblioteca');
    if (!$conn) {
        die ('Connection failed: ' . mysqli_connect_error());
    } return $conn;
}

//html header
function head() {
    echo "<!DOCTYPE html>
    <html lang='it'>
    <head>
    <title>Biblioteca Civica di Livorno Ferraris</title>
    
    <meta charset='UTF-8' />

    <meta name='keywords' content='Biblioteca, Biblioteca Civica, Livorno Ferraris'>
	<meta name='description' content='Sito web biblioteca civica Livorno Ferraris'>
	<meta name='author' content='Laura Ballini'>
	
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='style.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js'></script>

  </head>";
}

//ricordarsi di inserire il body con echo

//html headernav dopo login 
function headernavLogin() {
  echo "<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>

  <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>                        
    </button>
    <a href='biblioteca.php'> <img src='immagini/logo.png' id='logo'></a>
  </div>

  <div class='collapse navbar-collapse' id='myNavbar'>
    <ul class='nav navbar-nav'>
      <li><a href='biblioteca.php'>Home</a></li>
      <li><a href='catalogo_biblio.php'>Libri</a></li>
      <li><a href='contatti_biblio.php'>Contatti</a></li>
    </ul>";

    if(isset($_SESSION['autorizzato']) and $_SESSION['autorizzato'] === 1){
      if(isset($_SESSION['admin']) and $_SESSION['admin'] === 1){
          echo "<ul class='nav navbar-nav navbar-right'>
          <li><a href='admin.php'><span class='glyphicon glyphicon-home'></span> Admin</a></li>
          <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Esci</a></li>
          </ul>";
      }
      else {
        echo"<ul class='nav navbar-nav navbar-right'>
        <li><a href='personal.php'><span class='glyphicon glyphicon-home'></span> Area personale</a></li>
        <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Esci</a></li>
        </ul>".(isset($_session['utente']));
      }
    } else {
      echo "<ul class='nav navbar-nav navbar-right'>
      <li><a href='accedi_biblio.php'><span class='glyphicon glyphicon-log-in'></span> Accedi</a></li>
      <li><a href='registrati_biblio.php'><span class='glyphicon glyphicon-edit'></span> Registrati</a></li>
    </ul>";
    }
    
    echo "</div>
    </div>
    </nav>";

}


//html colonna sx
function sidenavSX() {
    echo "<div class='col-sm-2 sidenav'>
      <p><a href='volontari_biblio.php'>I volontari</a></p>
      <hr class='hr'>
      <p><a href='servizi_biblio.php'>I servizi</a></p>
      <hr class='hr'>
      <p><a href='https://www.comune.livornoferraris.vc.it'>Comune di Livorno Ferraris</a></p>
    </div>
    <div class='col-sm-8 text-left'>";
}

//html colonna sx accedi + registrati 
function sidenav() {
  echo "<div class='col-sm-2 sidenav'>
        </div>
        <div class='col-sm-8 text-center'>";
}

//html colonna dx biblioteca.html 
function sidenavBiblio() {
    echo "</div>
    <div class='col-sm-2 sidenav'>
    <!-- Servizio Interval per orario -->
    <p id='data'></p>
    <br>
    <h3> <strong>Novità ed Eventi</strong> </h3>
     <p> <strong> 24 settembre 2021: </strong> <br> <i style='color: red;'>Puliamo il mondo</i> </p> <br>
      <p> <strong> 23 ottobre 2021: </strong> <br> Premiazione del concorso letterario <i style='color: red;'>'Pagine di territorio. Storie di Uominie e Paesi.' </i> </p>
  </div>";
}


//html colonna dx
function sidenavDX() {
  echo "</div>
  <div class='col-sm-2 sidenav'>
          <!-- Servizio Interval per orario -->
          <p id='data'></p>
        </div>";
}

//html footer
function footer() {
    echo "<footer class='container-fluid'>
    <p align='center'>Biblioteca Civica di Livorno Ferraris </p> <br>

    <div id='contatti'>
     <p><b> CONTATTI</b> <br>
      Piazza Galileo Ferraris, 1 <br>
      13046 Livorno Ferraris <br>
      biblioteca@comune.livornoferraris.vc.it <br>
      Tel. 0161.421229 <br>
      Fax. 0161.477770 </p>
    </div>

    <div id='social'>
      <p> <b>SEGUICI SU</b> </p>
       <a id='fb' href='https://www.facebook.com/Biblioteca-Civica-Livorno-Ferraris-106426621098805'> <img src='immagini/fb.png'> </a> 
       <a href='https://www.instagram.com/bibliotecalivornoferraris/'> <img src='immagini/ig.png'> 
    </div>

  </footer>
  <script src='js-angular.js' type='text/javascript'> </script>
  </body>
  </html>";
}

?>




