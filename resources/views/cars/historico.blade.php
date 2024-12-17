<x-layout>

    <h1>Histórico do Veículo: {{ $car->matricula }}</h1>

    <h2>Procurar Históricos entre Datas</h2>
    <form id="filtroForm">
        <label for="dataInicio">Data de Início:</label>
        <input type="date" id="dataInicio" required>

        <label for="dataFim">Data de Fim:</label>
        <input type="date" id="dataFim" required>

        <button type="submit">Procurar Históricos</button>
    </form>

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
    const matricula = @json($car -> matricula);
    const url = `http://localhost:3000/api/historicos/matricula/${matricula}`;

    document.addEventListener("DOMContentLoaded", () => {
        getHistorico(url);
    });

    document.getElementById("filtroForm").addEventListener("submit", async (event) => {
        event.preventDefault();

        const dataInicio = document.getElementById("dataInicio").value;
        const dataFim = document.getElementById("dataFim").value;

        const filtroUrl = `http://localhost:3000/api/historicos/matricula/${matricula}/datas?dataInicio=${dataInicio}&dataFim=${dataFim}`;
        getHistorico(filtroUrl);
    });

    async function getHistorico(endpoint = url) {
        try {
            const response = await fetch(endpoint);
            const data = await response.json();
            mostrarHistorico(data);
        } catch (error) {
            document.getElementById("historicoBody").innerHTML = `<p>Nenhum histórico encontrado no período especificado.</p>`;
        }
    }

    function mostrarHistorico(data) {
        const list = document.getElementById("historicoBody");
        list.innerHTML = "";

        if (data.length === 0) {
            list.innerHTML = "<p>Nenhum histórico encontrado no período especificado.</p>";
            return;
        }

        const carId = "{{ $car->id }}";

        data.forEach(item => {
            const listItem = `
                    <div class="listaHistorico">
                        <ul class="info-list">
                            <li><strong>Funcionário:</strong> ${item.idFuncionario?.nome || "N/A"}</li>
                            <li><strong>Função:</strong> ${item.idFuncionario?.funcao || "N/A"}</li>
                            <li><strong>Data de Início:</strong> ${new Date(item.dataInicio).toLocaleString()}</li>
                            <li><strong>Data de Fim:</strong> ${new Date(item.dataFim).toLocaleString()}</li>
                            <li><strong>KM Início:</strong> ${item.kmInicio}</li>
                            <li><strong>KM Fim:</strong> ${item.kmFim}</li>
                            <li><strong>Descrição da Rota:</strong> ${item.descricaoRota}</li>
                            <li>
                                <button onclick="window.location.href='/${carId}/historico/${item._id}/edit'">Editar Histórico</button>

                                <form method="POST" action="/${carId}/historico/${item._id}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Pretende mesmo eliminar este histórico?');">Eliminar Histórico</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                `;
            list.innerHTML += listItem;
        });
    }

    getHistorico();
    </script>
</x-layout>