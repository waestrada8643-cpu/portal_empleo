@extends('layouts.plantilla')

@section('title', 'Menú')

@section('content')

<h2 class="text-center mb-4 text-primary">Nuestros Servicios</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5 class="text-primary">Ofertas de Empleo</h5>
            <p>Publicamos vacantes actualizadas para diferentes áreas profesionales.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5 class="text-primary">Orientación Laboral</h5>
            <p>Brindamos consejos prácticos para entrevistas y elaboración de hojas de vida.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5 class="text-primary">Capacitaciones</h5>
            <p>Ofrecemos talleres y cursos en línea para fortalecer tus competencias.</p>
        </div>
    </div>
</div>



@endsection