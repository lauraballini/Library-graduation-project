<?php

session_start();

include('function.php');

conn();
head();

echo "<body ng-app='MyApp'>";

headernavLogin();

echo "<div class='container-fluid text-center'>    
    <div class='row content registrati'>";

sidenav();

echo "<h1>Registrati</h1>
      <p>Inserisci i tuoi dati per registrarti nell'elenco utenti della nostra biblioteca.
      <br><br> *Campi obbligatori. </p>
      <hr>"

?>

 <!-- ng-app e ng-controller per validazione form di registrazione -->
 <form action="sign.php" method="post" id="registra" name="registra" ng-controller="ValidaRegistra" novalidate>
      <input type='hidden' name='tipo' value='user'>
      <label for="txt1"> *Nome: </label> <br>
      <input type="text" name="name" id="name" ng-model="name" required> 
       <span style="color:red" ng-show="registra.name.$dirty && registra.name.$invalid">
       <span ng-show="registra.name.$error.required"> Campo obbligatorio </span>
       </span> <br>
      <br>
      <label for="txt2"> *Cognome: </label> <br>
      <input type="text" name="cogn" id="cogn" ng-model="cogn" required>
          <span style="color:red" ng-show="registra.cogn.$dirty && registra.cogn.$invalid">
        <span ng-show="registra.cogn.$error.required"> Campo obbligatorio </span>
       </span><br>
       <br>
       <label for="txt3"> *Data di nascita: </label> <br>
       <input type="date" name="birth" id="birth" ng-model="birth" required>
           <span style="color:red" ng-show="registra.birth.$dirty && registra.birth.$invalid">
         <span ng-show="registra.birth.$error.required"> Campo obbligatorio </span>
        </span><br> 
        <br>
        <label for="txt4"> *Città di residenza: </label> <br>
        <input type="text" name="residenza" id="residenza" ng-model="residenza" required>
            <span style="color:red" ng-show="registra.residenza.$dirty && registra.residenza.$invalid">
          <span ng-show="registra.residenza.$error.required"> Campo obbligatorio </span>
         </span><br>  
         <br>
         <label for="txt5"> *Numero di telefono: </label> <br>
         <input type="number" name="phone" id="phone" ng-model="phone" required>
             <span style="color:red" ng-show="registra.phone.$dirty && registra.phone.$invalid">
           <span ng-show="registra.phone.$error.required"> Campo obbligatorio </span>
          </span><br>  
          <br>
         <label for="txt6"> *Email: </label> <br>
         <input type="email" name="email" id="email" ng-model="email" required> 
             <span style="color:red" ng-show="registra.email.$dirty && registra.email.$invalid">
           <span ng-show="registra.email.$error.required"> Campo obbligatorio </span> 
           <span ng-show="registra.email.$error.email"> Email non valida </span> 
          </span> <br> 
          <br>
        <label for="txt7"> *Password: </label> <br>
        <input type="password" name="pwd" id="pwd" ng-model="pwd" required> 
          <span style="color:red" ng-show="registra.pwd.$dirty && registra.pwd.$invalid">
        <span ng-show="registra.pwd.$error.required"> Campo obbligatorio </span>
        </span><br><br>

        <input type="submit" id="submit" value="Registrati" name="submit">

    </form>

<?php

sidenavDX();

echo "</div></div>";

footer();

?>

