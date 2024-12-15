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

    {{ $cars -> links('vendor/pagination/semantic-ui') }}


    <h2>Procurar Históricos entre Datas</h2>
    <form id="historicos-form">
        <label for="dataInicio">Data de Início:</label>
        <input type="date" id="dataInicio" name="dataInicio" required>

        <label for="dataFim">Data de Fim:</label>
        <input type="date" id="dataFim" name="dataFim" required>

        <button type="submit">Mostrar Históricos</button>
    </form>

    <div id="historicos-resultados" class="hidden">
        <h3>Resultados:</h3>
        <ul id="lista-historicos"></ul>
    </div>
</x-layout>

<script>
    document.getElementById("historicos-form").addEventListener("submit", function(event) {
        event.preventDefault();

        const dataInicio = document.getElementById("dataInicio").value;
        const dataFim = document.getElementById("dataFim").value;

        const url = `http://localhost:3000/api/historicos/datas?dataInicio=${dataInicio}&dataFim=${dataFim}`;

        fetch(url)
            .then(response => {
                return response.json();
            })
            .then(data => {
                const listaResultados = document.getElementById("lista-historicos");
                listaResultados.innerHTML = "";

                const resultadosDiv = document.getElementById("historicos-resultados");
                resultadosDiv.classList.remove("hidden");

                if (data.length === 0) {
                    listaResultados.innerHTML = "<li>Nenhum histórico encontrado no período especificado.</li>";
                } else {
                    data.forEach(item => {
                        const listItem = `
                            <div class="listaHistorico">
                                <ul class="info-list">
                                    <li><strong>Funcionário:</strong> ${item.idFuncionario?.nome}</li>
                                    <li><strong>Função:</strong> ${item.idFuncionario?.funcao}</li>
                                    <li><strong>Data de Início:</strong> ${new Date(item.dataInicio).toLocaleString()}</li>
                                    <li><strong>Data de Fim:</strong> ${new Date(item.dataFim).toLocaleString()}</li>
                                    <li><strong>KM Início:</strong> ${item.kmInicio}</li>
                                    <li><strong>KM Fim:</strong> ${item.kmFim}</li>
                                    <li><strong>Descrição da Rota:</strong> ${item.descricaoRota}</li>
                                </ul>
                            </div>
                        `;
                        listaResultados.innerHTML += listItem;
                    });
                }
            })
    });
</script>