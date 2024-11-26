<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>
<body>
    <h1>Criar</h1>

    <form method="post" action=" {{route('store') }}">
        @csrf
        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca">
        </div>

        <div>
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo">
        </div>

        <div>
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" id="matricula">
        </div>

        <div>
            <label for="ano">Ano:</label>
            <input type="number" name="ano" id="ano">
        </div>

        <div>
            <label for="versao">Versão:</label>
            <input type="text" name="versao" id="versao">
        </div>  
        
        <div>
            <label for="submodelo">Sub-modelo:</label>
            <input type="text" name="submodelo" id="submodelo">
        </div>

        <div>
            <label for="portas">Portas:</label>
            <input type="number" name="portas" id="portas">
        </div>

        <div>
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor">
        </div>

        <div>
            <label for="traccao">Tracção:</label>
            <input type="text" name="traccao" id="traccao">
        </div>

        <div>
            <label for="cilindrada">Cilindrada:</label>
            <input type="number" name="cilindrada" id="cilindrada">
        </div>        

        <div>
            <label for="potencia">Potência:</label>
            <input type="number" name="potencia" id="potencia">
        </div>
        
        <div>
            <label for="caixa">Caixa:</label>
            <input type="text" name="caixa" id="caixa">
        </div>

        <div>
            <label for="combustivel">Combustível:</label>
            <input type="text" name="combustivel" id="combustivel">
        </div>

        <div>
            <label for="segmento">Segmento:</label>
            <input type="text" name="segmento" id="segmento">
        </div>

        <div>
            <label for="tipoCor">Tipo de cor:</label>
            <input type="text" name="tipoCor" id="tipoCor">
        </div>

        <div>
            <label for="classeVeículo">Classe:</label>
            <input type="text" name="classeVeiculo" id="classeVeiculo">
        </div>

        <div>
            <button type="submit">Criar</button>
        </div>
    </form>
</body>
</html>