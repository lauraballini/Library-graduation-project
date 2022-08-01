<?php

session_start();

include('function.php');

conn();
head();

echo "<body ng-app='MyApp1'>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
    <div class='row content accedi'>";

sidenav();

?>

<html>
<h1>Accedi</h1>
          <p>Inserisci le tue credenziali per accedere alla tua area personale.
              <br><br> *Campi obbligatori</p>
          <hr>

          <form action="login.php" method="post" id="accedi" name="accedi" ng-controller="ValidaAccedi" novalidate>
            <label for="txt"> *Email: </label> <br>
            <input type="email" name="email" id="email" ng-model="email" required> 
                <span style="color:red" ng-show="accedi.email.$dirty && accedi.email.$invalid">
              <span ng-show="accedi.email.$error.required"> Campo obbligatorio </span> 
              <span ng-show="accedi.email.$error.email"> Email non valida </span> 
             </span> <br><br>
          
           <label for="txt4"> *Password: </label> <br>
           <input type="password" name="pwd" id="pwd" ng-model="pwd" required> 
             <span style="color:red" ng-show="accedi.pwd.$dirty && accedi.pwd.$invalid">
           <span ng-show="accedi.pwd.$error.required"> Campo obbligatorio </span>
           </span><br><br>
            
            <input type="submit" value="Accedi" name="submit"> <br><br><br>
            </form>
</html>            

<?php

sidenavDX();

echo "</div></div>";

footer();

?>

