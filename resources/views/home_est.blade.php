@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="row mt-4">
                    <img src="{{ asset('img/bucc1.png') }}" class="img-fluid rounded float-none mx-auto d-block" alt=""
                        align="center">
                </div>
                <br>
                <div class="row mt-4">
                    <img src="{{ asset('img/bucc2.png') }}" class="img-fluid rounded float-none mx-auto d-block"
                        alt="image fluid">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row mt-4">
                    <img src="{{ asset('img/b-ucc-logo.png') }}" class="img-fluid rounded float-none mx-auto d-block" alt=""
                        align="center">
                </div>
                <br>
                <p class="text-justify">
                    La Universidad Cooperativa de Colombia asume el Bienestar como todas aquellas acciones institucionales
                    encaminadas a promover el desarrollo integral de los miembros de la comunidad universitaria, que
                    impactan su calidad de vida, a través de servicios, acciones y programas suficientes, adecuados y
                    accesibles, que se desarrollan a través de líneas de trabajo, dinamizadas en las en las diferentes
                    dimensiones.
                </p>
                <p class="text-justify">
                    Partiendo de la situación actual, y bajos los lineamientos de la Dirección Nacional de Bienestar, y de
                    la misma manera ajustándonos a las necesidades de nuestra comunidad Universitaria, planteamos
                    estrategias que se fortalecen en el plan de Bienestar dándole continuidad a los procesos y aportando a
                    mantener la “Universidad Viva”, activando nuestro ADN solidario y consolidando un trabajo Multicampus.


                </p>
                <p class="text-justify">
                    A través del plan de Bienestar Universitario buscamos desarrollar competencias para la vida, generar
                    factores de protección, brindar orientación y acompañamiento a nuestra comunidad universitaria, buscando
                    la permanencia y éxito de cada uno de los actores que la conforman.
                </p>
            </div>
        </div>

    </div>
@endsection
