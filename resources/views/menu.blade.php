@extends('layouts.plantilla')

@section('title', 'Servicios')

@section('styles')
<style>
    .services-hero {
        text-align: center;
        padding: 2rem 1rem 2.5rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .services-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(127, 119, 221, 0.12);
        border: 1px solid rgba(127, 119, 221, 0.28);
        color: #c4c1f5;
        padding: 0.5rem 1rem;
        border-radius: 999px;
        font-size: 12px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .services-hero h1 {
        font-size: clamp(2.1rem, 4vw, 3.2rem);
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.9rem;
    }

    .services-hero h1 span {
        color: #7F77DD;
    }

    .services-hero p {
        color: #8b8fa8;
        font-size: 1rem;
        line-height: 1.8;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.4rem;
        max-width: 1100px;
        margin: 0 auto 2rem;
    }

    .service-card {
        background: #171b2a;
        border: 1px solid #2a2d3e;
        border-radius: 18px;
        padding: 1.7rem 1.3rem;
        transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .service-card:hover {
        transform: translateY(-4px);
        border-color: #7F77DD;
        box-shadow: 0 12px 28px rgba(127, 119, 221, 0.15);
    }

    .service-icon {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: white;
    }

    .icon-purple { background: linear-gradient(135deg, #7F77DD, #534AB7); }
    .icon-teal { background: linear-gradient(135deg, #34d399, #0f766e); }
    .icon-gold { background: linear-gradient(135deg, #fbbf24, #d97706); }

    .service-card h3 {
        color: #fff;
        font-size: 1.2rem;
        margin-bottom: 0.75rem;
    }

    .service-card p {
        color: #8b8fa8;
        line-height: 1.7;
        font-size: 0.96rem;
    }

    .services-feature {
        max-width: 1100px;
        margin: 2rem auto 0;
        background: #161a29;
        border: 1px solid #2a2d3e;
        border-radius: 18px;
        padding: 1.5rem 1.25rem;
    }

    .services-feature h2 {
        color: #fff;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .feature-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: #cfd4ea;
        background: rgba(255,255,255,0.02);
        border-radius: 12px;
        padding: 0.9rem 1rem;
    }

    .feature-item i {
        color: #7F77DD;
        font-size: 1.25rem;
    }

    .cta-box {
        max-width: 1100px;
        margin: 2rem auto 0;
        background: linear-gradient(135deg, rgba(127,119,221,0.18), rgba(83,74,183,0.08));
        border: 1px solid rgba(127, 119, 221, 0.2);
        border-radius: 18px;
        padding: 1.5rem 1.2rem;
        text-align: center;
    }

    .cta-box h3 {
        color: #fff;
        margin-bottom: 0.6rem;
    }

    .cta-box p {
        color: #bfc6df;
        margin-bottom: 1rem;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #534AB7;
        color: #fff;
        border: none;
        padding: 0.8rem 1.2rem;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-primary:hover {
        background: #3C3489;
    }

    @media (max-width: 768px) {
        .services-grid,
        .feature-list {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
    <div class="services-hero">
        <div class="services-badge">
            <i class="ti ti-briefcase"></i>
            Servicios
        </div>
        <h1>Todo lo que necesitas para <span>avanzar</span> en tu carrera</h1>
        <p>
            En Portal de Empleo conectamos talento con oportunidades reales para que puedas crecer,
            encontrar trabajo y fortalecer tus habilidades profesionales.
        </p>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon icon-purple">
                <i class="ti ti-briefcase"></i>
            </div>
            <h3>Ofertas de empleo</h3>
            <p>Accede a vacantes actualizadas en distintas áreas con oportunidades para candidatos y empresas.</p>
        </div>

        <div class="service-card">
            <div class="service-icon icon-teal">
                <i class="ti ti-user-search"></i>
            </div>
            <h3>Orientación laboral</h3>
            <p>Recibe apoyo para mejorar tu hoja de vida, preparar entrevistas y presentar mejor tu perfil.</p>
        </div>

        <div class="service-card">
            <div class="service-icon icon-gold">
                <i class="ti ti-certificate"></i>
            </div>
            <h3>Capacitaciones</h3>
            <p>Fortalece tus competencias con talleres y oportunidades de formación para crecer profesionalmente.</p>
        </div>
    </div>

    <div class="services-feature">
        <h2>¿Por qué elegirnos?</h2>
        <div class="feature-list">
            <div class="feature-item">
                <i class="ti ti-check"></i>
                <span>Buscamos conectar a las personas con oportunidades reales y candidatas adecuadas para cada perfil.</span>
            </div>
            <div class="feature-item">
                <i class="ti ti-check"></i>
                <span>Te acompañamos con recursos prácticos para mejorar tu proceso de búsqueda laboral.</span>
            </div>
            <div class="feature-item">
                <i class="ti ti-check"></i>
                <span>Ofrecemos un proceso claro, moderno y pensado para ayudarte a avanzar con confianza.</span>
            </div>
            <div class="feature-item">
                <i class="ti ti-check"></i>
                <span>Facilitamos la conexión entre talento, empresas y oportunidades de crecimiento profesional.</span>
            </div>
        </div>
    </div>

    <div class="cta-box">
        <h3>¿Listo para empezar?</h3>
        <p>Crea tu cuenta y descubre las oportunidades que te esperan.</p>
        <a href="{{ route('register') }}" class="btn-primary">
            <i class="ti ti-user-plus"></i> Crear cuenta gratis
        </a>
    </div>
@endsection