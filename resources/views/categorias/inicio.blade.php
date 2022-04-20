@extends('layout/agenda')

@section('tituloPagina', 'Categorias')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Categorias</h2>
                        @if($mensaje = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $mensaje }} 
                            </div>

                        
                        @endif
                        <a href="{{ route('categorias.create')}}">
                            <span class="btn btn-outline-primary"><i class="fa-solid fa-address-book"></i> Agregar
                                Categoria</span>
                        </a>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover table-bordered text-center" id="tabla_categorias">
                            <thead>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @foreach($categorias as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->descripcion }}</td>
                                    <td>
                                        <a href="{{ route('categorias.edit' , $item->id_categoria) }}">
                                            <span class="btn btn-outline-warning"><i
                                                    class="fa-solid fa-edit"></i> Editar</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('categorias.show', $item->id_categoria) }}">
                                            <span class="btn btn-outline-danger"><i
                                                    class="fa-solid fa-trash"></i> Eliminar</span>
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
        $('#tabla_categorias').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
    });
</script>
@endsection