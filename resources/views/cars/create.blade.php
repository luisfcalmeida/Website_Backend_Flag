<x-layout>
    <h1>Adicionar novo veículo</h1>

    <x-errors />

    <form method="post" action=" {{route('store') }}">
        <x-form />
    </form>

    <button class="custom-button" onclick="window.location='{{ route('index') }}'">Voltar</button>
</x-layout>