@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <h4>No olvides visitar tu carrito de compras para terminar el pedido.</h4>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3">
            <span class="store-titu">
                Filtros
            </span>
        </div>
        <div class="col-md-9">
            <span class="store-titu">
                Productos
            </span>
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
                        <br>
                        <h5>No hay productos para mostrar.</h5>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        
    </div>
</div>
@endsection