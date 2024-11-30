<x-layout>
    <h1>Editar</h1>
    <x-errors/>

    <form method="post" action=" {{ route('update', $car) }} ">
        @method('PATCH')
        <x-form :car="$car" />
    </form>
</x-layout> 