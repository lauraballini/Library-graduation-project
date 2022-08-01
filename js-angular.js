//PAGINA REGISTRATI: validazione form di registrazione + data e ora
var app = angular.module('MyApp', []);
app.controller('ValidaRegistra', function($scope) {
    $scope.birth = 'dd/mm/aaaa';
	$scope.email = 'example@gmail.com';
});

//PAGINA ACCEDI: validazione form accedi + data e ora
var app = angular.module('MyApp1', []);
app.controller('ValidaAccedi', function($scope) {
	$scope.email = 'example@gmail.com';
});


//PAGINA SERVIZI: data e ora + ng-show dettagli servizi
var app = angular.module('MyApp6', []);
app.controller('tempo', function($scope, $interval) {
	$scope.orario = new Date().toLocaleTimeString();
	$interval(function() {
	$scope.orario = new Date().toLocaleTimeString(); }, 1000);
});	
app.controller('servizi', function($scope) {
	$scope.showMe = false;
	$scope.eventi = function() {
		$scope.showMe = !$scope.showMe;
	};
	$scope.progetti = function() {
		$scope.showMe1 = !$scope.showMe1;
	};
	$scope.showMe2 = false;
	$scope.lingua = function() {
		$scope.showMe2 = !$scope.showMe2;
	}
});	


//impostazione data
var data = new Date();

var week = new Array (6);
week[0]="Domenica";
week[1]="Lunedì";
week[2]="Martedì";
week[3]="Mercoledì";
week[4]="Giovedì";
week[5]="Venerdì";
week[6]="Sabato";

var gg = data.getDate();
var mm = data.getMonth()+1;
var aaaa = data.getFullYear();

x = week[data.getDay()] + " " + gg + "/" + mm + "/" + aaaa;
document.getElementById("data").innerHTML=x;