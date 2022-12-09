<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar Productos</title>
</head>
<body>
    <br>
    <div class="container">
        <h4>Producto</h4>
        <hr>
        <div class="row">
            <div class="col-xl-12">
        <!--Formulario de productos-->        
                <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    @method ('PUT')

                        
        <!---->
                            <div class="col-md-2">
                                <label for="" class="form-label">Clave</label>
                                <input type="text" class="form-control" name="clave" value="{{ $producto->clave }}">
                            </div>

                            &nbsp;

                            <div class="col-md-3">
                              <label for="" class="form-label">Nombres</label>
                              <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}">
                            </div>

                            &nbsp;

                            <div class="col-md-3">
                              <label for="" class="form-label">Apellido Paterno</label>
                              <input type="text" class="form-control" name="apellido_p" value="{{ $producto->apellido_p }}">
                            </div>

                            &nbsp;

                            <div class="col-md-3">
                                <label for="" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellido_m" value="{{ $producto->apellido_m }}">
                            </div>
                            <!---->
                            <div class="col-md-2">
                              <label for="" class="form-label">Fecha de nacimiento</label>
                              <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $producto->fecha_nacimiento }}">
                            </div>

                            &nbsp;
                            &nbsp;
                            &nbsp;

                            <div class="col-md-2">
                                <label for="genero">Genero</label>
                                <br>
                                Femenino: <input type="radio" name="genero" value="Femenino" checked>
                                <br>
                                Masculino: <input type="radio" name="genero" value="Masculino">
                            </div>


                            <div class="col-md-4">
                                <label for="" class="form-label">Foto de perfil</label>
                                <input type="file" class="form-control" name="fotoA" value="">
                                <br>
                                <input type="text" class="form-control" name="fotoB" value="{{ $producto->foto }}">
                            </div>

                            <!---->

                            <div class="col-md-4">
                              <label for="" class="form-label">Correo</label>
                              <input type="email" class="form-control" name="email" value="{{ $producto->email }}">
                            </div>

                            <div class="col-md-3">
                              <label for="" class="form-label">Contraseña</label>
                              <input type="pass" class="form-control" name="pass" value="{{ $producto->pass }}">
                            </div>

                            <div class="col-md-2">
                                <label for="">Nivel</label>
                                <br>
                                    <select name="id_nivel">
                                        <option>Seleccionar</option>
                                        @foreach ($niveles as $nivel)
                                            <option value="{{ $nivel->id_nivel }}">{{ $nivel->id_nivel }} {{ $nivel->nivel }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-3">
                                <label for="activo">Estado</label>
                                <br>
                                Activo: <input type="radio" name="activo" value="1" checked>
                                <br>
                                Inactivo: <input type="radio" name="activo" value="0">
                            </div>

                            <br>
                            <br>
                            <div></div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <button type="submit" class="btn btn-outline-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
                                        <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z"/>
                                    </svg>
                                    Guardar
                                </button>
    
                                <a href="{{ route('productos.index') }}" type="reset" class="btn btn-outline-secondary"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                    Cancelar
                                </a>
                                
                            </div>
                </form>
            </div>
        </div>
    </div>
    <br>
</body>
</html>