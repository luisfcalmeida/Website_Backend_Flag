<x-layout>
    <h2>Editar Histórico</h2>

    <!-- Formulário para atualizar um histórico existente -->
    <form action="{{ route('historico.atualizar', ['veiculoId' => $veiculo->id, 'historicoId' => $historico['_id']]) }}" method="POST">
        @csrf 
        @method('PATCH')

        <input type="hidden" name="matriculaVeiculo" value="{{ $veiculo->matricula }}">

        <label for="idFuncionario">Funcionário:</label>
        <select name="idFuncionario" id="idFuncionario" required>
            @foreach ($funcionarios as $funcionario)
                <option value="{{ $funcionario['_id'] }}" 
                    {{ $historico['idFuncionario'] == $funcionario['_id'] ? 'selected' : '' }}>
                    {{ $funcionario['nome'] }} - {{ $funcionario['funcao'] }}
                </option>
            @endforeach
        </select>

        <label for="dataInicio">Data de Início:</label>
        <input type="datetime-local" name="dataInicio" id="dataInicio" 
               value="{{ date('Y-m-d\TH:i', strtotime($historico['dataInicio'])) }}" required>

        <label for="dataFim">Data de Fim:</label>
        <input type="datetime-local" name="dataFim" id="dataFim" 
               value="{{ date('Y-m-d\TH:i', strtotime($historico['dataFim'])) }}" required>

        <label for="kmInicio">KM Início:</label>
        <input type="number" name="kmInicio" id="kmInicio" value="{{ $historico['kmInicio'] }}" required>

        <label for="kmFim">KM Fim:</label>
        <input type="number" name="kmFim" id="kmFim" value="{{ $historico['kmFim'] }}" required>

        <label for="descricaoRota">Descrição da Rota:</label>
        <textarea name="descricaoRota" id="descricaoRota" required>{{ $historico['descricaoRota'] }}</textarea>

        <button type="submit">Atualizar Histórico</button>
    </form>

    <!-- Voltar à página anterior (histórico do veículo) -->
    <button onclick="window.location='{{ route('historico.mostrar', $veiculo->id) }}'">Voltar à página anterior</button>
</x-layout>
