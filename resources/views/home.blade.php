@extends('layouts.app')

@section('content')
<div class="container-fluid home-page-container">
    <div class="row">
        <div class="col-md-6">
            <a href='https://www.freepik.es/vectores/negocios'>
                <img class="image-landing" src="images/landing.jpg" alt="">
                Vector de Negocios creado por stories - www.freepik.es
            </a>            
        </div>
        <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="col-md-12 landing-title">
                    <blockquote class="blockquote">
                        <h2 class="titu-landing">Bienvenido!</h2>
                        <footer class="blockquote-footer">Todo lo que necesitas <cite title="Source Title">"En un solo Lugar!"</cite></footer>
                    </blockquote>
                    <p class="home-description">
                        Nuestra tienda tiene productos de primera necesidad, electrodomesticos y entretenimiento. No te pierdas la oportunidad de obtener productos
                        de excelente calidad a unos precios sumamente competitivos
                    </p>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            
                            <a class="landing-btns" href="{{ url('/store') }}">
                                Tienda
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="landing-btns" href="{{ url('/profile') }}">
                                Mi Cuenta
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="landing-btns" href="{{ url('/promo') }}">
                                Promociones
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
