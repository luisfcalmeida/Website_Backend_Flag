<x-layout>

    <h1>Matrícula: {{ $car->matricula }}</h1>

    <div id="historico">
        <h2>Histórico de utilização</h2>
        <table>
            <thead>
                <tr>
                    <th>Funcionário</th>
                    <th>Função</th>
                    <th>Data de Início</th>
                    <th>Data de Fim</th>
                    <th>KM Início</th>
                    <th>KM Fim</th>
                    <th>Descrição da Rota</th>
                </tr>
            </thead>
            <tbody id="historicoBody"></tbody>
        </table>
    </div>

    <h2>Criar novo histórico</h2>
    <form method="POST" action="http://localhost:3000/api/historicos">
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

    <button onclick="window.location='{{ route('index') }}'">Voltar</button>

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
            const tbody = document.getElementById("historicoBody");

            data.forEach(item => {
                const row = `
                    <tr>
                        <td>${item.idFuncionario?.nome}</td>
                        <td>${item.idFuncionario?.funcao}</td>
                        <td>${new Date(item.dataInicio).toLocaleString()}</td>
                        <td>${new Date(item.dataFim).toLocaleString()}</td>
                        <td>${item.kmInicio}</td>
                        <td>${item.kmFim}</td>
                        <td>${item.descricaoRota}</td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        }

        getHistorico();
    </script>

</x-layout>
