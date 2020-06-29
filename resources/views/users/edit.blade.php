@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Editar Usuario</h1>
        </div>
        <div class="col-md-12">
            <form action="/users/{{ $user->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <br>
                <br>
                <a href="{{ url('/users') }}">Ir Atrás</a>   
            </form>
        </div>
    </div>
@endsection