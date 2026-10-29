<!DOCTYPE html>
<html lang="es" id="html-theme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Turismo Santivañez')</title>
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
            --accent-hover: #166534;
            --text-secondary: #4b5563;
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
            --accent-hover: #16a34a;
            --text-secondary: #9ca3af;
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            transition: background 0.3s ease, color 0.3s ease;
        }

        header {
            background: linear-gradient(135deg, var(--header-bg-start) 0%, var(--header-bg-end) 100%);
            color: #fff;
            text-align: center;
            padding: 2.5rem 1rem;
        }

        header h1 {
            font-size: 2rem;
        }

        header p {
            margin-top: 0.5rem;
            opacity: 0.9;
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
        }

        nav a:hover,
        nav a.activo {
            text-decoration: underline;
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
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 1rem;
            display: grid;
            gap: 2rem;
            flex: 1;
        }

        main.angosto {
            max-width: 800px;
        }

        .hero {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 30px var(--card-shadow);
            padding: 2rem;
            text-align: center;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .hero h2 {
            color: var(--accent);
            margin-bottom: 0.8rem;
        }

        .hero .btn {
            margin-top: 1.2rem;
        }

        .seccion-titulo {
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 30px var(--card-shadow);
            padding: 1.5rem;
            display: grid;
            gap: 0.6rem;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card h3 {
            color: var(--accent);
        }

        .card p {
            color: var(--text-secondary);
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

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            background: var(--accent);
            color: #fff;
            text-decoration: none;
            padding: 0.8rem 1.6rem;
            border: none;
            border-radius: 999px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            justify-self: start;
        }

        .btn:hover {
            background: var(--accent-hover);
        }

        .formulario {
            display: grid;
            gap: 0.8rem;
        }

        .campo {
            display: grid;
            gap: 0.4rem;
        }

        .campo input,
        .campo textarea {
            padding: 0.6rem;
            border: 1px solid var(--input-border);
            border-radius: 8px;
            background: var(--card-bg);
            color: var(--text);
            font-family: inherit;
            font-size: 1rem;
        }

        .alerta {
            padding: 1rem;
            border-radius: 8px;
        }

        .alerta-exito {
            background: #dcfce7;
            color: #166534;
        }

        .alerta-error {
            background: #fee2e2;
            color: #991b1b;
        }

        .alerta-error ul {
            margin-left: 1.2rem;
        }

        footer {
            text-align: center;
            padding: 1.5rem 1rem;
            background: var(--nav-bg);
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>@yield('titulo', 'Turismo Santivañez')</h1>
        <p>@yield('subtitulo', 'Descubre la naturaleza, cultura y tradiciones de nuestro municipio')</p>
    </header>

    <nav>
        <a href="/" class="{{ request()->is('/') || request()->is('inicio') ? 'activo' : '' }}">Inicio</a>
        <a href="/#atractivos">Atractivos turísticos</a>
        <a href="/contacto" class="{{ request()->is('contacto') ? 'activo' : '' }}">Contacto</a>
        <button class="theme-toggle" onclick="toggleTheme()" id="themeBtn">Noche</button>
    </nav>

    <main class="@yield('ancho')">
        @yield('contenido')
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
                btn.textContent = 'Noche';
            } else {
                html.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                btn.textContent = 'Día';
            }
        }

        (function () {
            const savedTheme = localStorage.getItem('theme');
            const html = document.getElementById('html-theme');
            const btn = document.getElementById('themeBtn');
            if (savedTheme === 'dark') {
                html.setAttribute('data-theme', 'dark');
                if (btn) btn.textContent = 'Día';
            }
        })();
    </script>
</body>

</html>
