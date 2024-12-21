<x-layout>
    <h1>Lista de Veículos</h1>

    <!-- Estrutura da tabela que irá listar todos os veículos -->
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Matrícula</th>
            <th>Detalhes</th>
        </tr>

        <!-- Cria uma nova linha na tabela por cada veículo existente -->
        @foreach ($veiculos as $veiculo)
        <tr>
            <td> {{ $veiculo->id }} </td>
            <td> {{ $veiculo->marca }} </td>
            <td> {{ $veiculo->modelo }} </td>
            <td> {{ $veiculo->matricula }} </td>
            <!-- Hiperligação para aceder aos detalhes de um veículo específico -->
            <td> <a href="{{ route('veiculo.detalhes', $veiculo->id) }}">Mostrar</a> </td>
        </tr>
        @endforeach
    </table>

    <!-- Paginação e respetiva estilização da tabela -->
    {{ $veiculos->links('vendor/pagination/semantic-ui') }}
</x-layout>