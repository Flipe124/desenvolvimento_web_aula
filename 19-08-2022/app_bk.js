var app = angular.module("Projeto1", []);
app.controller("PrimeiroController", function ($scope) {
  $scope.msg = "Olá, esse é o meu projeto em angularjs";
  let msg = $scope.msg;

  $scope.uf = ['PR', 'RJ', 'SP'];
  $scope.ufs = [
    {uf: "PR"},
    {uf: "SC"},
    {uf: "RJ"}
]

  $scope.verificaValor = function (valor) {
    if (valor > 0) {
      $scope.msg = "O número digitado é positivo!";
    } else if (valor < 0) {
      $scope.msg = "O número digitado é negativo!";
    } else {
      $scope.msg = "O numero digitado é zero!";
    }
  };
  console.log(msg);
});
