@extends('layouts.admin')

	@include('alerts.success')

@section('content')
	
	<div class="users">
		<table class='table'>
			<thead>
				<th>Nome Completo</th>
				<th>Email</th>
				<th>Action</th>
			</thead>
			@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					{!!link_to_route('user.edit', $title = 'Edit', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}
					{!!link_to_route('user.destroy', $title = 'Delete', $parameters = $user->id, 
						$attributes = ['class'=>'btn btn-danger']);!!}

				</td>
			</tbody>	
			@endforeach
		</table>
		{!! $users->render() !!}
	</div>		

	

@stop

@section('scripts')
	{!!Html::script('js/script3.js')!!}
@stop