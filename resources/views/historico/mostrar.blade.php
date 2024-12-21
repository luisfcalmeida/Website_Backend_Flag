<x-layout>
    <h1>Histórico do Veículo: {{ $veiculo->matricula }}</h1>

    <!-- Passagem de variáveis Blade para JS através de meta tags, permitindo que o JS aceda a informações do veículo e ao token CSRF -->
    <meta name="veiculo-matricula" content="{{ $veiculo->matricula }}">
    <meta name="veiculo-id" content="{{ $veiculo->id }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Formulário para filtrar os históricos existentes entre duas datas -->
    <h2>Procurar Históricos entre Datas</h2>
    <form id="filtroForm">
        <label for="dataInicio">Data de Início:</label>
        <input type="date" id="dataInicio" required>

        <label for="dataFim">Data de Fim:</label>
        <input type="date" id="dataFim" required>

        <button type="submit">Procurar Históricos</button>
    </form>

    <!-- Histórico será exibido aqui (com ou sem filtro de datas), sendo preenchido pelo JS -->
    <h2>Histórico de Utilização</h2>
    <div id="historico">
        <ul id="historicoBody" class="info-list"></ul>
    </div>

    <!-- Formulário para criar um novo histórico de utilização -->
    <h2>Criar Novo Histórico</h2>
    <form method="POST" action="{{ route('historico.armazenar', ['veiculo' => $veiculo->id]) }}">
        @csrf
        
        <input type="hidden" name="matriculaVeiculo" value="{{ $veiculo->matricula }}">

        <label for="idFuncionario">Funcionário:</label>
        <select name="idFuncionario" id="idFuncionario" required>
            @foreach ($funcionarios as $funcionario)
            <option value="{{ $funcionario['_id'] }}">{{ $funcionario['nome'] }} - {{ $funcionario['funcao'] }}</option>
            @endforeach
        </select>

        <label for="dataInicio">Data de Início:</label>
        <input type="datetime-local" name="dataInicio" required>

        <label for="dataFim">Data de Fim:</label>
        <input type="datetime-local" name="dataFim" required>

        <label for="kmInicio">KM Início:</label>
        <input type="number" name="kmInicio" required>

        <label for="kmFim">KM Fim:</label>
        <input type="number" name="kmFim" required>

        <label for="descricaoRota">Descrição da Rota:</label>
        <textarea name="descricaoRota" required></textarea>

        <button type="submit">Adicionar Histórico</button>
    </form>

    <!-- Voltar à página anterior (detalhes do veículo) -->
    <button onclick="window.location='{{ route('veiculo.detalhes', $veiculo->id) }}'">Voltar à página anterior</button>

    <!-- Carregamento do JavaScript -->
    <script src="{{ asset('js/historico.js') }}"></script>
</x-layout>
