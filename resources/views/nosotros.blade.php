@extends('layouts.plantilla')
@section('title', 'Nosotros')

@section('styles')
<style>
    /* HERO */
    .nosotros-hero {
        text-align: center;
        padding: 3rem 1rem 2rem;
        max-width: 700px;
        margin: 0 auto 3rem;
    }
    .nosotros-badge {
        display: inline-flex; align-items: center; gap: 7px;
        background: #1e1b3a; border: 1px solid #3d3780;
        color: #c4c1f5; font-size: 12px; padding: 5px 14px;
        border-radius: 20px; margin-bottom: 1.25rem;
    }
    .nosotros-hero h1 {
        font-size: 36px; font-weight: 700; color: #fff;
        line-height: 1.2; margin-bottom: 1rem;
    }
    .nosotros-hero h1 span { color: #7F77DD; }
    .nosotros-hero p {
        font-size: 15px; color: #8b8fa8; line-height: 1.8;
    }

    /* MISIÓN VISIÓN */
    .mv-grid {
        display: grid; grid-template-columns: 1fr 1fr;
        gap: 20px; max-width: 900px; margin: 0 auto 3rem;
    }
    .mv-card {
        background: #1a1d27; border: 1px solid #2a2d3e;
        border-radius: 16px; padding: 2rem 1.75rem;
        transition: border-color 0.2s, transform 0.2s;
    }
    .mv-card:hover { border-color: #7F77DD; transform: translateY(-3px); }
    .mv-card .mv-icon {
        width: 48px; height: 48px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 24px; margin-bottom: 1rem;
    }
    .mv-icon.purple { background: #2e2a5a; color: #7F77DD; }
    .mv-icon.teal   { background: #0d2e24; color: #1D9E75; }
    .mv-card h3 { font-size: 18px; font-weight: 700; color: #fff; margin-bottom: 10px; }
    .mv-card p  { font-size: 14px; color: #8b8fa8; line-height: 1.7; }

    /* VALORES */
    .valores-section {
        max-width: 900px; margin: 0 auto 3rem;
    }
    .valores-title {
        text-align: center; margin-bottom: 1.75rem;
    }
    .valores-title h2 { font-size: 24px; font-weight: 700; color: #fff; margin-bottom: 6px; }
    .valores-title p  { font-size: 14px; color: #8b8fa8; }
    .valores-grid {
        display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 16px;
    }
    .valor-card {
        background: #1a1d27; border: 1px solid #2a2d3e;
        border-radius: 14px; padding: 1.5rem 1.25rem;
        text-align: center;
        transition: border-color 0.2s, transform 0.2s;
    }
    .valor-card:hover { border-color: #7F77DD; transform: translateY(-3px); }
    .valor-card i { font-size: 28px; color: #7F77DD; margin-bottom: 10px; display: block; }
    .valor-card h4 { font-size: 14px; font-weight: 600; color: #fff; margin-bottom: 6px; }
    .valor-card p  { font-size: 12px; color: #8b8fa8; line-height: 1.6; }

    /* STATS */
    .stats-section {
        background: #13151f; border-radius: 16px;
        border: 1px solid #2a2d3e;
        padding: 2.5rem 2rem;
        display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px; text-align: center;
        max-width: 900px; margin: 0 auto;
    }
    .stats-section .num { font-size: 32px; font-weight: 700; color: #7F77DD; }
    .stats-section .lbl { font-size: 13px; color: #8b8fa8; margin-top: 4px; }

    @media (max-width: 640px) {
        .mv-grid { grid-template-columns: 1fr; }
        .nosotros-hero h1 { font-size: 26px; }
    }
</style>
@endsection

@section('content')

    <!-- HERO -->
    <div class="nosotros-hero">
        <div class="nosotros-badge">
            <i class="ti ti-info-circle" style="font-size:14px"></i>
            Quiénes somos
        </div>
        <h1>Sobre <span>Nosotros</span></h1>
        <p>
            Somos un portal dedicado a conectar empresas con talento humano y apoyar a quienes buscan empleo.
            Nuestro compromiso es brindar información clara, actualizada y útil para el desarrollo profesional.
        </p>
    </div>

    <!-- MISIÓN Y VISIÓN -->
    <div class="mv-grid">
        <div class="mv-card">
            <div class="mv-icon purple">
                <i class="ti ti-target"></i>
            </div>
            <h3>Misión</h3>
            <p>
                Facilitar el acceso a oportunidades laborales y recursos de capacitación,
                promoviendo el crecimiento personal y profesional de nuestros usuarios.
            </p>
        </div>
        <div class="mv-card">
            <div class="mv-icon teal">
                <i class="ti ti-eye"></i>
            </div>
            <h3>Visión</h3>
            <p>
                Ser un portal líder en la región en la difusión de ofertas de empleo y orientación laboral,
                reconocido por su impacto positivo en la comunidad.
            </p>
        </div>
    </div>

    <!-- VALORES -->
    <div class="valores-section">
        <div class="valores-title">
            <h2>Nuestros valores</h2>
            <p>Los principios que guían cada decisión que tomamos</p>
        </div>
        <div class="valores-grid">
            <div class="valor-card">
                <i class="ti ti-shield-check"></i>
                <h4>Confianza</h4>
                <p>Información verificada y empresas validadas para tu seguridad.</p>
            </div>
            <div class="valor-card">
                <i class="ti ti-heart"></i>
                <h4>Compromiso</h4>
                <p>Dedicados a conectar el mejor talento con las mejores oportunidades.</p>
            </div>
            <div class="valor-card">
                <i class="ti ti-bulb"></i>
                <h4>Innovación</h4>
                <p>Tecnología moderna para una experiencia de búsqueda más eficiente.</p>
            </div>
            <div class="valor-card">
                <i class="ti ti-users"></i>
                <h4>Comunidad</h4>
                <p>Construimos una red de profesionales que se apoyan mutuamente.</p>
            </div>
        </div>
    </div>

@endsection