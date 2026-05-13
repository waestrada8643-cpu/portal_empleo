<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro — Portal de Empleo</title>
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
        .logo-area h1 { color: #fff; font-size: 18px; font-weight: 600; }
        .logo-area p { color: #8b8fa8; font-size: 13px; margin-top: 3px; }

        .card {
            background: #1a1d27;
            border: 1px solid #2a2d3e;
            border-radius: 16px;
            padding: 2rem 1.75rem;
            width: 100%;
            max-width: 480px;
        }

        .steps {
            display: flex; gap: 5px;
            margin-bottom: 1.5rem;
        }
        .step {
            flex: 1; height: 3px; border-radius: 2px;
            background: #2a2d3e;
        }
        .step.done { background: #534AB7; }
        .step.active { background: #7F77DD; }

        .section-title {
            font-size: 16px; font-weight: 600;
            color: #e2e4f0;
            margin-bottom: 1rem;
            display: flex; align-items: center; gap: 8px;
        }
        .section-title i { color: #7F77DD; font-size: 18px; }

        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }

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

        .divider {
            height: 1px; background: #2a2d3e;
            margin: 1.25rem 0;
        }

        .tag-label {
            font-size: 11px; font-weight: 600;
            color: #6b7090;
            text-transform: uppercase; letter-spacing: 0.06em;
            margin-bottom: 10px;
            display: flex; align-items: center; gap: 6px;
        }
        .tag-row { display: flex; flex-wrap: wrap; gap: 7px; margin-bottom: 1.25rem; }
        .tag {
            padding: 5px 14px;
            border-radius: 20px;
            border: 1px solid #2a2d3e;
            background: #23263a;
            color: #8b8fa8;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.15s;
        }
        .tag:hover { border-color: #7F77DD; color: #c4c1f5; }
        .tag.sel { background: #2e2a5a; border-color: #7F77DD; color: #c4c1f5; }

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
        }
        .btn-primary:hover { background: #3C3489; }
        .btn-primary:active { transform: scale(0.98); }

        .footer-links {
            text-align: center; margin-top: 1.25rem;
        }
        .footer-links span { color: #555870; font-size: 13px; }
        .footer-links a { color: #7F77DD; font-size: 13px; text-decoration: none; }
        .footer-links a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="logo-area">
        <div class="icon"><i class="ti ti-briefcase"></i></div>
        <h1>PORTAL DE EMPLEO</h1>
        <p>Crea tu cuenta y encuentra empleo hoy</p>
    </div>

    <div class="card">

        <div class="steps">
            <div class="step done"></div>
            <div class="step active"></div>
            <div class="step"></div>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="section-title">
                <i class="ti ti-user-circle"></i> Datos personales
            </div>

            <div class="grid-2">
                <div class="field">
                    <div class="label"><i class="ti ti-user"></i> Nombre</div>
                    <div class="input-wrap">
                        <input type="text" name="name" placeholder="Ana" value="{{ old('name') }}" required />
                        <i class="ti ti-user icon-right"></i>
                    </div>
                    @error('name')
                        <p style="color:#E24B4A; font-size:12px; margin-top:5px;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <div class="label"><i class="ti ti-user"></i> Apellido</div>
                    <div class="input-wrap">
                        <input type="text" name="lastname" placeholder="García" value="{{ old('lastname') }}" />
                        <i class="ti ti-user icon-right"></i>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="label"><i class="ti ti-mail"></i> Correo electrónico</div>
                <div class="input-wrap">
                    <input type="email" name="email" placeholder="tu@correo.com" value="{{ old('email') }}" required />
                    <i class="ti ti-mail icon-right"></i>
                </div>
                @error('email')
                    <p style="color:#E24B4A; font-size:12px; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            <div class="divider"></div>

            <div class="section-title">
                <i class="ti ti-lock"></i> Seguridad
            </div>

            <div class="grid-2">
                <div class="field">
                    <div class="label"><i class="ti ti-lock"></i> Contraseña</div>
                    <div class="input-wrap">
                        <input type="password" name="password" id="pw1" placeholder="••••••••" required />
                        <i class="ti ti-eye icon-right" onclick="togglePw('pw1', this)"></i>
                    </div>
                    @error('password')
                        <p style="color:#E24B4A; font-size:12px; margin-top:5px;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <div class="label"><i class="ti ti-lock-check"></i> Confirmar</div>
                    <div class="input-wrap">
                        <input type="password" name="password_confirmation" id="pw2" placeholder="••••••••" required />
                        <i class="ti ti-eye icon-right" onclick="togglePw('pw2', this)"></i>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="tag-label"><i class="ti ti-tag"></i> Área de interés</div>
            <div class="tag-row">
                <span class="tag sel" onclick="this.classList.toggle('sel')">Tecnología</span>
                <span class="tag" onclick="this.classList.toggle('sel')">Diseño</span>
                <span class="tag" onclick="this.classList.toggle('sel')">Marketing</span>
                <span class="tag" onclick="this.classList.toggle('sel')">Finanzas</span>
                <span class="tag" onclick="this.classList.toggle('sel')">Salud</span>
                <span class="tag" onclick="this.classList.toggle('sel')">Educación</span>
                <span class="tag" onclick="this.classList.toggle('sel')">Ventas</span>
            </div>

            <button class="btn-primary" type="submit">
                <i class="ti ti-user-plus"></i> Crear cuenta gratuita
            </button>
        </form>

        <div class="footer-links">
            <span>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></span>
        </div>

    </div>

    <script>
        function togglePw(id, icon) {
            const input = document.getElementById(id);
            input.type = input.type === 'password' ? 'text' : 'password';
            icon.className = input.type === 'password' ? 'ti ti-eye icon-right' : 'ti ti-eye-off icon-right';
        }
    </script>
</body>
</html>