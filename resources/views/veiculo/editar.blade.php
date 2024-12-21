<x-layout>
    <h1>Editar Veículo: {{ $veiculo->matricula }}</h1>

    <!-- Mostra as mensagens de erro de validação sobre o formulário -->
    <x-errors />

    <!-- Formulário para atualizar os dados de um veículo específico -->
    <form method="post" action=" {{ route('veiculo.atualizar', $veiculo) }} ">
        @method('PATCH')

        <x-form :veiculo="$veiculo" />
    </form>

    <!-- Voltar à página anterior (detalhes do veículo) -->
    <button onclick="window.location='{{ route('veiculo.detalhes', ['veiculo' => $veiculo->id]) }}'">Voltar à página anterior</button>
</x-layout>