@extends('layouts.app')

@section('content')
    <div class="container boxed">
        <div class="row justify-content-center">
            <h1>Visualizar Usuario</h1>
        </div>
        <div class="col-md-12">
            @if($user)
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $user->email }}" readonly>
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ $user->stateName }}" readonly>
                </div>
                <a href="{{ url('/users') }}">Ir Atrás</a>   
            @else
                <h3>Este Usuario no existe</h3>
            @endif
        </div>
    </div>
@endsection