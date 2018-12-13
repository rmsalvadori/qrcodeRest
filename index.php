<!DOCTYPE html>
<html>
<script src="js/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
Full Name: {{firstName}}  {{lastName}}


<button ng-click="mostra('abc')">
teste
</button>
{{1+1}}

{{firstName.substr(2)}}

<p ng-init="bla = firstName=='abc'" ng-show="firstName=='abc'">
{{bla}}

</p>

<table>
    <tbody>
    <tr ng-repeat="c in clientes track by $index">
        <td>{{$index}}</td>
        <td>{{c.id}}</td>
        <td>{{c.nome}}</td>
        <td ng-click="deletar($index)">deletar</td>
    </tr>
    </tbody>
</table>
</div>



<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {
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
</script>

</body>
</html>
