angular.module("listaTelefonica").config(function ($routeProvider) {
    $routeProvider.when("/contatos", {
        templateUrl: "view/contatos.html",
        controller: "listaTelefonicaCtrl",
        resolve: {
            contatos: function (contatosAPI) {
                return contatosAPI.getContatos();
            },
            operadoras: function (operadorasAPI) {
                return operadorasAPI.getOperadoras();
            }
        }
    });
    $routeProvider.when("/formulario", {
        templateUrl: "view/formulario.html",
        controller: "controllerFormulario",
        resolve: {
            operadoras: function (operadorasAPI) {
                return operadorasAPI.getOperadoras();
            }
        }
    });
    $routeProvider.otherwise({redirecTo: "/contatos"});
});
