@extends('layouts.app')

@section('content')
    <div class="container boxed">
        <div class="row justify-content-center">
            <h1>Editar Usuario</h1>
        </div>
        <div class="col-md-12">
            @if($errors->any())
                <div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
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
                    <select class="form-control" id="state" name="state">
                        @foreach ($states as $stateKey => $stateVal)
                            <option value="{{ $stateKey }}" {{ $user->state == $stateKey ? 'selected' : '' }}>{{ $stateVal }}</option>
                        @endforeach
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