angular.module("listaTelefonica").controller("controllerFormulario", function($scope, $http) {
    $scope.criterioDeBusca = '';

    //read
    getInfo();
    function getInfo(){
        $http.post('api/read.php').success(function(data){
            $scope.names = data;
        });
    };

    //delete
    $scope.deleteInfo = function(info){
        $http.post('api/delete.php',{"del_id":info.idcontatos}).success(function(data){
            if (data == true) {
                getInfo();
            }
        });
    };

    //insert
    $scope.insertInfo = function(info){
        $http.post('api/insert.php',{"nome":info.nome,"telefone":info.telefone,"data":info.data,"operadora":info.operadora}).success(function(data){
            if (data == true) {
                getInfo();
            }
        });
    };
});
