<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestão de Frota</title>

        <!-- Estilização básica através da framework SimpleCSS -->
        <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">

        <!-- Ficheiro CSS para sobrepor ou adicionar estilização específica ao projeto -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>

    <body>
        <!-- Mostra mensagens de sucesso ou de erro (ex: "Veículo adicionado com sucesso") -->
        @if (session('status'))
        <div> {{ session('status') }} </div>
        @endif

        <!-- Apresentação das views -->
        {{ $slot }}

        <!-- Voltar à página principal (index) -->
        <button onclick="window.location='{{ route('index') }}'">Voltar à página principal</button>
    </body>
</html>
