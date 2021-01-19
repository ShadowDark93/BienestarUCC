@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** CUMPLE EL RETO #
            {{ $reto[0]->id }} **
        </h1>

        <form action="" method="post">
            @csrf
            <div class="form-group">
                <h2 align="center" style="text-transform: uppercase;" for="">{{ $reto[0]->nombre }}</h2>

                <p style="text-align: justify" class="p3">{{ $reto[0]->descripcion }}</p>

                @if (!empty($reto[0]->link))

                    <span>Más información: {{ $reto[0]->link }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="nombre">Respuesta pregunta </label>
                <input id="descripcion" type="hidden" name="descripcion" readonly tabindex="2" value="{{ $reto[0]->id }}"></input>
                <textarea class="form-control" placeholder="Escribe tu respuesta"></textarea>
            </div>
            <div class="form-group">
                <a href="{{ route('retos.index') }}" class="btn btn-primary">Volver</a>
                <button type="submit" class="btn btn-success">Enviar Respuesta</button>
            </div>


        </form>
    </div>

@endsection
