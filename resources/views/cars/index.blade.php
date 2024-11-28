<x-layout>

    <h1>Carros<h1>

    @foreach ($cars as $car)
        <h2> {{ $car->matricula }}</h2>
        <p> {{ $car->marca }}</p>
        <p> {{ $car->modelo }}</p>
        <a href=" {{ route('details', $car->id) }}">Mostrar</a>
    @endforeach

    <a href="{{ route('create') }}">Adicionar novo carro</a>

    {{ $cars -> links('vendor/pagination/simple-default') }}
</x-layout>