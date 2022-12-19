 <div class="modal animated pulse text-left" id="modal-show-{{ $ta->id }}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel49" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header bg-info white">
                 <h4 class="modal-title" id="myModalLabel49">TAREA</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form-body">

                     <P> </P>
                     <div class="row">
                        <!-- task -->
                        <div class="col-md-12 col-sm-12 col-xs-12" >
                            <div class="form-group" >
                                {{ Form::label('task', 'Tarea ') }}
                                <span style="color:red;">
                                    *
                                </span>
                                {{ Form::text('task', $ta->task, ['class' => 'form-control  ', 'id' => 'task', 'disabled', 'autocomplete' => "off"]) }}
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
                                {{ Form::textarea('description', $ta->description, ['class' => 'form-control  ', 'id' => 'description', 'disabled']) }}
                            </div>
                        </div>
                        <!-- description -->
                        <!-- date -->
                        <div class="col-md-6 col-sm-12 col-xs-12" >
                            <div class="form-group" >
                                {{ Form::label('date', 'Fecha de Creación ') }}
                                <span style="color:red;">
                                    *
                                </span>
                                {{ Form::date('date', $ta->date, ['class' => 'form-control  ', 'id' => 'date', 'disabled']) }}
                            </div>
                        </div>
                        <!-- date -->
                        <!-- expiration_date -->
                        <div class="col-md-6 col-sm-12 col-xs-12" >
                            <div class="form-group" >
                                {{ Form::label('expiration_date', 'Fecha de Caducidad ') }}
                                <span style="color:red;">
                                    *
                                </span>
                                {{ Form::date('expiration_date', $ta->expiration_date, ['class' => 'form-control  ', 'id' => 'expiration_date', 'disabled']) }}
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
                                {{ Form::text('finished',$ta->finished, ['class' => 'form-control  ', 'id' => 'finished', 'disabled', 'placeholder' => 'Seleccione una opción']) }}
                            </div>
                        </div>
                        <!-- finished -->
                        
                    </div>
                    <p> </p>
                    <!-- Botones -->                  
             <div class="modal-footer">

                 <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cerrar</button>


             </div>
         </div>
     </div>
 </div>
