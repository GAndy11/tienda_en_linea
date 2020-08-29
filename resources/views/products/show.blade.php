@extends('layouts.app')

@section('content')
    <div class="container boxed">
        <div class="row justify-content-center">
            <h1>Visualizar Producto</h1>
        </div>
        <div class="col-md-12">
            @if($product)   
                <div class="form-group">
                    <label for="name">Nombre producto</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="price" class="form-control" id="price" name="price"value="{{ $product->price }}" readonly>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="description" class="form-control" id="description" name="description"value="{{ $product->description }}" readonly>
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ $product->state == 1 ?  'Activo ' : 'Inactivo' }}" readonly>
                </div>
                <div class="box-detalle card1">
                    <img class="card-img-top" src="{{asset('storage/products/'.$product->image)}}" alt="Card image cap">
                </div>
                
            @else
                <h3>Este producto no existe</h3>
            @endif
            <a href="{{ url('/products') }}">Ir Atrás</a>   
        </div>
    </div>
@endsection 