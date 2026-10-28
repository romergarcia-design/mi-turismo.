
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pastelería La Espiga</title>
</head>
<body>
    <h1>Pastelería La Espiga</h1>

    <h2>Lista de tortas</h2>

    <a href="/tortas/nuevo">Registrar nueva torta</a>

    @foreach ($tortas as $torta)
        <p>
            Sabor: {{ $torta->sabor }}
            - Precio: Bs {{ $torta->precio }}
        </p>
    @endforeach

    <footer>
        Romer Garcia Cisneros
    </footer>
</body>
</html>
