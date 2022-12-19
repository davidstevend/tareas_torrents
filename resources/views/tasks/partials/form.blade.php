<div class="row">
	<!-- task -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('task', 'Tarea ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::text('task', null, ['class' => 'form-control  ', 'id' => 'task', 'required' => "required", 'autocomplete' => "off"]) }}
		</div>
	</div>
	<!-- task -->
	<!-- description -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('description', 'Descripción ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::textarea('description', null, ['class' => 'form-control  ', 'id' => 'description', 'required' => "required"]) }}
		</div>
	</div>
	<!-- description -->
	<!-- expiration_date -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('expiration_date', 'Fecha de Caducidad ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::date('expiration_date', null, ['class' => 'form-control  ', 'id' => 'expiration_date', 'required' => "required"]) }}
		</div>
	</div>
	<!-- expiration_date -->
	
	<!-- finished -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('finished', 'TERMINADA ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::select('finished',['NO' => 'NO', 'SI' => 'SI'],'NO', ['class' => 'form-control  ', 'id' => 'finished', 'required' => "required", 'placeholder' => 'Seleccione una opción']) }}
		</div>
	</div>
	<!-- finished -->
	
</div>
<p> </p>

{{ Form::hidden('user_id', Auth::user()->id) }}
{{ Form::hidden('date', now()) }}



<!-- Botones -->

<div class="form-actions right">

	{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		
	<a href="{{ route('tasks.index') }}"><button type="button" class="btn btn-warning mr-1">
		Volver
	</button></a>			

</div>



