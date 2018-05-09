var soccerApp = angular.module('soccerApp', []);

soccerApp.controller('IndexCtrl', function () {
  var vm = this;

  vm.inputTeam = null;

  vm.teams = [
    {name: 'Sport'},
    {name: 'São Paulo'},
    {name: 'Grêmio'}
  ];

  vm.addTeam = function(){
    vm.teams.push({name: vm.inputTeam});
    vm.inputTeam = null;
  }
})
