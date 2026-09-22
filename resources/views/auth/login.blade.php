<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión — Portal de Empleo</title>
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
            padding: 48px 20px;
            position: relative;
            overflow: hidden;
        }
        .main::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(124,58,237,0.08) 0%, transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        /* ── CARD ── */
        .auth-card {
            width: 100%;
            max-width: 420px;
            background: #12121f;
            border: 1px solid rgba(139, 92, 246, 0.18);
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        .card-header {
            background: rgba(124, 58, 237, 0.1);
            border-bottom: 1px solid rgba(139, 92, 246, 0.18);
            padding: 10px 20px;
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
        .auth-body { padding: 32px 28px; }

        /* ── BRAND CENTER ── */
        .brand-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 28px;
            gap: 6px;
        }
        .brand-icon {
            width: 52px;
            height: 52px;
            background: linear-gradient(135deg, #7c3aed, #5b21b6);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 4px;
            box-shadow: 0 8px 24px rgba(124,58,237,0.35);
        }
        .brand-icon i { font-size: 24px; color: #fff; }
        .brand-title {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            color: #f1f5f9;
            font-size: 19px;
        }
        .brand-sub { font-size: 12.5px; color: #64748b; text-align: center; }

        /* ── FORM ── */
        .form-group { margin-bottom: 15px; }
        label {
            display: block;
            font-size: 11.5px;
            color: #94a3b8;
            margin-bottom: 6px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }
        .input-wrap { position: relative; }
        .input-wrap i {
            position: absolute;
            left: 11px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            font-size: 15px;
            pointer-events: none;
        }
        .input-wrap input {
            width: 100%;
            background: #0d0d18;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 9px;
            color: #e2e8f0;
            padding: 10px 12px 10px 36px;
            font-size: 13px;
            font-family: 'DM Sans', sans-serif;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }
        .input-wrap input:focus {
            border-color: #7c3aed;
            box-shadow: 0 0 0 3px rgba(124,58,237,0.12);
        }
        .input-wrap input::placeholder { color: #334155; }
        .input-wrap input.is-invalid { border-color: #e24b4a; }

        .invalid-feedback {
            font-size: 11px;
            color: #f09595;
            margin-top: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .forgot-link {
            font-size: 11.5px;
            color: #7c3aed;
            text-decoration: none;
            display: block;
            text-align: right;
            margin-top: -6px;
            margin-bottom: 14px;
            transition: color .2s;
        }
        .forgot-link:hover { color: #a78bfa; }

        .checkbox-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        .checkbox-row input[type="checkbox"] {
            width: 15px;
            height: 15px;
            accent-color: #7c3aed;
            cursor: pointer;
        }
        .checkbox-row label {
            font-size: 12px;
            color: #64748b;
            margin: 0;
            cursor: pointer;
            font-weight: 400;
        }

        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #7c3aed, #6d28d9);
            border: none;
            color: #fff;
            padding: 12px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 500;
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

        /* ── ALERT ERROR ── */
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

        /* ── DOTS BACKGROUND ── */
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
            .auth-body { padding: 24px 18px; }
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
                <i class="ti ti-login"></i> Iniciar sesión
            </div>
            <div class="auth-body">

                <!-- BRAND -->
                <div class="brand-center">
                    <div class="brand-icon"><i class="ti ti-briefcase"></i></div>
                    <div class="brand-title">Bienvenido de nuevo</div>
                    <div class="brand-sub">Accede a tu cuenta del portal</div>
                </div>

                <!-- SESSION STATUS -->
                @if (session('status'))
                    <div class="alert-error" style="background:rgba(29,158,117,0.1);border-color:rgba(29,158,117,0.3);color:#5dcaa5;">
                        <i class="ti ti-circle-check"></i>
                        {{ session('status') }}
                    </div>
                @endif

                <!-- ERRORS GENERALES -->
                @if ($errors->any())
                    <div class="alert-error">
                        <i class="ti ti-alert-circle"></i>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif

                <!-- FORM -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

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
                                autofocus
                                autocomplete="username"
                                class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                            >
                        </div>
                        @error('email')
                            <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <div class="input-wrap">
                            <i class="ti ti-lock"></i>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="••••••••"
                                required
                                autocomplete="current-password"
                                class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                            >
                        </div>
                        @error('password')
                            <div class="invalid-feedback"><i class="ti ti-alert-circle"></i> {{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Olvidaste contraseña -->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-link">¿Olvidaste tu contraseña?</a>
                    @endif

                    <!-- Recuérdame -->
                    <div class="checkbox-row">
                        <input type="checkbox" id="remember_me" name="remember">
                        <label for="remember_me">Recuérdame en este dispositivo</label>
                    </div>

                    <button type="submit" class="btn-primary">
                        <i class="ti ti-login"></i>
                        Acceder al portal
                    </button>

                    <div class="auth-footer">
                        ¿No tienes cuenta?
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Regístrate gratis</a>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </main>

</body>
</html>