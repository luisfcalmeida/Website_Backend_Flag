<x-layout>
    <h1>Detalhes do Veículo: {{ $veiculo->matricula }}</h1>

    <!-- Listagem das informações básicas do veículo -->
    <h2>Informações Básicas</h2>
    <ul class="info-list">
        <li><strong>Ano:</strong> {{ $veiculo->ano }}</li>
        <li><strong>Marca:</strong> {{ $veiculo->marca }}</li>
        <li><strong>Modelo:</strong> {{ $veiculo->modelo }}</li>
        <li><strong>Versão:</strong> {{ $veiculo->versao }}</li>
        <li><strong>Sub-modelo:</strong> {{ $veiculo->submodelo }}</li>
        <li><strong>Nº de Portas:</strong> {{ $veiculo->portas }}</li>
        <li><strong>Cor:</strong> {{ $veiculo->cor }}</li>
    </ul>

    <!-- Listagem das especificações técnicas do veículo -->
    <h2>Especificações Técnicas</h2>
    <ul class="info-list">
        <li><strong>Tracção:</strong> {{ $veiculo->traccao }}</li>
        <li><strong>Cilindrada:</strong> {{ $veiculo->cilindrada }}</li>
        <li><strong>Potência:</strong> {{ $veiculo->potencia }}</li>
        <li><strong>Tipo de Caixa:</strong> {{ $veiculo->caixa }}</li>
        <li><strong>Combustível:</strong> {{ $veiculo->combustivel }}</li>
        <li><strong>Segmento:</strong> {{ $veiculo->segmento }}</li>
        <li><strong>Tipo de Cor:</strong> {{ $veiculo->tipoCor }}</li>
        <li><strong>Classe do Veículo:</strong> {{ $veiculo->classeVeiculo }}</li>
    </ul>

    <h2>Painel de Controlo do Veículo</h2>
    <div class="button-group">
        <!-- Botão para visualizar o histórico do veículo -->
        <button onclick="window.location='{{ route('historico.mostrar', $veiculo->id) }}'">Ver histórico</button>

        <!-- Botão para aceder ao formulário de edição do veículo -->
        <button onclick="window.location='{{ route('veiculo.editar', $veiculo->id) }}'">Editar veículo</button>

        <!-- Formulário para eliminar o veículo -->
        <form method="post" action="{{ route('veiculo.eliminar', $veiculo) }}">
            @csrf
            @method('DELETE')
            <button>Eliminar veículo</button>
        </form>

        <!-- Voltar à página anterior (listagem de todos os veículos) -->
        <button onclick="window.location='{{ route('veiculo.mostrar') }}'">Voltar à pagina anterior</button>
    </div>
</x-layout>
