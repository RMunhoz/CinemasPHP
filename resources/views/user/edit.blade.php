@extends('layouts.admin')

@section('content')

	@include('alerts.request')

	{!!Form::model($user, ['route'=> ['user.update', $user->id], 'method'=>'PUT'])!!}
		@include('user.forms.user')
		{!!Form::submit('Atualizar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	

@stop