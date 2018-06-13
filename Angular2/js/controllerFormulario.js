angular.module("listaTelefonica").controller("listaTelefonicaCtrl", function($scope, $http) {
    $http.get("api/conexao.php").then(function (response) {
        $scope.names = response.data.records;
    });
});
