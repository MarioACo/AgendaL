@extends('layout/agenda')

@section('tituloPagina', 'Inicio')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h2>Agenda</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <img src="{{ asset('img/shiba.jpg') }}" alt="" width="40%" style="width:300px; height:300px; border-radius:150px;">
                        <p style="font-family: 'Square Peg', cursive; font-size: xxx-large;">
                            Agenda de el señor Shiba Inu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
