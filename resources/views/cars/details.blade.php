<x-layout>

    <h1> {{ $car->matricula }} </h1>
    <p> {{ $car->marca }} </p>
    <p> {{ $car->modelo }} </p>
    
    <a href="{{ route('edit', $car->id) }}">Editar</a>

    <form method="post" action="{{ route('destroy', $car) }}">
        @csrf 
        @method('DELETE')

        <button>Eliminar</button>
    </form>
</x-layout>