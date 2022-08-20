var app = angular.modele('heranca', []);

app.controller('PaiController', ['$scope', function($scope){
  $scope.nome = 'Felipe';
  $scope.turno = 'mannhã';

}])

app.controller('FilhoController', ['$scope', function($scope){
  $scope.nome = "Frederico";
  $scope.turno = "Noite";
}])
