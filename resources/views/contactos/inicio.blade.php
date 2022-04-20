@extends('layout/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Contactos</h2>
                        @if($mensaje = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $mensaje }} 
                            </div>

                        
                        @endif
                        <a href="{{ route('contactos.create')}}">
                         <span class="btn btn-outline-primary"><i class="fa-solid fa-address-book"></i> Agregar Nuevo Contacto</span>
                        </a>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover table-bordered text-center" id="tabla_contactos">
                            <thead>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>E-mail</th>
                                <th>Categoria</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @foreach($listado as $item)
                                <tr>
                                    <td>{{ $item->paterno }}</td>
                                    <td>{{ $item->materno }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->nombre_categoria}}</td>
                                    <td>
                                        <a href="{{ route('contactos.edit', $item->id_contacto) }}">
                                            <span class="btn btn-outline-warning"><i class="fa-solid fa-edit"></i> Editar</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('contactos.show', $item->id_contacto)}}">
                                            <span class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i> Eliminar</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('dataTable')
<script>
    $(document).ready(function () {
        $('#tabla_contactos').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
    });
</script>
@endsection