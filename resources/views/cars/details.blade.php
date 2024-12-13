<x-layout>

    <h1> Matrícula: {{ $car->matricula }} </h1>

    <h2>Informações Básicas</h2>
    <table>
        <tr>
            <th>Ano</th>
            <th>Modelo</th>
            <th>Versão</th>
            <th>Sub-modelo</th>
            <th>Nº de portas</th>
            <th>Cor</th>
        </tr>
        <tr>
            <td> {{ $car->ano }} </td>
            <td> {{ $car->modelo }} </td>
            <td> {{ $car->versao }} </td>
            <td> {{ $car->submodelo }} </td>
            <td> {{ $car->portas }} </td>
            <td> {{ $car->cor }} </td>
        </tr>
    </table>

    <h2>Especificações Técnicas</h2>
    <table>
        <tr>
            <th>Tracção</th>
            <th>Cilindrada</th>
            <th>Potência</th>
            <th>Tipo de Caixa</th>
            <th>Combustível</th>
            <th>Segmento</th>
            <th>Tipo de cor</th>
            <th>Classe do veículo</th>
        </tr>
        <tr>
            <td> {{ $car->traccao }} </td>
            <td> {{ $car->cilindrada }} </td>
            <td> {{ $car->potencia }} </td>
            <td> {{ $car->caixa }} </td>
            <td> {{ $car->combustivel }} </td>
            <td> {{ $car->segmento }} </td>
            <td> {{ $car->tipoCor }} </td>
            <td> {{ $car->classeVeiculo }} </td>
        </tr>
    </table>

    <h2>Histórico do Veículo</h2>
    <button onclick="window.location='{{ route('historico', $car->id) }}'">Ver Histórico</button>

    <button onclick="window.location='{{ route('edit', $car->id) }}'">Editar</button>
 
    <form method="post" action="{{ route('destroy', $car) }}">
        @csrf 
        @method('DELETE')

        <button>Eliminar</button>
    </form>

    <button onclick="window.location='{{ route('index') }}'">Voltar</button>
</x-layout>