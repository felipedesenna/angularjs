angular.module("listaTelefonica").config(function ($routeProvider) {
    $routeProvider.when("/contatos", {
        templateUrl: "view/contatos.html",
        controller: "controllerFormulario"
    });
    $routeProvider.when("/formulario", {
        templateUrl: "view/formulario.html",
        controller: "controllerFormulario"
    });
    $routeProvider.when("/detalhesContato/:id", {
        templateUrl: "view/detalhesContato.html",
        controller: "detalhesCtrl",
        resolve: {
            contato: function (contatosAPI, $route) {
                return contatosAPI.getContato($route.current.params.id);
            }
        }
    });
    //$routeProvider.otherwise({redirectTo: "/contatos"});
});
