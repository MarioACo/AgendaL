@extends('layout/agenda')

@section('tituloPagina', 'Eliminar Categoria')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Eliminar Categoria</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger text-center" role="alert">
                            ¿Esta seguro de eliminar la categoria?
                            <p>
                                Una vez eliminada la categoria no podra ser recuperada.
                            </p>

                            <table class="table table-sm">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $categorias->nombre }}</td>
                                        <td>{{ $categorias->descripcion }}</td>
                                    </tr>
                            </table>
                            <form action="{{ route('categorias.destroy', $categorias->id_categoria) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-alt"></i> Eliminar Categoria</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
