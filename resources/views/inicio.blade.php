<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Empleo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; }

        .hero { background: #0f1117; position: relative; overflow: hidden; }
        canvas#particles {
            position: absolute; top: 0; left: 0;
            width: 100%; height: 100%;
            pointer-events: none; z-index: 0;
        }
        .nav {
            position: relative; z-index: 2;
            display: flex; align-items: center; justify-content: space-between;
            padding: 1.1rem 3rem; border-bottom: 1px solid #2a2d3e;
        }
        .nav-brand { display: flex; align-items: center; gap: 10px; }
        .nav-brand .icon {
            width: 34px; height: 34px; background: #534AB7;
            border-radius: 9px; display: flex; align-items: center; justify-content: center;
        }
        .nav-brand .icon i { color: #fff; font-size: 18px; }
        .nav-brand span { color: #fff; font-size: 15px; font-weight: 600; }
        .nav-links { display: flex; align-items: center; gap: 24px; }
        .nav-links a { color: #8b8fa8; font-size: 13px; text-decoration: none; transition: color 0.15s; }
        .nav-links a:hover { color: #fff; }
        .btn-login {
            background: transparent; border: 1px solid #2a2d3e;
            color: #c4c1f5; border-radius: 8px; padding: 6px 16px;
            font-size: 13px; cursor: pointer; transition: all 0.15s;
            text-decoration: none;
        }
        .btn-login:hover { border-color: #7F77DD; color: #fff; }
        .btn-reg {
            background: #534AB7; border: none;
            color: #fff; border-radius: 8px; padding: 6px 16px;
            font-size: 13px; cursor: pointer; transition: background 0.15s;
            text-decoration: none;
        }
        .btn-reg:hover { background: #3C3489; }

        .hero-body {
            position: relative; z-index: 2;
            text-align: center; padding: 4rem 2rem 3rem;
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 7px;
            background: #1e1b3a; border: 1px solid #3d3780;
            color: #c4c1f5; font-size: 12px; padding: 5px 14px;
            border-radius: 20px; margin-bottom: 1.5rem;
        }
        .hero-title {
            font-size: 42px; font-weight: 700; color: #fff;
            line-height: 1.2; margin-bottom: 1rem;
        }
        .hero-title span { color: #7F77DD; }
        .hero-sub {
            font-size: 16px; color: #8b8fa8;
            max-width: 500px; margin: 0 auto 2rem; line-height: 1.7;
        }
        .search-bar {
            display: flex; align-items: center;
            background: #1a1d27; border: 1px solid #2a2d3e;
            border-radius: 12px; padding: 6px 6px 6px 16px;
            max-width: 540px; margin: 0 auto 2rem;
        }
        .search-bar i { color: #555870; font-size: 18px; margin-right: 10px; }
        .search-bar input {
            flex: 1; background: transparent; border: none; outline: none;
            color: #e2e4f0; font-size: 14px;
        }
        .search-bar input::placeholder { color: #444760; }
        .search-bar button {
            background: #534AB7; color: #fff; border: none;
            border-radius: 8px; padding: 10px 20px;
            font-size: 13px; font-weight: 600; cursor: pointer;
            display: flex; align-items: center; gap: 6px;
            transition: background 0.15s;
        }
        .search-bar button:hover { background: #3C3489; }
        .hero-stats {
            display: flex; justify-content: center; gap: 3rem;
            padding-bottom: 3rem;
        }
        .stat .num { font-size: 24px; font-weight: 700; color: #fff; }
        .stat .lbl { font-size: 12px; color: #555870; margin-top: 3px; }

        .tipo-section { background: #13151f; padding: 3rem 2rem; }
        .tipo-grid {
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 20px; max-width: 700px; margin: 0 auto;
        }
        .tipo-card {
            background: #1a1d27; border: 1px solid #2a2d3e;
            border-radius: 16px; padding: 2.5rem 1.5rem;
            text-align: center; cursor: pointer;
            transition: border-color 0.2s, transform 0.2s;
        }
        .tipo-card.purple:hover { border-color: #7F77DD; transform: translateY(-4px); }
        .tipo-card.green:hover  { border-color: #1D9E75; transform: translateY(-4px); }
        .tipo-icon {
            width: 64px; height: 64px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 1.25rem; font-size: 28px;
        }
        .tipo-icon.purple { background: #2e2a5a; color: #7F77DD; }
        .tipo-icon.green  { background: #0d2e24; color: #1D9E75; }
        .tipo-card h3 { font-size: 18px; font-weight: 700; color: #fff; margin-bottom: 8px; }
        .tipo-card p  { font-size: 13px; color: #8b8fa8; margin-bottom: 1.5rem; line-height: 1.6; }
        .tipo-btn {
            display: inline-flex; align-items: center; gap: 7px;
            color: #fff; border: none; border-radius: 8px;
            padding: 10px 22px; font-size: 13px; font-weight: 600;
            text-decoration: none; transition: background 0.15s;
        }
        .tipo-btn.purple { background: #534AB7; }
        .tipo-btn.purple:hover { background: #3C3489; }
        .tipo-btn.green  { background: #0F6E56; }
        .tipo-btn.green:hover  { background: #085041; }

        .light-section { background: #f8f9fc; padding: 4rem 3rem; }
        .section-header { text-align: center; margin-bottom: 2.5rem; }
        .section-header h2 { font-size: 26px; font-weight: 700; color: #1a1d27; margin-bottom: 8px; }
        .section-header p  { font-size: 14px; color: #6b7090; }
        .cards-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px; max-width: 900px; margin: 0 auto;
        }
        .card {
            background: #fff; border: 1px solid #e8e9f0;
            border-radius: 14px; padding: 1.5rem 1.25rem;
            transition: border-color 0.2s, transform 0.2s;
        }
        .card:hover { border-color: #7F77DD; transform: translateY(-3px); }
        .card .cicon {
            width: 44px; height: 44px; border-radius: 11px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 14px; font-size: 22px;
        }
        .cicon.purple { background: #EEEDFE; color: #534AB7; }
        .cicon.teal   { background: #E1F5EE; color: #0F6E56; }
        .cicon.amber  { background: #FAEEDA; color: #854F0B; }
        .cicon.coral  { background: #FAECE7; color: #993C1D; }
        .card h3 { font-size: 15px; font-weight: 600; color: #1a1d27; margin-bottom: 6px; }
        .card p  { font-size: 13px; color: #6b7090; line-height: 1.6; }

        .cta-section { background: #0f1117; padding: 4rem 2rem; text-align: center; }
        .cta-section h2 { font-size: 26px; font-weight: 700; color: #fff; margin-bottom: 10px; }
        .cta-section p  { font-size: 15px; color: #8b8fa8; margin-bottom: 2rem; }
        .cta-btns { display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; }
        .btn-main {
            background: #534AB7; color: #fff; border: none;
            border-radius: 10px; padding: 13px 30px;
            font-size: 14px; font-weight: 600; cursor: pointer;
            display: inline-flex; align-items: center; gap: 8px;
            transition: background 0.15s; text-decoration: none;
        }
        .btn-main:hover { background: #3C3489; }
        .btn-ghost {
            background: transparent; color: #c4c1f5;
            border: 1px solid #2a2d3e; border-radius: 10px;
            padding: 13px 30px; font-size: 14px; cursor: pointer;
            transition: border-color 0.15s; text-decoration: none;
        }
        .btn-ghost:hover { border-color: #7F77DD; color: #fff; }

        .footer {
            background: #080a10; padding: 1.5rem 3rem;
            display: flex; align-items: center; justify-content: space-between;
            border-top: 1px solid #1a1d27; flex-wrap: wrap; gap: 10px;
        }
        .footer span { font-size: 12px; color: #444760; }
        .footer-links { display: flex; gap: 20px; }
        .footer-links a { font-size: 12px; color: #555870; text-decoration: none; }
        .footer-links a:hover { color: #7F77DD; }
    </style>
</head>
<body>

    <!-- HERO CON PARTÍCULAS -->
    <div class="hero">
        <canvas id="particles"></canvas>

        <nav class="nav">
            <div class="nav-brand">
                <div class="icon"><i class="ti ti-briefcase"></i></div>
                <span>Portal de Empleo</span>
            </div>
            <div class="nav-links">
                <a href="{{ route('inicio') }}">Inicio</a>
                <a href="#">Servicios</a>
                <a href="{{ route('nosotros') }}">Nosotros</a>
                <a href="{{ route('contacto.index') }}">Contacto</a>
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline">
                        @csrf
                        <button type="submit" class="btn-login">Cerrar sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-login">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="btn-reg">Registro</a>
                @endauth
            </div>
        </nav>

        <div class="hero-body">
            <div class="hero-badge">
                <i class="ti ti-sparkles" style="font-size:14px"></i>
                Tu próxima oportunidad te espera
            </div>
            <h1 class="hero-title">
                Encuentra el empleo<br><span>perfecto para ti</span>
            </h1>
            <p class="hero-sub">
                Conectamos talento con las mejores empresas. Miles de oportunidades laborales en un solo lugar.
            </p>
            <div class="search-bar">
                <i class="ti ti-search"></i>
                <input type="text" placeholder="Cargo, empresa o área de trabajo..." />
                <button type="button">
                    <i class="ti ti-search"></i> Buscar
                </button>
            </div>
        </div>
    </div>

    <!-- BUSCO EMPLEO / BUSCO CANDIDATOS -->
    <div class="tipo-section">
        <div style="text-align:center; margin-bottom:2rem;">
            <h2 style="font-size:22px; font-weight:700; color:#fff; margin-bottom:8px;">¿Qué estás buscando?</h2>
            <p style="font-size:14px; color:#8b8fa8;">Elige tu perfil y te ayudamos a encontrar lo que necesitas</p>
        </div>
        <div class="tipo-grid">
            <div class="tipo-card purple">
                <div class="tipo-icon purple">
                    <i class="ti ti-briefcase"></i>
                </div>
                <h3>Busco empleo</h3>
                <p>Miles de trabajos esperan por ti. Crea tu perfil y aplica fácilmente.</p>
                <a href="{{ route('register') }}" class="tipo-btn purple">
                    <i class="ti ti-arrow-right"></i> Comenzar
                </a>
            </div>
            <div class="tipo-card green">
                <div class="tipo-icon green">
                    <i class="ti ti-user-search"></i>
                </div>
                <h3>Busco candidatos</h3>
                <p>Encuentra el talento ideal para tu empresa de forma rápida y sencilla.</p>
                <a href="{{ route('register') }}" class="tipo-btn green">
                    <i class="ti ti-arrow-right"></i> Comenzar
                </a>
            </div>
        </div>
    </div>

    <!-- SERVICIOS -->
    <div class="light-section">
        <div class="section-header">
            <h2>¿Por qué elegirnos?</h2>
            <p>Todo lo que necesitas para encontrar trabajo en un solo lugar</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="cicon purple"><i class="ti ti-users"></i></div>
                <h3>Trabajo en equipo</h3>
                <p>La colaboración es clave para el éxito profesional en cualquier industria.</p>
            </div>
            <div class="card">
                <div class="cicon teal"><i class="ti ti-microphone"></i></div>
                <h3>Entrevista laboral</h3>
                <p>Consejos prácticos para destacar en tus entrevistas y conseguir el trabajo.</p>
            </div>
            <div class="card">
                <div class="cicon amber"><i class="ti ti-building"></i></div>
                <h3>Oficina moderna</h3>
                <p>Un entorno laboral cómodo, eficiente y adaptado a tus necesidades.</p>
            </div>
            <div class="card">
                <div class="cicon coral"><i class="ti ti-certificate"></i></div>
                <h3>Capacitación profesional</h3>
                <p>Talleres y cursos para fortalecer tus competencias y crecer laboralmente.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta-section">
        <h2>¿Listo para dar el siguiente paso?</h2>
        <p>Crea tu cuenta gratis y empieza a aplicar a empleos hoy mismo</p>
        <div class="cta-btns">
            <a href="{{ route('register') }}" class="btn-main">
                <i class="ti ti-user-plus"></i> Crear cuenta gratis
            </a>
            <a href="#" class="btn-ghost">Ver empleos disponibles</a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <span>© {{ date('Y') }} Portal de Empleo. Todos los derechos reservados.</span>
        <div class="footer-links">
            <a href="#">Privacidad</a>
            <a href="#">Términos</a>
            <a href="{{ route('contacto.index') }}">Contacto</a>
        </div>
    </footer>

    <!-- PARTÍCULAS -->
    <script>
        const canvas = document.getElementById('particles');
        const ctx = canvas.getContext('2d');
        let particles = [];
        let W, H;

        function resize() {
            W = canvas.width = canvas.offsetWidth;
            H = canvas.height = canvas.offsetHeight;
        }

        function randomBetween(a, b) { return a + Math.random() * (b - a); }

        function createParticles() {
            particles = [];
            const count = Math.floor((W * H) / 9000);
            for (let i = 0; i < count; i++) {
                particles.push({
                    x: randomBetween(0, W),
                    y: randomBetween(0, H),
                    r: randomBetween(1, 2.5),
                    vx: randomBetween(-0.3, 0.3),
                    vy: randomBetween(-0.3, 0.3),
                    alpha: randomBetween(0.2, 0.7),
                    color: Math.random() > 0.5 ? '127,119,221' : '83,74,183'
                });
            }
        }

        function drawLines() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 100) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(127,119,221,${0.15 * (1 - dist / 100)})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            ctx.clearRect(0, 0, W, H);
            drawLines();
            particles.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > W) p.vx *= -1;
                if (p.y < 0 || p.y > H) p.vy *= -1;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(${p.color},${p.alpha})`;
                ctx.fill();
            });
            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', () => { resize(); createParticles(); });
        resize();
        createParticles();
        animate();
    </script>

</body>
</html>