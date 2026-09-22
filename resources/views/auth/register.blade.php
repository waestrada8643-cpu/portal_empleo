<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro — Portal de Empleo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #0a0a15;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── NAVBAR ── */
        .nav {
            background: #0d0d18;
            border-bottom: 1px solid rgba(139, 92, 246, 0.2);
            padding: 1.1rem 3.6rem 1.2rem;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 12px;
            list-style: none;
            margin: 0;
            padding: 0;
            flex: 0 0 auto;
        }
        .nav-links a {
            color: #dfe3ec;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.15s ease;
            padding: 10px 4px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .nav-links a:hover { color: #fff; }
        .nav-links a.active {
            color: #fff;
            background: #5a3cb3;
            border: 1px solid rgba(162, 132, 255, 0.35);
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.03);
            font-weight: 500;
        }
        .nav-btns {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-left: 24px;
        }
        .btn-ghost {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.32);
            color: #f2f5ff;
            padding: 12px 26px;
            border-radius: 14px;
            font-size: 15px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: all .2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-ghost:hover { border-color: #7F77DD; color: #fff; }
        .btn-ghost.active {
            background: #5a3cb3;
            border-color: rgba(162, 132, 255, 0.35);
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.03);
        }
        .btn-solid {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.32);
            color: #fff;
            padding: 12px 26px;
            border-radius: 14px;
            font-size: 15px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-solid:hover { border-color: #7F77DD; }
        .btn-solid.active {
            background: #8b5cf6;
            border-color: #8b5cf6;
        }

        /* ── MAIN ── */
        .main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 26px clamp(18px, 2vw, 42px);
            position: relative;
            overflow: hidden;
        }
        .main::before {
            content: '';
            position: absolute;
            width: 820px;
            height: 820px;
            background: radial-gradient(circle, rgba(124,58,237,0.09) 0%, transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        /* ── CARD ── */
        .auth-card {
            width: 100%;
            max-width: 1600px;
            background: rgba(18, 18, 31, 0.96);
            border: 1px solid rgba(139, 92, 246, 0.18);
            border-radius: 28px;
            overflow: hidden;
            position: relative;
            z-index: 1;
            box-shadow: 0 30px 65px rgba(3, 7, 18, 0.45);
        }
        .card-header {
            background: rgba(124, 58, 237, 0.1);
            border-bottom: 1px solid rgba(139, 92, 246, 0.18);
            padding: 12px 22px;
            font-size: 11px;
            color: #a78bfa;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .card-header i { font-size: 13px; }
        .auth-body {
            display: grid;
            grid-template-columns: 0.9fr 1.5fr;
            min-height: 870px;
        }
        .auth-intro {
            background: linear-gradient(180deg, rgba(124,58,237,0.18), rgba(15,17,23,0.9));
            border-right: 1px solid rgba(139, 92, 246, 0.18);
            padding: 52px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }
        .auth-intro::after {
            content: "";
            position: absolute;
            inset: 22px;
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 22px;
            pointer-events: none;
        }
        .intro-badge {
            display: inline-flex;
            align-items: center;
            align-self: flex-start;
            gap: 8px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            color: #d8d5ff;
            border-radius: 999px;
            padding: 8px 14px;
            font-size: 11px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 18px;
            position: relative;
            z-index: 1;
        }
        .auth-intro h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(2.2rem, 4vw, 4rem);
            line-height: 1.05;
            color: #f8fafc;
            margin-bottom: 18px;
            position: relative;
            z-index: 1;
        }
        .auth-intro h1 span { color: #b39af8; }
        .auth-intro p {
            max-width: 440px;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #cbd5e1;
            margin-bottom: 28px;
            position: relative;
            z-index: 1;
        }
        .intro-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(120px, 1fr));
            gap: 16px;
            position: relative;
            z-index: 1;
        }
        .intro-stats .stat {
            background: rgba(15, 23, 42, 0.42);
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 18px 14px;
        }
        .intro-stats strong {
            display: block;
            font-size: 1.75rem;
            color: #fff;
            margin-bottom: 4px;
        }
        .intro-stats span {
            color: #cbd5e1;
            font-size: 0.78rem;
        }
        .auth-form-panel {
            padding: 36px 40px 30px;
        }

        /* ── BRAND CENTER ── */
        .brand-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 26px;
            gap: 6px;
        }
        .brand-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #7c3aed, #5b21b6);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 6px;
            box-shadow: 0 12px 28px rgba(124,58,237,0.35);
        }
        .brand-icon i { font-size: 28px; color: #fff; }
        .brand-title {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            color: #f1f5f9;
            font-size: 28px;
        }
        .brand-sub { font-size: 14px; color: #64748b; text-align: center; }

        /* ── SECTION LABEL ── */
        .section-label {
            font-size: 12px;
            color: #8b93a8;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 600;
            margin: 20px 0 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .section-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255,255,255,0.05);
        }

        /* ── ROLE SELECTOR ── */
        .role-selector { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 6px; }
        .role-btn {
            background: #0d0d18;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 14px;
            padding: 18px 12px;
            text-align: center;
            cursor: pointer;
            transition: all .2s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
        }
        .role-btn:hover, .role-btn.active {
            border-color: #7c3aed;
            background: rgba(124,58,237,0.12);
            box-shadow: inset 0 0 0 1px rgba(124,58,237,0.3);
        }
        .role-btn i { font-size: 24px; color: #7c3aed; }
        .role-btn span { font-size: 15px; color: #94a3b8; font-weight: 500; }
        .role-btn.active span { color: #a78bfa; }
        /* Input hidden para el rol */
        #rol-input { display: none; }

        /* ── FORM ── */
        .form-group { margin-bottom: 17px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-row .form-group { margin-bottom: 17px; }

        label {
            display: block;
            font-size: 13px;
            color: #94a3b8;
            margin-bottom: 7px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }
        .input-wrap { position: relative; }
        .input-wrap > i:first-child {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            font-size: 17px;
            pointer-events: none;
            z-index: 1;
        }
        .input-wrap input,
        .input-wrap select {
            width: 100%;
            background: #0d0d18;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 12px;
            color: #e2e8f0;
            padding: 15px 16px 15px 42px;
            font-size: 15px;
            font-family: 'DM Sans', sans-serif;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
            appearance: none;
        }
        .input-wrap input:focus,
        .input-wrap select:focus {
            border-color: #7c3aed;
            box-shadow: 0 0 0 3px rgba(124,58,237,0.12);
        }
        .input-wrap input::placeholder { color: #334155; }
        .input-wrap input.is-invalid,
        .input-wrap select.is-invalid { border-color: #e24b4a; }
        .input-wrap select option { background: #12121f; color: #e2e8f0; }

        .invalid-feedback {
            font-size: 11px;
            color: #f09595;
            margin-top: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* ── FILE UPLOAD ── */
        .file-upload-zone {
            width: 100%;
            background: #0d0d18;
            border: 1.5px dashed rgba(139,92,246,0.3);
            border-radius: 14px;
            padding: 26px 16px;
            text-align: center;
            cursor: pointer;
            transition: all .2s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
        }
        .file-upload-zone:hover {
            border-color: #7c3aed;
            background: rgba(124,58,237,0.05);
        }
        .file-upload-zone.has-file {
            border-color: #1d9e75;
            background: rgba(29,158,117,0.05);
        }
        .file-upload-zone i { font-size: 30px; color: #7c3aed; transition: color .2s; }
        .file-upload-zone.has-file i { color: #1d9e75; }
        .file-upload-title { font-size: 16px; color: #94a3b8; font-weight: 600; }
        .file-upload-sub { font-size: 13px; color: #475569; }
        .file-formats { display: flex; gap: 5px; justify-content: center; margin-top: 3px; flex-wrap: wrap; }
        .file-tag {
            background: rgba(124,58,237,0.12);
            color: #a78bfa;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 4px;
            border: 1px solid rgba(124,58,237,0.2);
            font-weight: 500;
        }
        /* Input file oculto */
        #cv_file { display: none; }

        /* ── CHECKBOX TERMS ── */
        .checkbox-row {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            margin-bottom: 20px;
            margin-top: 6px;
        }
        .checkbox-row input[type="checkbox"] {
            width: 15px;
            height: 15px;
            accent-color: #7c3aed;
            cursor: pointer;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .checkbox-row label {
            font-size: 12px;
            color: #64748b;
            margin: 0;
            cursor: pointer;
            font-weight: 400;
            line-height: 1.5;
        }
        .checkbox-row label a { color: #7c3aed; text-decoration: none; }
        .checkbox-row label a:hover { color: #a78bfa; }

        /* ── BUTTON ── */
        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #7c3aed, #6d28d9);
            border: none;
            color: #fff;
            padding: 16px 18px;
            border-radius: 14px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            letter-spacing: 0.4px;
            transition: opacity .2s, transform .1s;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-primary:hover { opacity: .9; }
        .btn-primary:active { transform: scale(0.99); }

        .auth-footer { text-align: center; font-size: 12.5px; color: #475569; }
        .auth-footer a { color: #7c3aed; text-decoration: none; transition: color .2s; }
        .auth-footer a:hover { color: #a78bfa; }

        /* ── ALERT ── */
        .alert-error {
            background: rgba(226,75,74,0.1);
            border: 1px solid rgba(226,75,74,0.3);
            border-radius: 9px;
            padding: 10px 14px;
            margin-bottom: 16px;
            font-size: 12.5px;
            color: #f09595;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }
        .alert-error i { font-size: 15px; margin-top: 1px; flex-shrink: 0; }

        /* ── DOTS ── */
        .dots {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            background-image: radial-gradient(rgba(139,92,246,0.15) 1px, transparent 1px);
            background-size: 32px 32px;
            mask-image: radial-gradient(ellipse at center, black 30%, transparent 80%);
        }

        @media (max-width: 640px) {
            .nav { padding: 0 16px; }
            .nav-links { display: none; }
            .auth-body { padding: 20px 16px 28px; }
            .form-row { grid-template-columns: 1fr; }
            .form-row .form-group { margin-bottom: 0; }
        }
    </style>
</head>
<body>

    <div class="dots"></div>

    <!-- NAVBAR -->
    <nav class="nav">
        <ul class="nav-links">
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('menu') }}">Servicios</a></li>
            <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
            <li><a href="{{ route('contacto.index') }}" class="{{ request()->routeIs('contacto.index') ? 'active' : '' }}">Contacto</a></li>
        </ul>
        <div class="nav-btns">
            <a href="{{ route('login') }}" class="btn-ghost {{ request()->routeIs('login') ? 'active' : '' }}">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="btn-solid {{ request()->routeIs('register') ? 'active' : '' }}">Registro</a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="main">
        <div class="auth-card">
            <div class="card-header">
                <i class="ti ti-user-plus"></i> Crear cuenta
            </div>
            <div class="auth-body">
                <aside class="auth-intro">
                    <div class="intro-badge"><i class="ti ti-star"></i> Únete</div>
                    <h1>Tu próximo <span>empleo</span> empieza aquí.</h1>
                    <p>Construye tu perfil, comparte tus datos y conecta con oportunidades reales en empresas que buscan talento.</p>

                    <div class="intro-stats">
                        <div class="stat">
                            <strong>+1.5k</strong>
                            <span>empleos</span>
                        </div>
                        <div class="stat">
                            <strong>320</strong>
                            <span>empresas</span>
                        </div>
                        <div class="stat">
                            <strong>96%</strong>
                            <span>compatibilidad</span>
                        </div>
                    </div>
                </aside>

                <div class="auth-form-panel">
                    <!-- BRAND -->
                    <div class="brand-center">
                        <div class="brand-icon"><i class="ti ti-id-badge"></i></div>
                        <div class="brand-title">Crea tu perfil</div>
                        <div class="brand-sub">Únete al portal de empleo hoy</div>
                    </div>

                    <!-- ERRORS -->
                    @if ($errors->any())
                        <div class="alert-error">
                            <i class="ti ti-alert-circle"></i>
                            <div>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- FORM -->
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- TIPO DE PERFIL -->
                        <div class="section-label">Tipo de perfil</div>
                        <input type="hidden" name="rol" id="rol-input" value="{{ old('rol', 'candidato') }}">
                        <div class="role-selector">
                            <div class="role-btn {{ old('rol', 'candidato') === 'candidato' ? 'active' : '' }}" data-rol="candidato">
                                <i class="ti ti-user-search"></i>
                                <span>Busco empleo</span>
                            </div>
                            <div class="role-btn {{ old('rol') === 'empresa' ? 'active' : '' }}" data-rol="empresa">
                                <i class="ti ti-building"></i>
                                <span>Soy empresa</span>
                            </div>
                        </div>

                        <!-- DATOS PERSONALES -->
                        <div class="section-label">Información personal</div>

                        <div class="form-row">
                            <!-- Nombre -->
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <div class="input-wrap">
                                    <i class="ti ti-user"></i>
                                    <input
                                        id="name"
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Juan"
                                        required
                                        autofocus
                                        autocomplete="given-name"
                                        class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    >
                                </div>
                                @error('name')
                                    <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Apellido -->
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <div class="input-wrap">
                                    <i class="ti ti-user"></i>
                                    <input
                                        id="apellido"
                                        type="text"
                                        name="apellido"
                                        value="{{ old('apellido') }}"
                                        placeholder="Pérez"
                                        required
                                        autocomplete="family-name"
                                        class="{{ $errors->has('apellido') ? 'is-invalid' : '' }}"
                                    >
                                </div>
                                @error('apellido')
                                    <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- Celular -->
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <div class="input-wrap">
                                    <i class="ti ti-phone"></i>
                                    <input
                                        id="celular"
                                        type="tel"
                                        name="celular"
                                        value="{{ old('celular') }}"
                                        placeholder="+57 300 000 0000"
                                        required
                                        autocomplete="tel"
                                        class="{{ $errors->has('celular') ? 'is-invalid' : '' }}"
                                    >
                                </div>
                                @error('celular')
                                    <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Ciudad -->
                            <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                <div class="input-wrap">
                                    <i class="ti ti-map-pin"></i>
                                    <input
                                        id="ciudad"
                                        type="text"
                                        name="ciudad"
                                        value="{{ old('ciudad') }}"
                                        placeholder="Pasto, Nariño"
                                        required
                                        class="{{ $errors->has('ciudad') ? 'is-invalid' : '' }}"
                                    >
                                </div>
                                @error('ciudad')
                                    <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <div class="input-wrap">
                                <i class="ti ti-home"></i>
                                <input
                                    id="direccion"
                                    type="text"
                                    name="direccion"
                                    value="{{ old('direccion') }}"
                                    placeholder="Calle 18 # 25-40, Barrio Centro"
                                    required
                                    autocomplete="street-address"
                                    class="{{ $errors->has('direccion') ? 'is-invalid' : '' }}"
                                >
                            </div>
                            @error('direccion')
                                <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <!-- DATOS DE ACCESO -->
                        <div class="section-label">Datos de acceso</div>

                        <!-- Correo -->
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <div class="input-wrap">
                                <i class="ti ti-mail"></i>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="tu@correo.com"
                                    required
                                    autocomplete="username"
                                    class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                >
                            </div>
                            @error('email')
                                <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-row">
                            <!-- Contraseña -->
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <div class="input-wrap">
                                    <i class="ti ti-lock"></i>
                                    <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        placeholder="Mínimo 8 caracteres"
                                        required
                                        autocomplete="new-password"
                                        class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    >
                                </div>
                                @error('password')
                                    <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirmar contraseña -->
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar contraseña</label>
                                <div class="input-wrap">
                                    <i class="ti ti-lock-check"></i>
                                    <input
                                        id="password_confirmation"
                                        type="password"
                                        name="password_confirmation"
                                        placeholder="Repite la contraseña"
                                        required
                                        autocomplete="new-password"
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- HOJA DE VIDA -->
                        <div class="section-label">Hoja de vida / CV</div>

                        <input
                            type="file"
                            name="cv_file"
                            id="cv_file"
                            accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                        >
                        <div class="file-upload-zone" id="upload-zone">
                            <i class="ti ti-cloud-upload" id="upload-icon"></i>
                            <div class="file-upload-title" id="upload-title">Sube tu hoja de vida</div>
                            <div class="file-upload-sub" id="upload-sub">Arrastra aquí o haz clic para seleccionar</div>
                            <div class="file-formats">
                                <span class="file-tag">PDF</span>
                                <span class="file-tag">DOC</span>
                                <span class="file-tag">DOCX</span>
                                <span class="file-tag">JPG</span>
                                <span class="file-tag">PNG</span>
                            </div>
                        </div>
                        @error('cv_file')
                            <div class="invalid-feedback" style="margin-top:-2px;margin-bottom:8px;">
                                <i class="ti ti-alert-circle"></i> {{ $message }}
                            </div>
                        @enderror

                        <!-- TÉRMINOS -->
                        <div class="checkbox-row">
                            <input type="checkbox" id="terminos" name="terminos" required {{ old('terminos') ? 'checked' : '' }}>
                            <label for="terminos">
                                Acepto los <a href="#">términos y condiciones</a> y la
                                <a href="#">política de privacidad</a> del portal.
                            </label>
                        </div>

                        <button type="submit" class="btn-primary">
                            <i class="ti ti-user-plus"></i>
                            Crear mi cuenta
                        </button>

                        <div class="auth-footer">
                            ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        // ── Selector de rol ──
        const rolBtns = document.querySelectorAll('.role-btn');
        const rolInput = document.getElementById('rol-input');
        rolBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                rolBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                rolInput.value = btn.dataset.rol;
            });
        });

        // ── File upload ──
        const zone    = document.getElementById('upload-zone');
        const fileIn  = document.getElementById('cv_file');
        const icon    = document.getElementById('upload-icon');
        const title   = document.getElementById('upload-title');
        const sub     = document.getElementById('upload-sub');

        zone.addEventListener('click', () => fileIn.click());

        fileIn.addEventListener('change', () => {
            const file = fileIn.files[0];
            if (file) {
                zone.classList.add('has-file');
                icon.className = 'ti ti-circle-check';
                title.textContent = file.name;
                sub.textContent = (file.size / 1024).toFixed(0) + ' KB — listo para subir';
            }
        });

        // Drag & drop
        zone.addEventListener('dragover', e => { e.preventDefault(); zone.style.borderColor = '#7c3aed'; });
        zone.addEventListener('dragleave', () => { zone.style.borderColor = ''; });
        zone.addEventListener('drop', e => {
            e.preventDefault();
            zone.style.borderColor = '';
            const file = e.dataTransfer.files[0];
            if (file) {
                const dt = new DataTransfer();
                dt.items.add(file);
                fileIn.files = dt.files;
                fileIn.dispatchEvent(new Event('change'));
            }
        });
    </script>

</body>
</html>