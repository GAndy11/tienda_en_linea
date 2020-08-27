@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <h4>No olvides visitar tu carrito de compras para terminar el pedido.</h4>
    </div>
    <br>
    <div class="row">
        
        <div class="col-md-9">
            <span class="store-titu">
                Productos
            </span>
            <br>
            <div class="row showcase-store">
                @if(count($products) > 0)
                    @foreach ($products as $product)
                        <div class="card card-producto" style="width: 14rem;">
                            <img class="card-img-top" src="{{asset('storage/products/'.$product->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?=$product->name;?></h5>
                                <p class="card-text">Precio: $<?=$product->price;?></p>
                                <a class="btn-view-product" href="{{ url('/store/'.$product->id) }}" class="btn btn-primary">Ver Producto</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <br>
                    <h5>No hay productos para mostrar.</h5>
                @endif
                
            </div>
        </div>
        <div class="col-md-3">
            <span class="store-titu">
                Filtros
            </span>
            <br>
            <br>
            <button class="btn btn-primary">Aplicar Filtros</button>
        </div>
    </div>
    <br>
    <div class="row">
        
    </div>
</div>
@endsection