<x-layout>

    <h1>Histórico do Veículo: {{ $car->matricula }}</h1>

    <h2>Histórico de utilização</h2>
    <div id="historico">
        <ul id="historicoBody" class="info-list"></ul>
    </div>

    <h2>Criar novo histórico</h2>
    <form method="POST" action="{{ route('storeHistorico', ['car' => $car->id]) }}">
        @csrf

        <input type="hidden" name="matriculaVeiculo" value="{{ $car->matricula }}">

        <label for="idFuncionario">Funcionário:</label>
        <select name="idFuncionario" id="idFuncionario" required>
            @foreach ($funcionarios as $funcionario)
                <option value="{{ $funcionario['_id'] }}">{{ $funcionario['nome'] }} - {{ $funcionario['funcao'] }}</option>
            @endforeach
        </select>

        <label for="dataInicio">Data de Início:</label>
        <input type="datetime-local" name="dataInicio" id="dataInicio" required>

        <label for="dataFim">Data de Fim:</label>
        <input type="datetime-local" name="dataFim" id="dataFim" required>

        <label for="kmInicio">KM Início:</label>
        <input type="number" name="kmInicio" id="kmInicio" required>

        <label for="kmFim">KM Fim:</label>
        <input type="number" name="kmFim" id="kmFim" required>

        <label for="descricaoRota">Descrição da Rota:</label>
        <textarea name="descricaoRota" id="descricaoRota" required></textarea>

        <button type="submit">Adicionar Histórico</button>
    </form>

    <button onclick="window.location='{{ route('details', ['car' => $car->id]) }}'">Voltar</button>

    <script>
        const matricula = @json($car->matricula);
        const url = `http://localhost:3000/api/historicos/matricula/${matricula}`;

        async function getHistorico() {
            try {
                const response = await fetch(url);
                const data = await response.json();
                mostrarHistorico(data);
            } catch (error) {
                document.getElementById("historico").innerHTML = `<p>Veículo sem histórico de utilização.</p>`;
            }
        }

        function mostrarHistorico(data) {
            const list = document.getElementById("historicoBody");

            data.forEach(item => {
                const listItem = `
                    <div class="listaHistorico">
                        <li><strong>Funcionário:</strong> ${item.idFuncionario?.nome}</li>
                        <li><strong>Função:</strong> ${item.idFuncionario?.funcao}</li>
                        <li><strong>Data de Início:</strong> ${new Date(item.dataInicio).toLocaleString()}</li>
                        <li><strong>Data de Fim:</strong> ${new Date(item.dataFim).toLocaleString()}</li>
                        <li><strong>KM Início:</strong> ${item.kmInicio}</li>
                        <li><strong>KM Fim:</strong> ${item.kmFim}</li>
                        <li><strong>Descrição da Rota:</strong> ${item.descricaoRota}</li>
                    </div>
                `;
                list.innerHTML += listItem;
            });
        }

        getHistorico();
    </script>
</x-layout>
