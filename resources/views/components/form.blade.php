<!-- Formulário reutilizado para criação e edição de veículos -->
@csrf
<div>
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" value="{{ old('marca', $veiculo->marca ?? '') }}">
</div>

<div>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $veiculo->modelo ?? '') }}">
</div>

<div>
    <label for="matricula">Matrícula:</label>
    <input type="text" name="matricula" id="matricula" value="{{ old('matricula', $veiculo->matricula ?? '') }}">
</div>

<div>
    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano" value="{{ old('ano', $veiculo->ano ?? '') }}">
</div>

<div>
    <label for="versao">Versão:</label>
    <input type="text" name="versao" id="versao" value="{{ old('versao', $veiculo->versao ?? '') }}">
</div>

<div>
    <label for="submodelo">Sub-modelo:</label>
    <input type="text" name="submodelo" id="submodelo" value="{{ old('submodelo', $veiculo->submodelo ?? '') }}">
</div>

<div>
    <label for="portas">Portas:</label>
    <input type="number" name="portas" id="portas" value="{{ old('portas', $veiculo->portas ?? '') }}">
</div>

<div>
    <label for="cor">Cor:</label>
    <input type="text" name="cor" id="cor" value="{{ old('cor', $veiculo->cor ?? '') }}">
</div>

<div>
    <label for="traccao">Tracção:</label>
    <select name="traccao" id="traccao">
        <option value="Integral" {{ old('traccao', $veiculo->traccao ?? '') == 'Integral' ? 'selected' : '' }}>Integral</option>
        <option value="Tracção dianteira"{{ old('traccao', $veiculo->traccao ?? '') == 'Tracção dianteira' ? 'selected' : '' }}>Tracção dianteira</option>
        <option value="Tracção traseira"{{ old('traccao', $veiculo->traccao ?? '') == 'Tracção traseira' ? 'selected' : '' }}>Tracção traseira</option>
    </select>
</div>

<div>
    <label for="cilindrada">Cilindrada:</label>
    <input type="number" name="cilindrada" id="cilindrada" value="{{ old('cilindrada', $veiculo->cilindrada ?? '') }}">
</div>

<div>
    <label for="potencia">Potência:</label>
    <input type="number" name="potencia" id="potencia" value="{{ old('potencia', $veiculo->potencia ?? '') }}">
</div>

<div>
    <label for="caixa">Caixa:</label>
    <select name="caixa" id="caixa">
        <option value="Manual" {{ old('caixa', $veiculo->caixa ?? '') == 'Manual' ? 'selected' : '' }}>Manual</option>
        <option value="Automática" {{ old('caixa', $veiculo->caixa ?? '') == 'Automática' ? 'selected' : '' }}>Automática</option>
    </select>
</div>

<div>
    <label for="combustivel">Combustível:</label>
    <select name="combustivel" id="combustivel">
        <option value="Diesel" {{ old('combustivel', $veiculo->combustivel ?? '') == 'Diesel' ? 'selected' : '' }}>Diesel</option>
        <option value="Elétrico" {{ old('combustivel', $veiculo->combustivel ?? '') == 'Elétrico' ? 'selected' : '' }}>Elétrico</option>
        <option value="Gasolina" {{ old('combustivel', $veiculo->combustivel ?? '') == 'Gasolina' ? 'selected' : '' }}>Gasolina</option>
        <option value="GPL" {{ old('combustivel', $veiculo->combustivel ?? '') == 'GPL' ? 'selected' : '' }}>GPL</option>
        <option value="GNC" {{ old('combustivel', $veiculo->combustivel ?? '') == 'GNC' ? 'selected' : '' }}>GNC</option>
    </select>
</div>

<div>
    <label for="segmento">Segmento:</label>
    <select name="segmento" id="segmento">
        <option value="Cabrio" {{ old('segmento', $veiculo->segmento ?? '') == 'Cabrio' ? 'selected' : '' }}>Cabrio</option>
        <option value="Carrinha" {{ old('segmento', $veiculo->segmento ?? '') == 'Carrinha' ? 'selected' : '' }}>Carrinha</option>
        <option value="Citadino" {{ old('segmento', $veiculo->segmento ?? '') == 'Citadino' ? 'selected' : '' }}>Citadino</option>
    </select>
</div>

<div>
    <label for="tipoCor">Tipo de cor:</label>
    <select name="tipoCor" id="tipoCor">
        <option value="Mate" {{ old('tipoCor', $veiculo->tipoCor ?? '') == 'Mate' ? 'selected' : '' }}>Mate</option>
        <option value="Metalizado" {{ old('tipoCor', $veiculo->tipoCor ?? '') == 'Metalizado' ? 'selected' : '' }}>Metalizado</option>
    </select>
</div>

<div>
    <label for="classeVeiculo">Classe:</label>
    <select name="classeVeiculo" id="classeVeiculo">
        <option value="Classe 1" {{ old('classeVeiculo', $veiculo->classeVeiculo ?? '') == 'Classe 1' ? 'selected' : '' }}>Classe 1</option>
        <option value="Classe 2" {{ old('classeVeiculo', $veiculo->classeVeiculo ?? '') == 'Classe 2' ? 'selected' : '' }}>Classe 2</option>
    </select>
</div>

<div>
    <button type="submit">Submeter</button>
</div>