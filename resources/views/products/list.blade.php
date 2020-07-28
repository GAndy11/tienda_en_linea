@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Listado de Productos para Administración.</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a class="new-product" href="{{ url('/products/create') }}">
                Crear nuevo
            </a>
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-md-12">
            @if(count($products) > 0)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->name}}</td>
                                <td>{{ $product->state == 1 ?  'Activo ' : 'Inactivo' }}</td>
                                <td><a href="{{ url('/products/'.$product->id).'/edit' }}">Editar</a></td>
                                <td><a href="#">Eliminar</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3>No hay productos para mostrar.</h3>
            @endif
            
        </div>
    </div>
</div>
@endsection