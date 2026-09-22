@extends('layouts.plantilla')

@section('title', 'Resultados de búsqueda')

@section('content')
    <div style="max-width: 1000px; margin: 0 auto; padding: 2rem 1rem 4rem;">
        <div style="margin-bottom: 2rem;">
            <h1 style="font-size: 2rem; color: #fff; margin-bottom: 0.5rem;">Resultados de búsqueda</h1>
            @if($q !== '')
                <p style="color: #8b8fa8;">Buscando: <strong style="color: #c4c1f5;">{{ $q }}</strong></p>
            @else
                <p style="color: #8b8fa8;">Mostrando todas las vacantes disponibles.</p>
            @endif
        </div>

        @if($vacantes->isEmpty())
            <div style="background: #171b2a; border: 1px solid #2a2d3e; border-radius: 14px; padding: 1.5rem; color: #cfd4ea;">
                No se encontraron resultados para tu búsqueda.
            </div>
        @else
            <div style="display: grid; gap: 1rem;">
                @foreach($vacantes as $vacante)
                    <div style="background: #171b2a; border: 1px solid #2a2d3e; border-radius: 16px; padding: 1.5rem;">
                        <div style="display: flex; justify-content: space-between; gap: 1rem; flex-wrap: wrap; margin-bottom: 0.8rem;">
                            <div>
                                <h2 style="font-size: 1.35rem; color: #fff; margin-bottom: 0.35rem;">{{ $vacante->titulo }}</h2>
                                <p style="color: #7F77DD; font-weight: 600;">{{ $vacante->empresa }}</p>
                            </div>
                            <span style="background: rgba(29, 158, 117, 0.12); color: #8ae0be; border: 1px solid rgba(29, 158, 117, 0.3); border-radius: 999px; padding: 0.35rem 0.75rem; font-size: 12px; text-transform: uppercase;">
                                {{ $vacante->estado }}
                            </span>
                        </div>

                        <p style="color: #8b8fa8; margin-bottom: 0.6rem;">
                            <strong style="color: #c4c1f5;">Ubicación:</strong> {{ $vacante->ubicacion ?? 'No especificada' }}
                        </p>

                        <p style="color: #dfe6f6; line-height: 1.7; margin-bottom: 1rem;">
                            {{ $vacante->descripcion }}
                        </p>

                        <a href="#" style="display: inline-flex; align-items: center; gap: 8px; background: #534AB7; color: #fff; padding: 0.75rem 1.1rem; border-radius: 10px; text-decoration: none; font-weight: 600;">
                            <i class="ti ti-arrow-right"></i>
                            Ver oferta
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
