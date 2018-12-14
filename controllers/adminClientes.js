var app = angular.module('eat', []);
app.controller('adminClientes', function($scope,$http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";

    $scope.mostra = function ($p) {
        $scope.firstName = $p;
    }

    $http.get('rest').then(function ($response) {
        $scope.clientes = $response.data;
    });

    $scope.deletar = function ($index) {
        delete $scope.clientes[$index + 1];
    }
    });
