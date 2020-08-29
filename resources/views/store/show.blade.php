@extends('layouts.app')

@section('content')
<div class="container boxed">
    <div class="row">
        <div class="col-md-12">
            <h3>Detalle del producto</h3>
        </div>
    </div>
    <div class="row">
        @if($product)
            <div class="box-detalle card1">
                <img class="card-img-top" src="{{asset('storage/products/'.$product->image)}}" alt="Card image cap">
            </div>

            <div class="box-detalle-description">
                <p>{{ $product->name }}</p>
                <h4>Precio: ${{$product->price}}</h4>
                <hr>
                <p>{{$product->description}}</p>
                <a class="add_cart" href="#">Agregar al carrito</a>
            </div>
        @else
            <h3>Este producto no existe.</h3>
        @endif
    </div>

    <a href="{{ url('/store') }}">Ir Atrás</a> 
</div>
@endsection