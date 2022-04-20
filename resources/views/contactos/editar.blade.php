@extends('layout/agenda')

@section('tituloPagina', 'Editar Contacto')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Editar Contacto</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('contactos.update', $contactos->id_contacto)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="nombre">Categoria</label>
                            <select name="categoria" id="categoria" class="form-select rounded-pill" required>
                                <option value="">Seleccione una categoria</option>
                                @foreach($categorias as $item)
                                @if($item->id_categoria == $contactos->id_categoria){
                                <option value="{{ $item->id_categoria }}" selected>{{ $item->nombre }}</option>
                                @else
                                <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                @endif
                                @endforeach
                            </select>
                            <div class="mb-3 row mt-2">
                                <div class="col-6">
                                    <label for="paterno">Apellido Paterno</label>
                                    <input type="text" class="form-control rounded-pill" name="paterno" require
                                        id="paterno" placeholder="Apellido Paterno" required
                                        value="{{ $contactos->paterno }}">
                                </div>
                                <div class="col-6">
                                    <label for="materno">Apellido Materno</label>
                                    <input type="text" class="form-control rounded-pill" name="materno" require
                                        id="materno" placeholder="Apellido Materno" required
                                        value="{{ $contactos->materno }}">
                                </div>
                            </div>
                            <div class="mb-3 row mt-2">
                                <div class="col-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control rounded-pill" name="nombre" require
                                        id="nombre" placeholder="Nombre" required value="{{ $contactos->nombre }}">
                                </div>
                                <div class="col-6">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" class="form-control rounded-pill" name="telefono" require
                                        id="telefono" placeholder="Telefono" required
                                        value="{{ $contactos->telefono }}">
                                </div>
                            </div>

                            <label for="correo" class="mt-2">Correo Electronico</label>
                            <input type="text" class="form-control rounded-pill" name="correo" require id="correo"
                                placeholder="Correo Electronico" required value="{{ $contactos->email }}">

                            <button class="btn btn-outline-primary mt-2 rounded-pill"><i
                                    class="fa-solid fa-folder-plus"></i> Editar Contacto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
