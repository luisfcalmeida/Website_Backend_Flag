

<x-layout>
    <h1>Painel de Controlo</h1>

    <h2>Gestão da Frota</h2>
    <ul class="index">
        <li>
            <a href="{{ route('veiculo.mostrar') }}">
                <i class="fas fa-car"></i>
                <span>Mostrar Veículos</span>
            </a>
        </li>
        <li>
            <a href="{{ route('veiculo.criar') }}">
                <i class="fas fa-plus-circle"></i>
                <span>Criar Veículo</span>
            </a>
        </li>
    </ul>
</x-layout>