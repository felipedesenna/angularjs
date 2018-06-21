angular.module("listaTelefonica").controller("controllerFormulario", function($scope, $http) {
    $http.get("api/conexao.php").then(function (response) {
        $scope.names = response.data.records;
    });

    $scope.insertDados = function(info){
        $http.post('api/insert.php',{"Nome":info.Nome,"Telefone":info.Telefone,"Data":info.Data,"Operadora":info.Operadora}).success(function(data){
            /*if (data == true) {
                getInfo();
            }*/
        });
    };
});
