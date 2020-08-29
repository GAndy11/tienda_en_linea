@extends('layouts.app')

@section('content')
<div class="container-fluid">
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
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Id</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td style="width: 20px"><a href="{{ url('/products/'.$product->id) }}"><img src="{{asset('storage/images/search_logo.png')}}" width="20" ></a></td>
                                <td style="width: 20px"><a href="{{ url('/products/'.$product->id).'/edit' }}"><img src="{{asset('storage/images/edit_logo.png')}}" width="20" ></a></td>
                                <th scope="row">{{ $product->id }}</th>
                                <td>
                                    <div style="width:100px;">
                                        <img src="{{ asset('storage/products/'.$product->image) }}" alt=""  width="80" height="80">
                                    </div> 
                                </td>
                                <td>{{ $product->name}}</td>
                                <td>{{ $product->price}}</td>
                                <th scope="row">{{ $product->state == 1 ?  'Activo ' : 'Inactivo' }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            @else
                <h3>No hay productos para mostrar.</h3>
            @endif
            
        </div>
    </div>
</div>
@endsection