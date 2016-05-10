@extends('layouts.admin')

	@include('alerts.request')

@section('content')

	{!!Form::model($user, ['route'=> ['user.update', $user->id], 'method'=>'PUT'])!!}
		@include('user.forms.user')
		{!!Form::submit('Atualizar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	

@stop