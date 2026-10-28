<!DOCTYPE html>
<html lang="es" id="html-theme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Turismo Santivañez</title>
    <style>
        :root {
            --bg: #f5f7f5;
            --text: #1f2937;
            --card-bg: #fff;
            --card-shadow: rgba(15, 23, 42, 0.08);
            --nav-bg: #1f7a33;
            --header-bg-start: #2f9e44;
            --header-bg-end: #1f7a33;
            --accent: #1f7a33;
            --input-border: #d1d5db;
        }

        [data-theme="dark"] {
            --bg: #0f1a14;
            --text: #e5e7eb;
            --card-bg: #1a2e22;
            --card-shadow: rgba(0, 0, 0, 0.4);
            --nav-bg: #14532d;
            --header-bg-start: #166534;
            --header-bg-end: #14532d;
            --accent: #22c55e;
            --input-border: #374151;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            transition: background 0.3s ease, color 0.3s ease;
        }

        header {
            background: linear-gradient(135deg, var(--header-bg-start) 0%, var(--header-bg-end) 100%);
            color: #fff;
            text-align: center;
            padding: 2.5rem 1rem;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.4rem 1.2rem;
            background: var(--nav-bg);
            padding: 0.5rem 1rem;
        }

        nav > * {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
            height: 34px;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            margin: 0;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav form {
            margin: 0;
            padding: 0;
        }

        nav form button {
            background: none;
            border: none;
            color: #fff;
            font-weight: bold;
            font-family: inherit;
            font-size: inherit;
            cursor: pointer;
            padding: 0;
            line-height: 1;
        }

        .theme-toggle {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0 0.8rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
            display: grid;
            gap: 1.5rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 30px var(--card-shadow);
            padding: 2rem;
            display: grid;
            gap: 1rem;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .card h2 {
            color: var(--accent);
        }

        .info {
            display: grid;
            gap: 0.6rem;
        }

        .info-item {
            background: rgba(47, 158, 68, 0.08);
            border-radius: 10px;
            padding: 1rem 1.2rem;
        }

        [data-theme="dark"] .info-item {
            background: rgba(34, 197, 94, 0.12);
        }

        footer {
            text-align: center;
            padding: 1.5rem 1rem;
            background: var(--nav-bg);
            color: #fff;
            margin-top: 2rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: #2f9e44;
            color: #fff;
            text-decoration: none;
            padding: 0.8rem 1.6rem;
            border-radius: 999px;
            font-weight: bold;
            justify-self: start;
        }

        .btn:hover {
            background: #1f7a33;
        }
    </style>
</head>

<body>
    <header>
        <h1>Contacto</h1>
        <p>Unidad de Turismo - Gobierno Autónomo Municipal de Santivañez</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/#atractivos">Atractivos turísticos</a>
        <a href="/contacto">Contacto</a>
        @auth
            <span>{{ Auth::user()->name }}</span>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" style="background:none;border:none;color:#fff;font-weight:bold;cursor:pointer;padding:0;">Salir</button>
            </form>
        @else
            <a href="/login">Login</a>
            <a href="/registro">Registro</a>
        @endauth
        <button class="theme-toggle" onclick="toggleTheme()" id="themeBtn">🌙 Noche</button>
    </nav>

    <main>
        <section class="card">
            <h2>Planifica tu visita</h2>
            <p>
                Si deseas más información sobre rutas, recomendaciones o cómo llegar a los atractivos turísticos de
                Santivañez, puedes contactarte con la Unidad de Turismo.
            </p>
            <div class="info">
                <div class="info-item">
                    <strong>Institución:</strong> Gobierno Autónomo Municipal de Santivañez - Unidad de Turismo
                </div>
                <div class="info-item">
                    <strong>Objetivo:</strong> Promover el desarrollo turístico sostenible del municipio
                </div>
                <div class="info-item">
                    <strong>Recomendación:</strong> Conoce nuestros atractivos y disfruta responsablemente de la
                    naturaleza
                </div>
            </div>

            @if(session('success'))
                <div style="background:#dcfce7;color:#166534;padding:1rem;border-radius:8px;">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div style="background:#fee2e2;color:#991b1b;padding:1rem;border-radius:8px;">
                    <ul style="margin-left:1.2rem;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contacto.enviar') }}" method="POST" style="display:grid;gap:0.8rem;">
                @csrf
                <div style="display:grid;gap:0.4rem;">
                    <label for="nombre"><strong>Nombre</strong></label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required style="padding:0.6rem;border:1px solid var(--input-border);border-radius:8px;background:var(--card-bg);color:var(--text);">
                </div>
                <div style="display:grid;gap:0.4rem;">
                    <label for="email"><strong>Correo electrónico</strong></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required style="padding:0.6rem;border:1px solid var(--input-border);border-radius:8px;background:var(--card-bg);color:var(--text);">
                </div>
                <div style="display:grid;gap:0.4rem;">
                    <label for="telefono"><strong>Teléfono</strong></label>
                    <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" style="padding:0.6rem;border:1px solid var(--input-border);border-radius:8px;background:var(--card-bg);color:var(--text);">
                </div>
                <div style="display:grid;gap:0.4rem;">
                    <label for="asunto"><strong>Asunto</strong></label>
                    <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" style="padding:0.6rem;border:1px solid var(--input-border);border-radius:8px;background:var(--card-bg);color:var(--text);">
                </div>
                <div style="display:grid;gap:0.4rem;">
                    <label for="mensaje"><strong>Mensaje</strong></label>
                    <textarea id="mensaje" name="mensaje" rows="5" required style="padding:0.6rem;border:1px solid var(--input-border);border-radius:8px;background:var(--card-bg);color:var(--text);">{{ old('mensaje') }}</textarea>
                </div>
                <button type="submit" class="btn" style="border:none;cursor:pointer;">Enviar mensaje</button>
            </form>

            <a class="btn" href="/">Volver al inicio</a>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Turismo Santivañez - Gobierno Autónomo Municipal de Santivañez</p>
    </footer>

    <script>
        function toggleTheme() {
            const html = document.getElementById('html-theme');
            const btn = document.getElementById('themeBtn');
            if (html.getAttribute('data-theme') === 'dark') {
                html.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
                btn.textContent = '🌙 Noche';
            } else {
                html.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                btn.textContent = '☀️ Día';
            }
        }

        (function() {
            const savedTheme = localStorage.getItem('theme');
            const html = document.getElementById('html-theme');
            const btn = document.getElementById('themeBtn');
            if (savedTheme === 'dark') {
                html.setAttribute('data-theme', 'dark');
                if (btn) btn.textContent = '☀️ Día';
            }
        })();
    </script>
</body>

</html>
