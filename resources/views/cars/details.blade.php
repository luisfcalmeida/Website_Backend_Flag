<x-layout>

    <h1>Matrícula: {{ $car->matricula }}</h1>

    <h2>Informações Básicas</h2>
    <ul class="info-list">
        <li><strong>Ano:</strong> {{ $car->ano }}</li>
        <li><strong>Modelo:</strong> {{ $car->modelo }}</li>
        <li><strong>Versão:</strong> {{ $car->versao }}</li>
        <li><strong>Sub-modelo:</strong> {{ $car->submodelo }}</li>
        <li><strong>Nº de Portas:</strong> {{ $car->portas }}</li>
        <li><strong>Cor:</strong> {{ $car->cor }}</li>
    </ul>

    <h2>Especificações Técnicas</h2>
    <ul class="info-list">
        <li><strong>Tracção:</strong> {{ $car->traccao }}</li>
        <li><strong>Cilindrada:</strong> {{ $car->cilindrada }}</li>
        <li><strong>Potência:</strong> {{ $car->potencia }}</li>
        <li><strong>Tipo de Caixa:</strong> {{ $car->caixa }}</li>
        <li><strong>Combustível:</strong> {{ $car->combustivel }}</li>
        <li><strong>Segmento:</strong> {{ $car->segmento }}</li>
        <li><strong>Tipo de Cor:</strong> {{ $car->tipoCor }}</li>
        <li><strong>Classe do Veículo:</strong> {{ $car->classeVeiculo }}</li>
    </ul>

    <h2>Opções do Veículo</h2>
    <div class="button-group">
        <button class="custom-button" onclick="window.location='{{ route('historico', $car->id) }}'">Ver
            histórico</button>
        <button class="custom-button" onclick="window.location='{{ route('edit', $car->id) }}'">Editar veículo</button>
        <form method="post" action="{{ route('destroy', $car) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button class="custom-button">Eliminar veículo</button>
        </form>
        <button class="custom-button" onclick="window.location='{{ route('index') }}'">Voltar</button>
    </div>

</x-layout>