<x-layout>

    <h1>Lista de Veículos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Matrícula</th>
            <th>Detalhes</th>
        </tr>
        
        @foreach ($cars as $car)
        <tr>
            <td> {{ $car->id }} </td>
            <td> {{ $car->marca }} </td>
            <td> {{ $car->modelo }} </td>
            <td> {{ $car->matricula }} </td>
            <td> <a href=" {{ route('details', $car->id) }}">Mostrar</a> </td>
        </tr>
        @endforeach
    </table>

    <button onclick="window.location='{{ route('create') }}'">Adicionar novo veículo</button>

    {{ $cars -> links('vendor/pagination/simple-default') }}
</x-layout>