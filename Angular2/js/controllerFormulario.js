angular.module("listaTelefonica").controller("controllerFormulario", function($scope, $location, contatosAPI, serialGenerator, operadoras){
    $scope.operadoras = operadoras.data;

    $scope.adicionarContato = function(contato){
        contato.serial = serialGenerator.generate();
        contatosAPI.saveContatos(contato).success(function (data){
            delete $scope.contato;
            $scope.contatoForm.$setPristine();
            $location.path("/contatos");
        });
    };
});
