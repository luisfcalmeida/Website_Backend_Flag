@csrf
<div>
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" value="{{ old('marca', $car->marca ?? '') }}">
</div>

<div>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $car->modelo ?? '') }}">
</div>

<div>
    <label for="matricula">Matrícula:</label>
    <input type="text" name="matricula" id="matricula" value="{{ old('matricula', $car->matricula ?? '') }}">
</div>

<div>
    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano" value="{{ old('ano', $car->ano ?? '') }}">
</div>

<div>
    <label for="versao">Versão:</label>
    <input type="text" name="versao" id="versao" value="{{ old('versao', $car->versao ?? '') }}">
</div>

<div>
    <label for="submodelo">Sub-modelo:</label>
    <input type="text" name="submodelo" id="submodelo" value="{{ old('submodelo', $car->submodelo ?? '') }}">
</div>

<div>
    <label for="portas">Portas:</label>
    <input type="number" name="portas" id="portas" value="{{ old('portas', $car->portas ?? '') }}">
</div>

<div>
    <label for="cor">Cor:</label>
    <input type="text" name="cor" id="cor" value="{{ old('cor', $car->cor ?? '') }}">
</div>

<div>
    <label for="traccao">Tracção:</label>
    <select name="traccao" id="traccao">
        <option value="Integral" {{ old('traccao', $car->traccao ?? '') == 'Integral' ? 'selected' : '' }}>Integral
        </option>
        <option value="Tracção dianteira"
            {{ old('traccao', $car->traccao ?? '') == 'Tracção dianteira' ? 'selected' : '' }}>Tracção dianteira
        </option>
        <option value="Tracção traseira"
            {{ old('traccao', $car->traccao ?? '') == 'Tracção traseira' ? 'selected' : '' }}>Tracção traseira</option>
    </select>
</div>

<div>
    <label for="cilindrada">Cilindrada:</label>
    <input type="number" name="cilindrada" id="cilindrada" value="{{ old('cilindrada', $car->cilindrada ?? '') }}">
</div>

<div>
    <label for="potencia">Potência:</label>
    <input type="number" name="potencia" id="potencia" value="{{ old('potencia', $car->potencia ?? '') }}">
</div>

<div>
    <label for="caixa">Caixa:</label>
    <select name="caixa" id="caixa">
        <option value="Manual" {{ old('caixa', $car->caixa ?? '') == 'Manual' ? 'selected' : '' }}>Manual</option>
        <option value="Automática" {{ old('caixa', $car->caixa ?? '') == 'Automática' ? 'selected' : '' }}>Automática
        </option>
    </select>
</div>

<div>
    <label for="combustivel">Combustível:</label>
    <select name="combustivel" id="combustivel">
        <option value="Diesel" {{ old('combustivel', $car->combustivel ?? '') == 'Diesel' ? 'selected' : '' }}>Diesel
        </option>
        <option value="Elétrico" {{ old('combustivel', $car->combustivel ?? '') == 'Elétrico' ? 'selected' : '' }}>
            Elétrico</option>
        <option value="Gasolina" {{ old('combustivel', $car->combustivel ?? '') == 'Gasolina' ? 'selected' : '' }}>
            Gasolina</option>
        <option value="GPL" {{ old('combustivel', $car->combustivel ?? '') == 'GPL' ? 'selected' : '' }}>GPL</option>
        <option value="GNC" {{ old('combustivel', $car->combustivel ?? '') == 'GNC' ? 'selected' : '' }}>GNC</option>
        <option value="Híbrido (Diesel)"
            {{ old('combustivel', $car->combustivel ?? '') == 'Híbrido (Diesel)' ? 'selected' : '' }}>Híbrido (Diesel)
        </option>
        <option value="Híbrido (Gasolina)"
            {{ old('combustivel', $car->combustivel ?? '') == 'Híbrido (Gasolina)' ? 'selected' : '' }}>Híbrido
            (Gasolina)</option>
        <option value="Híbrido Plug-In"
            {{ old('combustivel', $car->combustivel ?? '') == 'Híbrido Plug-In' ? 'selected' : '' }}>Híbrido Plug-In
        </option>
        <option value="Hidrogénio" {{ old('combustivel', $car->combustivel ?? '') == 'Hidrogénio' ? 'selected' : '' }}>
            Hidrogénio</option>
    </select>
</div>

<div>
    <label for="segmento">Segmento:</label>
    <select name="segmento" id="segmento">
        <option value="Cabrio" {{ old('segmento', $car->segmento ?? '') == 'caCabriobrio' ? 'selected' : '' }}>Cabrio
        </option>
        <option value="Carrinha" {{ old('segmento', $car->segmento ?? '') == 'Carrinha' ? 'selected' : '' }}>Carrinha
        </option>
        <option value="Citadino" {{ old('segmento', $car->segmento ?? '') == 'Citadino' ? 'selected' : '' }}>Citadino
        </option>
        <option value="Coupé" {{ old('segmento', $car->segmento ?? '') == 'couCoupépe' ? 'selected' : '' }}>Coupé
        </option>
        <option value="Monovolume" {{ old('segmento', $car->segmento ?? '') == 'Monovolume' ? 'selected' : '' }}>
            Monovolume</option>
        <option value="Pequeno citadino"
            {{ old('segmento', $car->segmento ?? '') == 'Pequeno citadino' ? 'selected' : '' }}>Pequeno citadino
        </option>
    </select>
</div>

<div>
    <label for="tipoCor">Tipo de cor:</label>
    <select name="tipoCor" id="tipoCor">
        <option value="Mate" {{ old('tipoCor', $car->tipoCor ?? '') == 'Mate' ? 'selected' : '' }}>Mate</option>
        <option value="Metalizado" {{ old('tipoCor', $car->tipoCor ?? '') == 'Metalizado' ? 'selected' : '' }}>
            Metalizado</option>
        <option value="Pérola" {{ old('tipoCor', $car->tipoCor ?? '') == 'Pérola' ? 'selected' : '' }}>Pérola</option>
    </select>
</div>

<div>
    <label for="classeVeiculo">Classe:</label>
    <select name="classeVeiculo" id="classeVeiculo">
        <option value="Classe 1" {{ old('classeVeiculo', $car->classeVeiculo ?? '') == 'Classe 1' ? 'selected' : '' }}>
            Classe 1</option>
        <option value="Classe 2" {{ old('classeVeiculo', $car->classeVeiculo ?? '') == 'Classe 2' ? 'selected' : '' }}>
            Classe 2</option>
        <option value="Classe 3" {{ old('classeVeiculo', $car->classeVeiculo ?? '') == 'Classe 3' ? 'selected' : '' }}>
            Classe 3</option>
        <option value="Classe 4" {{ old('classeVeiculo', $car->classeVeiculo ?? '') == 'classe4' ? 'selected' : '' }}>
            Classe 4</option>
    </select>
</div>

<div>
    <button type="submit">Submeter</button>
</div>