@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 align="center" style="font-weight: bold; color: darkgoldenrod " class="p-4">** COMPLETA TU PERFIL **
        </h1>

        <form action="/retocumplido/store" method="post">
            @csrf
            <div class="form-group">
                <h2 align="center" style="text-transform: uppercase;" for=""></h2>

                <p style="text-align: justify" class="p3"></p>

            </div>

            <div class="form-group">
                <h3 style="text-align: center" class="mb-3 mt-3">DATOS DEL ACUDIENTE</h3>
                <div class="row">

                    <div class="col-4">
                        <label for="acudiente">Nombres y Apellidos</label>
                        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1"></input>
                    </div>
                    <div class="col-4">
                        <label for="acudiente">Telefono </label>
                        <input id="descripcion" name="descripcion" type="number" class="form-control" tabindex="2"></input>
                    </div>
                    <div class="col-4">
                        <label for="acudiente">Correo </label>
                        <input id="descripcion" name="descripcion" type="email" class="form-control" tabindex="3"></input>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h3 style="text-align: center" class="mb-3 mt-3">DATOS DEL PADRE</h3>
                <div class="row">

                    <div class="col-4">
                        <label for="acudiente">Nombres y Apellidos</label>
                        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4"></input>
                    </div>
                    <div class="col-4">
                        <label for="acudiente">Telefono </label>
                        <input id="descripcion" name="descripcion" type="number" class="form-control" tabindex="5"></input>
                    </div>
                    <div class="col-4">
                        <label for="acudiente">Correo </label>
                        <input id="descripcion" name="descripcion" type="email" class="form-control" tabindex="6"></input>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h3 style="text-align: center" class="mb-3 mt-3">DATOS DE LA MADRE</h3>
                <div class="row">

                    <div class="col-4">
                        <label for="acudiente">Nombres y Apellidos </label>
                        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="7"></input>
                    </div>
                    <div class="col-4">
                        <label for="acudiente">Telefono </label>
                        <input id="descripcion" name="descripcion" type="number" class="form-control" tabindex="8"></input>
                    </div>
                    <div class="col-4">
                        <label for="acudiente">Correo </label>
                        <input id="descripcion" name="descripcion" type="email" class="form-control" tabindex="9"></input>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h3 style="text-align: center" class="mb-3 mt-3">DATOS ADICIONALES</h3>
                <div class="row">
                    <div class="col-4">
                        <label for="">Seleccione su estrato Socio-Económico</label>
                        <select name="select" class="form-control">
                            <option value="1">Estrato 1</option>
                            <option value="2" selected>Estrato 2</option>
                            <option value="3">Estrato 3</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="">Posee Computador (Portatil o Mesa)?</label>
                        <select name="select" class="form-control">
                            <option value="1" selected>Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="">Posee conexión a internet?</label>
                        <select name="select" class="form-control">
                            <option value="1" selected>Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h2 style="text-align: center">TRATAMIENTO DE DATOS PERSONALES</h2>
                <p style="text-align: justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quas rerum vero asperiores consequatur
                    provident suscipit pariatur nemo odit architecto? Quae sed aut maxime error incidunt? Quam fugiat earum
                    minus.
                    Ratione similique officia tenetur facere, sed fugit, error dicta at facilis nam ab nisi, culpa ducimus
                    nihil cum incidunt corporis? Molestias quae quod distinctio odio commodi, quam expedita dolores porro?
                    Eos iste beatae inventore, repudiandae assumenda vitae molestias impedit enim distinctio in dolore harum
                    illum? Vel error nisi incidunt quaerat sunt quisquam inventore, hic ducimus tempore eum magnam labore
                    repudiandae.
                    Tempore at laboriosam consequatur veniam voluptatibus in libero porro beatae corporis veritatis hic
                    dolorem accusantium minima harum nostrum quam cumque, iste temporibus asperiores doloribus. Quaerat
                    aspernatur dignissimos maiores quibusdam dolorum!
                    Est sit aperiam eaque cumque, praesentium corporis perferendis ut veritatis eum corrupti soluta
                    laboriosam quam excepturi officia exercitationem facere. Eum accusantium sapiente eveniet sit error ab
                    laborum quae quas corrupti.
                </p>

                <div class="form-check mt-5">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Acepto Terminos y Condiciones
                    </label>
                </div>
            </div>


            <div class="form-group mt-5">
                <a href="{{ route('retos.index') }}" class="btn btn-primary">Volver</a>
                <button type="submit" class="btn btn-success">Acepter y Enviar</button>
            </div>

        </form>
    </div>

@endsection
