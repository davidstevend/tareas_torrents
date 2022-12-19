@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h3><b>REGISTRO</b></h3></center></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                   @include('auth.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
