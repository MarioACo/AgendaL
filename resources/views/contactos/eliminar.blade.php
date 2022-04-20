@extends('layout/agenda')

@section('tituloPagina', 'Eliminar Contacto')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Eliminar Contacto</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger text-center" role="alert">
                            ¿Esta seguro de eliminar este contacto?
                            <p>
                                Una vez eliminado el contacto no podra ser recuperada.
                            </p>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>E-mail</th>
                                    <th>Categoria</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $contactos->paterno }}</td>
                                        <td>{{ $contactos->materno }}</td>
                                        <td>{{ $contactos->nombre }}</td>
                                        <td>{{ $contactos->telefono }}</td>
                                        <td>{{ $contactos->email }}</td>
                                        <td>{{ $contactos->nombre_categoria}}</td>
                                    </tr>
                    
                                </tbody>
                            </table>
                            <form action="{{ route('contactos.destroy', $contactos->id_contacto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger"> <i class="fa-solid fa-trash-alt"></i> Eliminar Contacto</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
