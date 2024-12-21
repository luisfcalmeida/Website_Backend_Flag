<x-layout>
    <h1>Painel de Controlo</h1>

    <h2>Gestão da Frota</h2>
    <ul>
        <!-- Hiperligação para mostrar todos os veículos existentes -->
        <li><a href="{{ route('veiculo.mostrar') }}">Mostrar Veículos</a></li>

        <!-- Hiperligação para criar um novo veículo -->
        <li><a href="{{ route('veiculo.criar') }}">Criar Veículo</a></li>
    </ul>
</x-layout>