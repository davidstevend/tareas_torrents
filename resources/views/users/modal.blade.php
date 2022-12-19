 <div class="modal animated bounceInRight text-left" id="modal-delete-{{ $us->id }}" tabindex="-1"
 	role="dialog" aria-labelledby="myModalLabel49" aria-hidden="true">
 	<div class="modal-dialog" role="document" >
 		<div class="modal-content">
 			<div class="modal-header bg-danger white">
 				<h4 class="modal-title" id="myModalLabel49">Desactivar Usuario</h4>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<p>Confirme si desea Desactivar el Usuario</p>
 			</div>
 			<div class="modal-footer">
 				{!! Form::open(['route' => ['users.destroy', $us->id], 'method' => 'DELETE']) !!}
 				<button  class="btn btn-outline-primary">Desactivar</button>
 				<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cerrar</button>
 				
 				{!! Form::close() !!}
 			</div>
 		</div>
 	</div>
 </div>