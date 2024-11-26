<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <h1>Carros<h1>

    @foreach ($cars as $car)
        <h2> {{ $car->matricula }}</h2>
        <p> {{ $car->marca }}</p>
        <p> {{ $car->modelo }}</p>
        <a href=" {{ route('details', $car->id) }}">Mostrar</a>
    @endforeach

    <a href="{{ route('create') }}">Adicionar novo carro</a>

</body>
</html>