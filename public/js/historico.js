// Após carregamento completo do DOM, armazena a matrícula e o URL da API em variáveis e chama a função para pesquisar e exibir os históricos
document.addEventListener("DOMContentLoaded", () => {
    const matricula = document.querySelector('meta[name="veiculo-matricula"]').content;
    const url = `http://localhost:3000/api/historicos/matricula/${matricula}`;
    getHistorico(url);
});

// Adiciona um listener ao formulário para obter o submit de pesquisa entre datas
// Armazena a matrícula e as datas de início e fim em variáveis para construir a URL do endpoint
// Chama a função para pesquisar e mostrar os históricos existentes entre as duas datas
document.getElementById("filtroForm").addEventListener("submit", async (event) => {
    event.preventDefault();
    const matricula = document.querySelector('meta[name="veiculo-matricula"]').content;
    const dataInicio = document.getElementById("dataInicio").value;
    const dataFim = document.getElementById("dataFim").value;
    const filtroUrl = `http://localhost:3000/api/historicos/matricula/${matricula}/datas?dataInicio=${dataInicio}&dataFim=${dataFim}`;
    getHistorico(filtroUrl);
});

// Função assíncrona para obter os dados da API
// É feita uma requisição à API, utilizando o URL/endpoint fornecido 
// Converte a resposta para JSON e chama a função para exibir o histórico
// Em caso de erro, será exibida uma mensagem no página
async function getHistorico(endpoint) {
    try {
        const response = await fetch(endpoint);
        const data = await response.json();
        mostrarHistorico(data);
    } catch (error) {
        document.getElementById("historicoBody").innerHTML = `<p>Nenhum histórico encontrado no período especificado.</p>`;
    }
}

// Função para exibir os históricos existentes na página
// Se não houver históricos, exibe uma mensagem de erro.
// Se houver históricos, percorre os dados da API e cria um item na lista (utilizando o historicoBody) para cada histórico
// Cada item inclui os botões para editar e/ou eliminar o respetivo histórico
function mostrarHistorico(data) {
    const list = document.getElementById("historicoBody");
    list.innerHTML = ""; 

    if (data.length === 0) {
        list.innerHTML = "<p>Nenhum histórico encontrado no período especificado.</p>";
        return;
    }

    const veiculoId = document.querySelector('meta[name="veiculo-id"]').content;

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
                    <li>
                        <button onclick="window.location.href='/historico/${veiculoId}/${item._id}/editar'">Editar Histórico</button>
                        
                        <form method="POST" action="/historico/${veiculoId}/${item._id}">
                            <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').content}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="return confirm('Tem a certeza de que pretende eliminar este histórico de forma definitiva?');">Eliminar Histórico</button>
                        </form>
                    </li>
                </ul>
            </div>
        `;
        list.innerHTML += listItem;
    });
}