@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('retocumplido.create') }}" method="post">

            <label for="">Nombre del reto:</label>
            <label id="nombre">{{ $reto->nombre }}</label>

        </form>
    </div>

@endsection
