
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar torta - La Espiga</title>
</head>
<body>
    <h1>Pastelería La Espiga</h1>
    <h2>Registrar una torta</h2>

    <form action="/tortas/nuevo" method="POST">
        @csrf

        <label for="sabor">Sabor de la torta:</label>
        <input type="text" id="sabor" name="sabor"
               value="{{ old('sabor') }}">
        @error('sabor')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio"
               value="{{ old('precio') }}">
        @error('precio')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Guardar torta</button>
    </form>

    <p><a href="/tortas">Volver a la lista</a></p>

    <footer>Romer Garcia Cisneros</footer>
</body>
</html>
