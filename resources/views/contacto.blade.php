@extends('layouts.plantilla')
@section('title', 'Contacto')

@section('styles')
<style>
    .contacto-hero {
        text-align: center;
        padding: 3rem 1rem 2rem;
        max-width: 600px;
        margin: 0 auto 3rem;
    }
    .contacto-badge {
        display: inline-flex; align-items: center; gap: 7px;
        background: #1e1b3a; border: 1px solid #3d3780;
        color: #c4c1f5; font-size: 12px; padding: 5px 14px;
        border-radius: 20px; margin-bottom: 1.25rem;
    }
    .contacto-hero h1 {
        font-size: 36px; font-weight: 700; color: #fff;
        line-height: 1.2; margin-bottom: 1rem;
    }
    .contacto-hero h1 span { color: #7F77DD; }
    .contacto-hero p { font-size: 15px; color: #8b8fa8; line-height: 1.8; }

    .contacto-grid {
        display: grid; grid-template-columns: 1fr 1.6fr;
        gap: 24px; max-width: 900px; margin: 0 auto;
    }

    /* INFO CARDS */
    .info-col { display: flex; flex-direction: column; gap: 16px; }
    .info-card {
        background: #1a1d27; border: 1px solid #2a2d3e;
        border-radius: 14px; padding: 1.25rem 1.5rem;
        display: flex; align-items: flex-start; gap: 14px;
        transition: border-color 0.2s;
    }
    .info-card:hover { border-color: #7F77DD; }
    .info-icon {
        width: 42px; height: 42px; border-radius: 10px;
        background: #2e2a5a; color: #7F77DD;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px; flex-shrink: 0;
    }
    .info-card h4 { font-size: 13px; font-weight: 600; color: #fff; margin-bottom: 3px; }
    .info-card p  { font-size: 13px; color: #8b8fa8; margin: 0; }

    /* FORMULARIO */
    .form-card {
        background: #1a1d27; border: 1px solid #2a2d3e;
        border-radius: 16px; padding: 2rem 1.75rem;
    }
    .form-card h3 {
        font-size: 17px; font-weight: 600; color: #fff;
        margin-bottom: 1.5rem;
        display: flex; align-items: center; gap: 8px;
    }
    .form-card h3 i { color: #7F77DD; }

    .field { margin-bottom: 1rem; }
    .label {
        display: flex; align-items: center; gap: 6px;
        font-size: 11px; font-weight: 600; color: #6b7090;
        margin-bottom: 7px; text-transform: uppercase; letter-spacing: 0.06em;
    }
    .label i { font-size: 14px; }
    .input-wrap { position: relative; }
    .input-wrap input,
    .input-wrap textarea {
        width: 100%;
        padding: 10px 40px 10px 14px;
        background: #23263a; border: 1px solid #2a2d3e;
        border-radius: 10px; color: #e2e4f0;
        font-size: 14px; outline: none;
        transition: border-color 0.15s, box-shadow 0.15s;
        font-family: 'Segoe UI', sans-serif;
        resize: none;
    }
    .input-wrap input { height: 42px; }
    .input-wrap textarea { height: 120px; padding-top: 12px; }
    .input-wrap input::placeholder,
    .input-wrap textarea::placeholder { color: #444760; }
    .input-wrap input:focus,
    .input-wrap textarea:focus {
        border-color: #7F77DD;
        box-shadow: 0 0 0 3px rgba(127,119,221,0.15);
    }
    .input-wrap .icon-right {
        position: absolute; right: 12px; top: 12px;
        color: #555870; font-size: 17px;
    }
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }

    .btn-primary {
        width: 100%; height: 44px; background: #534AB7;
        color: #fff; border: none; border-radius: 10px;
        font-size: 14px; font-weight: 600; cursor: pointer;
        display: flex; align-items: center; justify-content: center; gap: 8px;
        transition: background 0.15s, transform 0.1s; margin-top: 0.5rem;
    }
    .btn-primary:hover { background: #3C3489; }
    .btn-primary:active { transform: scale(0.98); }

    .error-msg { color: #E24B4A; font-size: 12px; margin-top: 5px; }

    .alert-success {
        background: #0d2e24; border: 1px solid #1D9E75;
        border-radius: 10px; padding: 12px 16px;
        color: #1D9E75; font-size: 13px;
        display: flex; align-items: center; gap: 10px;
        margin-bottom: 1.25rem;
    }

    @media (max-width: 768px) {
        .contacto-grid { grid-template-columns: 1fr; }
        .grid-2 { grid-template-columns: 1fr; }
        .contacto-hero h1 { font-size: 26px; }
    }
</style>
@endsection

@section('content')

    <!-- HERO -->
    <div class="contacto-hero">
        <div class="contacto-badge">
            <i class="ti ti-mail" style="font-size:14px"></i>
            Estamos aquí para ayudarte
        </div>
        <h1>Contáctanos <span>hoy</span></h1>
        <p>¿Tienes alguna pregunta o necesitas ayuda? Escríbenos y te responderemos lo antes posible.</p>
    </div>

    <!-- GRID -->
    <div class="contacto-grid">

        <!-- INFO -->
        <div class="info-col">
            <div class="info-card">
                <div class="info-icon"><i class="ti ti-mail"></i></div>
                <div>
                    <h4>Correo electrónico</h4>
                    <p>contacto@portalempleo.com</p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="ti ti-phone"></i></div>
                <div>
                    <h4>Teléfono</h4>
                    <p>+57 302 6940 182</p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="ti ti-map-pin"></i></div>
                <div>
                    <h4>Ubicación</h4>
                    <p>Pasto, Nariño, Colombia</p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="ti ti-clock"></i></div>
                <div>
                    <h4>Horario de atención</h4>
                    <p>Lunes a Viernes<br>8:00 AM — 6:00 PM</p>
                </div>
            </div>
        </div>

        <!-- FORMULARIO -->
        <div class="form-card">
            <h3><i class="ti ti-send"></i> Envíanos un mensaje</h3>

            @if(session('success'))
                <div class="alert-success">
                    <i class="ti ti-circle-check" style="font-size:18px"></i>
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contacto.store') }}">
                @csrf

                <div class="grid-2">
                    <div class="field">
                        <div class="label"><i class="ti ti-user"></i> Nombre</div>
                        <div class="input-wrap">
                            <input type="text" name="nombre" placeholder="Tu nombre"
                                   value="{{ old('nombre') }}" required />
                            <i class="ti ti-user icon-right"></i>
                        </div>
                        @error('nombre') <p class="error-msg">{{ $message }}</p> @enderror
                    </div>
                    <div class="field">
                        <div class="label"><i class="ti ti-mail"></i> Correo</div>
                        <div class="input-wrap">
                            <input type="email" name="email" placeholder="tu@correo.com"
                                   value="{{ old('email') }}" required />
                            <i class="ti ti-mail icon-right"></i>
                        </div>
                        @error('email') <p class="error-msg">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="field">
                    <div class="label"><i class="ti ti-tag"></i> Asunto</div>
                    <div class="input-wrap">
                        <input type="text" name="asunto" placeholder="¿En qué podemos ayudarte?"
                               value="{{ old('asunto') }}" required />
                        <i class="ti ti-tag icon-right"></i>
                    </div>
                    @error('asunto') <p class="error-msg">{{ $message }}</p> @enderror
                </div>

                <div class="field">
                    <div class="label"><i class="ti ti-message"></i> Mensaje</div>
                    <div class="input-wrap">
                        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..."
                                  required>{{ old('mensaje') }}</textarea>
                        <i class="ti ti-message icon-right"></i>
                    </div>
                    @error('mensaje') <p class="error-msg">{{ $message }}</p> @enderror
                </div>

                <button class="btn-primary" type="submit">
                    <i class="ti ti-send"></i> Enviar mensaje
                </button>
            </form>
        </div>

    </div>

@endsection