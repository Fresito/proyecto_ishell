<!-- Modal -->
<div class="modal fade" id="modal-mostrar-{{$producto->id_producto}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('productos.index', $producto->id_producto)}}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">Registro</span>
                            </div>
                        </div>
    
                        <div class="card-body">
                            
                            <div class="form-group">
                                <strong>Id:</strong>
                                {{ $producto->id_producto }}
                            </div>

                            <div class="form-group">
                                <strong>Clave:</strong>
                                {{ $producto->clave }}
                            </div>

                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $producto->nombre }}
                            </div>

                            <div class="form-group">
                                <strong>Cantidad:</strong>
                                {{ $producto->cantidad }}
                            </div>

                            <div class="form-group">
                                <strong>Costo:</strong>
                                {{ $producto->costo }}
                            </div>

                            <div class="form-group">
                                <strong>Fotografia:</strong>
                                <img src="{{ "archivos/".$producto->foto }}" alt="{{ $producto->foto }}"style="width: 50px">
                            </div>

                            <div class="form-group">
                                <strong>Estado:</strong>
                                @if ($producto->activo == 1)
                                    Activo
                                @else
                                    Inactivo
                                @endif
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>