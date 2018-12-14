<?php require "/template/head.php"; ?>
<body>
<?php require "/template/menu.php"; ?>
<script src="controllers/adminClientes.js"></script>

<div class="container" ng-app="eat" ng-controller="adminClientes">
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
			<h1>Clientes</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 white-background">
		<table class="table">
			<thead>
			<tr>
				<th>Nome</th>
				<th>Excluir</th>
			</tr>
			</thead>
			<tbody>
			<tr ng-repeat="c in clientes">
				<td>{{c.nome}}</td>
				<td ng-click="deletar(c.id)"> x </td>
			</tr>
			</tbody>
		</table>
		</div>
	</div>
</div>


</body>
<?php require "/template/footer.php"; ?>
