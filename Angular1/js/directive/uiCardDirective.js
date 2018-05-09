angular.module("soccerApp").directive("uiCardLista", function (){
    return {
        controller: function ($scope, $element, $attrs) {
            $scope.teste1 = {info1: '1asfsafasfasf',info2: '1asfsaasf',info3: '1sfsafsafsaf'};
            $scope.teste2 = {info1: '2asfsafasfasf',info2: '2asfsaasf',info3: '2sfsafsafsaf'};
            $scope.teste3 = {info1: '3asfsafasfasf',info2: '3asfsaasf',info3: '3sfsafsafsaf'};
        }
    };
});

angular.module("soccerApp").directive("uiCard", function (){
    return {
        templateUrl: "view/card.html",
        replace: true,
        restrict: "E",
        require: "^uiCardLista",
        scope: {
            arrayAll: "@teste1"
        }
    };
});
