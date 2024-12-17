<x-layout>
    <h1>Editar veículo</h1>
    <x-errors />

    <form method="post" action=" {{ route('update', $car) }} ">
        @method('PATCH')
        <x-form :car="$car" />
    </form>

    <button onclick="window.location='{{ route('details', ['car' => $car->id]) }}'">Voltar</button>
</x-layout>