@extends('layout/agenda')

@section('tituloPagina', 'Agregar Categoria')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Agregar Una Categoria</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('categorias.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" require id="nombre" placeholder="Nombre de la categoria">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-folder-plus"></i> Agregar Categoria</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
