@extends('layouts.app')

@section('content')
    <div class="container p-4">

        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** CUMPLE TU RETO **</h1>

        <table class="table table-striped table-hover table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE DEL RETO</th>
                    <th scope="col">CUMPLIR RETO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($retos as $r)
                <tr>
                    <th scope="row">{{ $r->id }}</th>
                    <td>{{ $r->nombre }}</td>
                    <td class="from-group">
                        <a href="{{ route('retocumplido.create', $r) }}" class="btn btn-primary">Cumplir</a>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('js')

    @if (session('deleted') == 'ok')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El Tipo de Persona ha sido eliminada',
                showConfirmButton: false,
                timer: 1500
            })

        </script>
    @endif



    <script>
        $('.eliminarItem').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Desea eliminar?',
                text: "Si lo haces no se podra revertir!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Continuar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });

    </script>

@endsection
