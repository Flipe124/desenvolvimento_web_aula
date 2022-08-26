var app = angular.module('myapp', ['ui.router']);

//DEFININDO ROTAS
app.config(function ($stateProvider, $urlRouterProvider){
    $stateProvider
    .state('home', {
        url: '/',
        template: '<h3>teste</h3>'
    });
});