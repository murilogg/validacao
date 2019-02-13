<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		body{ padding: 20px; }
	</style>
</head>
<body>
	<main role="main">
		<div class="row">
			<div class="container col-md-8 offset-md-2">
				 <div class="card-border">
				 	<div class="card-header">
				 		<div class="card-title">
				 			Cadastro de Cliente
				 		</div>
				 	</div>
				 	<div class="card-body">
				 		<form action="/cliente" method="POST">
				 			@csrf
				 			<div class="form-group">
				 				<label for="nome">Nome do Cliente</label>
				 				<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Cliente">
				 			</div>
				 			<div class="form-group">
				 				<label for="idade">Idade do Cliente</label>
				 				<input type="number" name="idade" id="idade" class="form-control" placeholder="Idade do Cliente">
				 			</div>
				 			<div class="form-group">
				 				<label for="endereco">Endereço do Cliente</label>
				 				<input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço do Cliente">
				 			</div>
				 			<div class="form-group">
				 				<label for="email">E-mail do Cliente</label>
				 				<input type="text" name="email" id="email" class="form-control" placeholder="E-mail do Cliente">
				 			</div>
				 			<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
				 			<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
				 		</form>
				 	</div>
@if($errors->any())
                    <div class="card-footer">
    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                        	{{ $error }}
                        </div>
    @endforeach
                    </div>
@endif
				 </div>
			</div>
			
		</div>
	</main>
	<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

</body>
</html>