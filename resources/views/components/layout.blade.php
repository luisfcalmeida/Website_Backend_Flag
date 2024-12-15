<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frota Automóvel</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <style>
    h1 {
        font-size: 40px;
        margin: 10px 0 20px 0;
    }

    h2 {
        font-size: 30px;
        margin: 50px 0 10px 0;
    }

    button,
    .custom-button,
    input,
    select {
        width: 100%;
        padding: 10px 20px;
        margin: 10px 0;
        font-size: 16px;
    }

    table {
        width: 100%;
    }

    .info-list {
        list-style-type: none;
        padding: 0;
    }

    .info-list li {
        padding: 5px 0;
        border-bottom: 1px solid #ddd;
    }

    .info-list li:last-child {
        border-bottom: none;
    }

    .info-list strong {
        font-weight: bold;
    }

    .listaHistorico {
        padding-bottom: 25px;
    }

    .hidden {
        display: none;
    }
    </style>
</head>

<body>
    @if (session('status'))
    <div> {{ session('status') }} </div>
    @endif

    {{ $slot }}
</body>

</html>