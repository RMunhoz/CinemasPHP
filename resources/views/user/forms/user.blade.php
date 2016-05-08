	<div class="form-group">
		{!!Form::label('Nome:')!!}
		{!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nome do Usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Email:')!!}
		{!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Password:')!!}
		{!!Form::password('password',  ['class'=>'form-control', 'placeholder'=>'Password'])!!}
	</div>