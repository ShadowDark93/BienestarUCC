@extends('layouts.app')

@section('content')
    <div class="container p-4">

        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** RETOS **</h1>

        <a href="{{ route('retos.create') }}" class="btn btn-success float-right m-2">Crear Reto</a>

        <table class="table table-striped table-hover table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE DEL RETO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">LINKS</th>
                    <th colspan="2">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($retos as $r)
                <tr>
                    <th scope="row">{{ $r->id }}</th>
                    <td>{{ $r->nombre }}</td>
                    <td>{{ $r->descripcion }}</td>
                    <td>{{ $r->link }}</td>
                    <td class="from-group">
                        <a href="/retos/{{ $r->slug }}/edit/" class="btn btn-warning form-control">Editar</a>
                    </td>
                    <td>
                        <form class="eliminarItem" action="{{ route('retos.destroy', $r->slug) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger form-control" >Eliminar</button>
                        </form>
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
                title: 'El Reto ha sido eliminado',
                showConfirmButton: false,
                timer: 3000
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
