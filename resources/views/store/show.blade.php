@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detalle del producto</h3>
        </div>
    </div>
    <div class="row">
        @if($product)
            <div class="box-detalle card1">
                <img class="card-img-top" src="{{asset('storage/products/'.$product->image)}}" alt="Card image cap">

                <h3>{{ $product->name }}</h3>
                <h2>Precio: ${{$product->price}}</h2>
                <hr>
                <p>{{$product->description}}</p>
                <a href="#">Agregar al carrito</a>
            </div>
        @else
            <h3>Este producto no existe.</h3>
        @endif
    </div>
</div>
@endsection