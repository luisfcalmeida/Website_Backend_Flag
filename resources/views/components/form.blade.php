@csrf
<div>
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" 
        value="{{ old('marca', $car->marca ?? '') }}">
</div>

<div>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo"
        value="{{ old('modelo', $car->modelo ?? '') }}">
</div>

<div>
    <label for="matricula">Matrícula:</label>
    <input type="text" name="matricula" id="matricula" 
        value="{{ old('matricula', $car->matricula ?? '') }}">
</div>

<div>
    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano" 
        value="{{ old('ano', $car->ano ?? '') }}">
</div>

<div>
    <label for="versao">Versão:</label>
    <input type="text" name="versao" id="versao" 
        value="{{ old('versao', $car->versao ?? '') }}">
</div>  

<div>
    <label for="submodelo">Sub-modelo:</label>
    <input type="text" name="submodelo" id="submodelo" 
        value="{{ old('submodelo', $car->submodelo ?? '') }}">
</div>

<div>
    <label for="portas">Portas:</label>
    <input type="number" name="portas" id="portas" 
        value="{{ old('portas', $car->portas ?? '') }}">
</div>

<div>
    <label for="cor">Cor:</label>
    <input type="text" name="cor" id="cor" 
        value="{{ old('cor', $car->cor ?? '') }}">
</div>

<div>
    <label for="traccao">Tracção:</label>
    <input type="text" name="traccao" id="traccao" 
        value="{{ old('traccao', $car->traccao ?? '') }}">
</div>

<div>
    <label for="cilindrada">Cilindrada:</label>
    <input type="number" name="cilindrada" id="cilindrada" 
        value="{{ old('cilindrada', $car->cilindrada ?? '') }}">
</div>        

<div>
    <label for="potencia">Potência:</label>
    <input type="number" name="potencia" id="potencia" 
        value="{{ old('potencia', $car->potencia ?? '') }}">
</div>

<div>
    <label for="caixa">Caixa:</label>
    <input type="text" name="caixa" id="caixa" 
        value="{{ old('caixa', $car->caixa ?? '') }}">
</div>

<div>
    <label for="combustivel">Combustível:</label>
    <input type="text" name="combustivel" id="combustivel" 
        value="{{ old('combustivel', $car->combustivel ?? '') }}">
</div>

<div>
    <label for="segmento">Segmento:</label>
    <input type="text" name="segmento" id="segmento" 
        value="{{ old('segmento', $car->segmento ?? '') }}">
</div>

<div>
    <label for="tipoCor">Tipo de cor:</label>
    <input type="text" name="tipoCor" id="tipoCor" 
        value="{{ old('tipoCor', $car->tipoCor ?? '') }}">
</div>

<div>
    <label for="classeVeículo">Classe:</label>
    <input type="text" name="classeVeiculo" id="classeVeiculo" 
        value="{{ old('classeVeiculo', $car->classeVeiculo ?? '') }}">
</div>

<div>
    <button type="submit">Criar</button>
</div>
