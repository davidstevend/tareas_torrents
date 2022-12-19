<div class="row">
	<!-- name -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('name', 'Nombre ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::text('name', null, ['class' => 'form-control  ', 'id' => 'name', 'required' => "required", 'autocomplete' => "off"]) }}
		</div>
	</div>
	<!-- name -->
	<!-- last_name -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('last_name', 'Apellido ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::text('last_name', null, ['class' => 'form-control  ', 'id' => 'last_name', 'required' => "required"]) }}
		</div>
	</div>
	<!-- last_name -->
	<!-- phone -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('phone', 'Telefono ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::text('phone', null, ['class' => 'form-control  ', 'id' => 'phone', 'required' => "required"]) }}
		</div>
	</div>
	<!-- phone -->
	<!-- email -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('email', 'Email ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::email('email', null, ['class' => 'form-control  ', 'id' => 'email', 'required' => "required"]) }}
		</div>
	</div>
	<!-- email -->
	<!-- status -->
	<div class="col-md-12 col-sm-12 col-xs-12" >
		<div class="form-group" >
			{{ Form::label('status', 'Estado ') }}
			<span style="color:red;">
				*
			</span>
			{{ Form::select('status',['1' => 'Activar', '0' => 'Desactivar'], ['class' => 'form-control  ', 'id' => 'status', 'required' => "required", 'placeholder' => 'Seleccione una opción']) }}
		</div>
	</div>
	<!-- status -->
	
</div>
<p> </p>


<!-- Botones -->

<div class="form-actions right">

	{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		
	<a href="{{ route('users.index') }}"><button type="button" class="btn btn-warning mr-1">
		Volver
	</button></a>			

</div>



