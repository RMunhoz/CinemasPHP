@extends('layouts.admin')

@section('content')

	@include('genero.modal')

	<div id="msj-success" class="alert alert-success alert dismissible" role="alert" style="display:none">
		<strong>Genero alterado com sucesso!</strong>
	</div>

	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Action</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>

@stop

@section('scripts')
	{!!Html::script('js/script2.js')!!}
@stop