<!DOCTYPE html>
<html lang="es" id="html-theme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Santivañez</title>
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
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 1rem;
            display: grid;
            gap: 2rem;
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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px var(--card-shadow);
            display: flex;
            flex-direction: column;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .card-content {
            padding: 1.5rem;
            display: grid;
            gap: 0.6rem;
        }

        .card-content h3 {
            color: var(--accent);
        }

        .card-content p {
            color: var(--text-secondary);
        }

        footer {
            text-align: center;
            padding: 1.5rem 1rem;
            background: #1f7a33;
            color: #fff;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Turismo Santivañez</h1>
        <p>Descubre la naturaleza, cultura y tradiciones de nuestro municipio</p>
    </header>

        <        nav>
            <a href="/">Inicio</a>
            <a href="/#atractivos">Atractivos turísticos</a>
            <a href="/contacto">Contacto</a>
            @auth
                <span>{{ Auth::user()->name }}</span>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            @else
                <a href="/login">Login</a>
                <a href="/registro">Registro</a>
            @endauth
            <button class="theme-toggle" onclick="toggleTheme()" id="themeBtn">🌙 Noche</button>
        </nav>

    <main>
        <section class="hero">
            <h2>Bienvenidos a Santivañez</h2>
            <p>
                Santivañez te invita a vivir experiencias únicas entre cascadas, miradores, represas y el calidez de su
                gente. Un destino ideal para el ecoturismo y el relax.
            </p>
        </section>

        <section id="atractivos">
            <h2 style="color: #1f7a33; margin-bottom: 1rem;">Atractivos turísticos</h2>
            <div class="grid">
                <article class="card">
                    <div class="card-content">
                        <h3>Cascada Dique</h3>
                        <p>Un hermoso salto de agua rodeado de vegetación, perfecto para tomar fotos y disfrutar de la
                            naturaleza.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-content">
                        <h3>Mirador de Santivañez</h3>
                        <p>Desde aquí se aprecia una vista panorámica del valle y los paisajes que caracterizan al
                            municipio.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-content">
                        <h3>Cascada Pampa Churigua</h3>
                        <p>Ideal para los amantes del senderismo, con un recorrido rodeado de flora nativa y aguas
                            cristalinas.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-content">
                        <h3>Represa de San Martín</h3>
                        <p>Espacio perfecto para paseos, avistamiento de aves y disfrutar de un día tranquilo junto a la
                            represa.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-content">
                        <h3>Hacienda Londo</h3>
                        <p>Un sitio con historia que permite conocer el pasado productivo del municipio y su riqueza
                            patrimonial.</p>
                    </div>
                </article>
            </div>
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
