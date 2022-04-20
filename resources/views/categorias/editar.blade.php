@extends('layout/agenda')

@section('tituloPagina', 'Editar Categoria')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Editar Una Categoria</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('categorias.update', $categorias->id_categoria) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required id="nombre" placeholder="Nombre de la categoria"
                            value="{{ $categorias->nombre }}">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required>{{ $categorias->descripcion }}</textarea>
                            <button class="btn mt-2 btn-outline-warning"><i class="fa-solid fa-file-pen"></i> Actualizar Categoria</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
