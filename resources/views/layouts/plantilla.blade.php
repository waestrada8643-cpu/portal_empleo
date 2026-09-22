<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Portal de Empleo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('contacto.css') }}">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0f1117;
            color: #e2e4f0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        .main-nav {
            background: #0f1117;
            border-bottom: 1px solid #2a2d3e;
            padding: 1.5rem 3.8rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .nav-brand {
            display: flex; align-items: center; gap: 12px;
            text-decoration: none;
        }
        .nav-brand .icon {
            width: 42px; height: 42px; background: #534AB7;
            border-radius: 12px; display: flex; align-items: center; justify-content: center;
        }
        .nav-brand .icon i { color: #fff; font-size: 20px; }
        .nav-brand span { color: #fff; font-size: 17px; font-weight: 700; }
        .nav-links {
            display: flex; align-items: center; gap: 32px;
        }
        .nav-links a {
            color: #8b8fa8; font-size: 16px; text-decoration: none;
            transition: color 0.15s, background 0.15s, border-color 0.15s, box-shadow 0.15s;
            padding: 8px 12px;
            border-radius: 10px;
            border: 1px solid transparent;
        }
        .nav-links a:hover { color: #fff; }
        .nav-links a.active {
            color: #fff;
            background: rgba(124, 58, 237, 0.12);
            border-color: rgba(161, 140, 255, 0.35);
            box-shadow: inset 0 0 0 1px rgba(124, 58, 237, 0.14);
        }
        .btn-login {
            background: transparent; border: 1px solid #2a2d3e;
            color: #c4c1f5; border-radius: 12px; padding: 11px 24px;
            font-size: 15px; cursor: pointer; transition: all 0.15s;
            text-decoration: none;
        }
        .btn-login:hover { border-color: #7F77DD; color: #fff; }
        .btn-reg {
            background: transparent; border: 1px solid #2a2d3e;
            color: #fff; border-radius: 12px; padding: 11px 22px;
            font-size: 15px; cursor: pointer; transition: background 0.15s;
            text-decoration: none;
        }
        .btn-reg:hover { background: #534AB7; }
        .btn-reg.active {
            background: #534AB7;
            border-color: #534AB7;
        }
        .btn-logout {
            background: transparent; border: 1px solid #2a2d3e;
            color: #c4c1f5; border-radius: 8px; padding: 6px 16px;
            font-size: 13px; cursor: pointer; transition: all 0.15s;
        }
        .btn-logout:hover { border-color: #E24B4A; color: #E24B4A; }

        /* CONTENIDO */
        .main-content {
            flex: 1;
            padding: 3rem;
        }

        /* FOOTER */
        .main-footer {
            background: #080a10;
            border-top: 1px solid #1a1d27;
            padding: 1.5rem 3rem;
            display: flex; align-items: center; justify-content: space-between;
            flex-wrap: wrap; gap: 10px;
        }
        .main-footer span { font-size: 12px; color: #444760; }
        .footer-links { display: flex; gap: 20px; }
        .footer-links a { font-size: 12px; color: #555870; text-decoration: none; }
        .footer-links a:hover { color: #7F77DD; }

        /* NAVBAR MOBILE */
        .nav-toggle {
            display: none; background: none; border: 1px solid #2a2d3e;
            color: #8b8fa8; border-radius: 8px; padding: 6px 10px;
            cursor: pointer; font-size: 18px;
        }
        @media (max-width: 768px) {
            .main-nav { padding: 0.9rem 1.5rem; }
            .nav-toggle { display: block; }
            .nav-links {
                display: none; flex-direction: column;
                position: absolute; top: 60px; left: 0; right: 0;
                background: #13151f; border-bottom: 1px solid #2a2d3e;
                padding: 1rem 1.5rem; gap: 14px; z-index: 99;
            }
            .nav-links.open { display: flex; }
            .main-content { padding: 2rem 1.5rem; }
            .main-footer { padding: 1.5rem; flex-direction: column; text-align: center; }
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- NAVBAR -->
    <nav class="main-nav">
        <a class="nav-brand" href="{{ route('inicio') }}">
            <div class="icon"><i class="ti ti-briefcase"></i></div>
            <span>Portal de Empleo</span>
        </a>

        <button class="nav-toggle" onclick="document.getElementById('navLinks').classList.toggle('open')">
            <i class="ti ti-menu-2"></i>
        </button>

        <div class="nav-links" id="navLinks">
            <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
            <a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Servicios</a>
            <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
            <a href="{{ route('contacto.index') }}" class="{{ request()->routeIs('contacto.index') ? 'active' : '' }}">Contacto</a>

            @guest
                <a href="{{ route('register') }}" class="btn-reg {{ request()->routeIs('register') ? 'active' : '' }}">Registro</a>
                <a href="{{ route('login') }}" class="btn-login {{ request()->routeIs('login') ? 'active' : '' }}">Iniciar sesión</a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" style="display:inline">
                    @csrf
                    <button type="submit" class="btn-logout">Cerrar sesión</button>
                </form>
            @endauth
        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="main-footer">
        <span>© {{ date('Y') }} Proyecto Académico — Programación Avanzada</span>
        <div class="footer-links">
            <a href="#">Privacidad</a>
            <a href="#">Términos</a>
            <a href="{{ route('contacto.index') }}">Contacto</a>
        </div>
    </footer>

    <script>
        (function () {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    @yield('scripts')
</body>
</html>