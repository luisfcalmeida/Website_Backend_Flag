<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frota</title>
    <link rel="stylesheet" href="{{ asset('css/skeleton.css') }}">

</head>
<body>
    @if (session('status'))
        <div> {{ session('status') }} </div>
    @endif

    {{ $slot }}
</body>
</html>