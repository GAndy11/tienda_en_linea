@extends('layouts.app')

@section('content')
    <div class="container boxed">
        <div class="row justify-content-center">
            <h1>Visualizar Producto</h1>
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
            <form action="/products/{{ $product->id }}" method="POST">
                @csrf
                @method('put')
                @if($product)   
                    <div class="form-group">
                        <label for="name">Nombre producto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" >
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="price" class="form-control" id="price" name="price"value="{{ $product->price }}" >
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="description" class="form-control" id="description" name="description"value="{{ $product->description }}" >
                    </div>
                    <div class="form-group">
                        <label for="state">Estado</label>
                        
                        <select class="form-control" id="state" name="state">
                            @foreach ($states as $stateKey => $stateVal)
                                <option value="{{ $stateKey }}" {{ $product->state == $stateKey ? 'selected' : '' }}>{{ $stateVal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="box-detalle card1">
                        <img class="card-img-top" src="{{asset('storage/products/'.$product->image)}}" alt="Card image cap">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <br>
                    <br>
                @else
                    <h3>Este producto no existe</h3>
                @endif
            </form>
            <a href="{{ url('/products') }}">Ir Atrás</a>   
        </div>
    </div>
@endsection 