<x-layout>
    <h1>Criar Novo Veículo</h1>

    <!-- Mostra as mensagens de erro de validação sobre o formulário -->
    <x-errors />

    <!-- Formulário para criar um novo veículo -->
    <form method="post" action=" {{ route('veiculo.armazenar') }} ">
        <x-form />
    </form>

</x-layout>