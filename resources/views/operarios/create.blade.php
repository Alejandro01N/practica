@extends('layout/temple')

@section('title','Registrar Operarios')

@section('contenido')

<main>
    <!--Registrar Operario-->
    @if ($errors->any())

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>

            @foreach (@error->all() as $error)
            <li> {{ $error }} </li>  
            @endforeach

        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

@endif
    <div class="container   ">


        <div class="row align-items-stretch">
            <div class="col-lg-6 col-12 co rounded-5">
                <div class="contenedor container">
                    <h2 class="fw-bold text-center">
                        Registrar operario
                    </h2>




                    <form action="{{url('operarios')}}" method="post">
                        @csrf
                        <div class="CT mb-3">
                            <div class="">
                                <label for="cedula" class="form-label">Cedula:</label>
                                <!-- los old nos sirven para que cuando hayga un error no se borren los datos que ya hemos escrito -->
                                <input type="text" class="form-control" name="cedula" id="cedula" value="{{ old('cedula') }}" required>
                            </div>
                            <div class="">
                                <label for="telefono" class="form-label telefono">Telefono:</label>
                                <input type="text" maxlength="10" class="form-control" name="telefono" id="telefono" oninput="maxLengthTelefono(this)" value="{{ old('telefono') }}" required>
                            </div>
                             <div class="">
                                <label for="telefono2" class="form-label telefono">Telefono2:</label>
                                <input type="text" maxlength="10" class="form-control" name="telefono2" id="telefono2" oninput="maxLengthTelefono(this)" value="{{ old('telefono') }}" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name=nombre"" id="nombre" value="{{ old('nombre') }}" required>
                        </div>
                        <div class="ND mb-3">
                            <div class="direccion">
                                <label for="correo" class="form-label ">Correo:</label>
                                <input type="text" class="form-control " name="correo" id="correo" value="{{ old('correo') }}" >
                            </div>
                            <div class="">
                                <label for="sueldo" class="form-label"">Sueldo:</label>
                                <input type="number" class="form-control" name="sueldo" id="sueldo" value="{{ old('sueldo') }}" required>
                            </div>
                        </div>
                        <div class="EDS">
                            <div class="mb-3" >
                                <label for="edad"class="form-label">Edad:</label>
                                <input type="number" class="form-control" name="edad" id="edad" value="{{ old('edad') }}" required>
                            </div>
                            <div class="mb-3 direccion" >
                                <label for="direccion"class="form-label">Dirección:</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                            </div>
                        </div>

                        <p class="warnings" id="warningsColegio"></p>
                        
                        <div class="container my-3">
                            <div class="row">
                                <div class="col d-grid">
                                    <input type="submit" value="Enviar" class="btn btn-primary">
                                </div>
                                <div class="col d-grid">
                                    <a href="{{ url('operarios') }}" class="btn btn-secondary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col">
                <div class="contenedor d-none d-lg-block ">
                    <img src="./img/logo.svg" alt="" class="img-fluid m-4 img">
                </div>
            </div>
        </div>
    </div>
</main>