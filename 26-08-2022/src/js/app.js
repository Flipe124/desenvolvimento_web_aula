var app = angular
  .module('myapp', [
    'ui.router'
  ]);

// Definindo Rotas
app.config(function($stateProvider, $urlRouterProvider) {
  
  $urlRouterProvider.otherwise('/');
  
  $stateProvider
    .state('home', {
      url: '/',
      templateUrl: './pages/home.html',
      controller : function($scope){
        $scope.message = 'Teste da home';
      }
      // controller: 'HomeController'
    })
    .state('about', {
      url: '/about',
      templateUrl: './pages/about.html',
      controller: 'AboutController'
    })
    .state('contact', {
      url: '/contact',
      templateUrl: './pages/contact.html',
    //   controller: 'ContactController'
    })

    .state('contact-edit', {
        url: '/contact-edit/:cd',
        templateUrl: './pages/contact.html',
        controller: 'ContactController'
      })
})

app.controller('AboutController', function($scope){
    $scope.message = "Teste maroto"
})

app.controller('ContactController', function($scope, $http, $stateParams){
    $http.get(`https://viacep.com.br/ws/${$stateParams.cd}/json`)
    .then(function(res){
        $scope.data = res.data;
    })
})