@extends('layouts.plantilla')
@section('contenido')
    <!-- Zero configuration table -->
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            @if(Auth::user()->isAdmin())
                            TODAS LAS TAREAS DE LA PLATAFORMA
                            @else
                            MIS TAREAS
                            
                        @endif | <a href="{{ route('tasks.create') }}"><button type="button"
                                    class="btn btn-icon btn-info btn-sm" data-toggle="tooltip"
                                    data-original-title="Crear Nuevo"><i class="la la-plus"></i></button></a> </h4>

                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard table-responsive">
                            {{-- INICIO DE TABLA --}}
                            <table class="table table-striped table-bordered zero-configuration" id="tabla_user">
                                <thead>
                                    <tr>
                                        <th width="10px">ID</th>
                                        @if(Auth::user()->isAdmin()) <th>PROPIETARIO </th>@endif
                                        <th>TAREA </th>
                                        <th>FECHA DE CADUCIDAD </th>
                                        <th width="17px">
                                            <center> TERMINADA </center>
                                        </th>
                                        <th>
                                            <center>OPCIONES</center>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $ta)
                                        <tr>
                                            <td>{{ $ta->id }}</td>
                                            @if(Auth::user()->isAdmin())<td>{{ $ta->name }} {{ $ta->last_name }}</td>@endif
                                            <td>{{ $ta->task }} </td>
                                            <td>{{ date('d/m/Y', strtotime($ta->expiration_date)) }}</td>
                                            <td>{{ $ta->finished }}</td>
                                            <td>
                                                <a href="" data-target="#modal-show-{{ $ta->id }}"
                                                    data-toggle="modal">
                                                    <button type="button"
                                                        class="btn btn-icon btn-primary btn-sm box-shadow-1"
                                                        data-toggle="tooltip" data-original-title="Ver"><i
                                                            class="la la-eye"></i></button></a>
                                                <a href="{{ route('tasks.edit', $ta->id) }}">
                                                    <button type="button"
                                                        class="btn btn-icon btn-success btn-sm box-shadow-1"
                                                        data-toggle="tooltip" data-original-title="Editar"><i
                                                            class="la la-pencil"></i></button>
                                                </a>
                                                <a data-target="#modal-delete-{{ $ta->id }}" data-toggle="modal">
                                                    <button type="button"
                                                        class="btn btn-icon btn-danger btn-sm box-shadow-1"
                                                        data-toggle="tooltip" data-original-title="Eliminar Tarea"><i
                                                            class="la la-check"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('tasks.modal')
                                        @include('tasks.show')
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- FIN TABLA --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
@endsection
@section('js')
@endsection
