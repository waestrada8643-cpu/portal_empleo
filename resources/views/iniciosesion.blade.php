<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión — Portal de Empleo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            background: #0f1117;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            padding: 2rem 1rem;
        }

        .logo-area {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .logo-area .icon {
            width: 52px; height: 52px;
            background: #534AB7;
            border-radius: 14px;
            display: inline-flex; align-items: center; justify-content: center;
            margin-bottom: 10px;
        }
        .logo-area .icon i { color: #fff; font-size: 26px; }
        .logo-area h1 { color: #fff; font-size: 18px; font-weight: 600; letter-spacing: 0.02em; }
        .logo-area p { color: #8b8fa8; font-size: 13px; margin-top: 3px; }

        .card {
            background: #1a1d27;
            border: 1px solid #2a2d3e;
            border-radius: 16px;
            padding: 2rem 1.75rem;
            width: 100%;
            max-width: 420px;
        }

        .social-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 1.25rem;
        }
        .btn-social {
            height: 40px;
            background: #23263a;
            border: 1px solid #2a2d3e;
            border-radius: 10px;
            color: #aab0c8;
            font-size: 13px;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 7px;
            transition: border-color 0.15s, color 0.15s;
        }
        .btn-social:hover { border-color: #7F77DD; color: #fff; }
        .btn-social i { font-size: 17px; }

        .or-row {
            display: flex; align-items: center; gap: 10px;
            margin-bottom: 1.25rem;
        }
        .or-row hr { flex: 1; border: none; border-top: 1px solid #2a2d3e; }
        .or-row span { font-size: 12px; color: #555870; white-space: nowrap; }

        .field { margin-bottom: 1rem; }
        .label {
            display: flex; align-items: center; gap: 6px;
            font-size: 11px; font-weight: 600;
            color: #6b7090;
            margin-bottom: 7px;
            text-transform: uppercase; letter-spacing: 0.06em;
        }
        .label i { font-size: 14px; }

        .input-wrap { position: relative; }
        .input-wrap input {
            width: 100%; height: 42px;
            padding: 0 40px 0 14px;
            background: #23263a;
            border: 1px solid #2a2d3e;
            border-radius: 10px;
            color: #e2e4f0;
            font-size: 14px;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
        }
        .input-wrap input::placeholder { color: #444760; }
        .input-wrap input:focus {
            border-color: #7F77DD;
            box-shadow: 0 0 0 3px rgba(127,119,221,0.15);
        }
        .input-wrap .icon-right {
            position: absolute; right: 12px; top: 50%;
            transform: translateY(-50%);
            color: #555870; font-size: 17px; cursor: pointer;
        }

        .check-row {
            display: flex; align-items: center; gap: 9px;
            margin: 0.5rem 0 1.25rem;
        }
        .check-row input[type=checkbox] {
            width: 16px; height: 16px;
            accent-color: #534AB7; cursor: pointer;
        }
        .check-row label { font-size: 13px; color: #8b8fa8; cursor: pointer; }

        .btn-primary {
            width: 100%; height: 44px;
            background: #534AB7;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 14px; font-weight: 600;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            transition: background 0.15s, transform 0.1s;
            letter-spacing: 0.02em;
        }
        .btn-primary:hover { background: #3C3489; }
        .btn-primary:active { transform: scale(0.98); }

        .footer-links {
            text-align: center;
            margin-top: 1.25rem;
            display: flex; flex-direction: column; gap: 6px;
        }
        .footer-links a { color: #7F77DD; font-size: 13px; text-decoration: none; }
        .footer-links a:hover { text-decoration: underline; }
        .footer-links span { color: #555870; font-size: 13px; }
    </style>
</head>
<body>

    <div class="logo-area">
        <div class="icon"><i class="ti ti-briefcase"></i></div>
        <h1>PORTAL DE EMPLEO</h1>
        <p>Encuentra tu próxima oportunidad</p>
    </div>

    <div class="card">

        <div class="social-row">
            <button class="btn-social" type="button">
                <i class="ti ti-brand-google"></i> Google
            </button>
            <button class="btn-social" type="button">
                <i class="ti ti-brand-linkedin"></i> LinkedIn
            </button>
        </div>

        <div class="or-row">
            <hr><span>o ingresa con tu correo</span><hr>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <div class="label"><i class="ti ti-mail"></i> Correo electrónico</div>
                <div class="input-wrap">
                    <input type="email" name="email" placeholder="tu@correo.com"
                           value="{{ old('email') }}" required autofocus />
                    <i class="ti ti-mail icon-right"></i>
                </div>
                @error('email')
                    <p style="color:#E24B4A; font-size:12px; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <div class="label"><i class="ti ti-lock"></i> Contraseña</div>
                <div class="input-wrap">
                    <input type="password" name="password" id="password" placeholder="••••••••" required />
                    <i class="ti ti-eye icon-right" onclick="togglePassword()"></i>
                </div>
                @error('password')
                    <p style="color:#E24B4A; font-size:12px; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            <div class="check-row">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <label for="remember">Mantener sesión iniciada</label>
            </div>

            <button class="btn-primary" type="submit">
                <i class="ti ti-login"></i> Iniciar sesión
            </button>
        </form>

        <div class="footer-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
            @endif
            <span>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate gratis</a></span>
        </div>

    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>