@extends('layouts.app')

@section('content')
    <div class="container boxed">
        <div class="row justify-content-center">
            <h1>Agregar Producto</h1>
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
            <form action="/products" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre Producto</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre del producto">
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Ingrese el precio del producto">
                </div>

                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="file" class="form-control-file" name="image" id="image" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <br>
                <br>
                <a href="{{ url('/products') }}">Ir Atrás</a>   
            </form>
        </div>
    </div>
@endsection