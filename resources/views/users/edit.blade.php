@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Editar Usuario</h1>
        </div>
        <div class="col-md-12">
            <form action="POST">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="email" class="form-control" id="name" value="{{ $user->name }}" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  aria-describedby="emailHelp" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar    </button>
            </form>
        </div>
    </div>
@endsection