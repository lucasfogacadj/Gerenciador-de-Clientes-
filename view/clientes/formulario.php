<form method="POST" action="?c=c&a=cca" id="idForm">
    
	<fieldset id="usuario"><legend>Login</legend>
		<p>Nome: <input type="text" id="idNome" name="cNome" > </p>
		<p>Senha: <input type="password" id="idSenha" name="cSenha" > </p>

		<fieldset id="sexo"><legend>Sexo</legend>
		<input type="radio" name="cSexo" id="idMasc" value="Masculino"> <label for="idMasc">Masculino</label>
		<input type="radio" name="cSexo" id="idFem" value="Feminino"> <label for="idFem">Feminino</label>
        </fieldset>
    </fieldset>

    <fieldset id="check"><legend>Exemplo de Selecao de CheckBox</legend>
        <p>Opção 01:<input type="checkbox" name="checkbox" id="idopc1" value="opc1"></p>
        <p>Opção 02:<input type="checkbox" name="checkbox" id="idopc2" value="opc2"> </p>
        <p>Opção 03:<input type="checkbox" name="checkbox" id="idopc3" value="opc3"></p>
    </fieldset>

    <fieldset id="mensagem"><legend>Mensagem do Usuario</legend>
        <p>Grau de Urgencia</p>
        <input type="range" name="cUrgencia" id="idUrgencia" min="0" max="10">
        <p>Mensagem:</p>
        <textarea name="cMensagem" id="idMensagem" cols="45" rows="7" placeholder="Digite aqui sua mensagem"></textarea>
    </fieldset>

    <fieldset id="simples"><legend>Exemplo de Select Simples</legend>
        <p>
        <label for="idProduto"> Escolha seu Produto</label>
        <select name="cproduto" id="idProduto">
            <option value="pr1">Produto1</option>
            <option value="pr2">Produto2</option>
            <option value="pr3">Produto3</option>
            <option value="pr4">Produto4</option>
        </select>
    </fieldset>

    <fieldset id="extendido"><legend>Exemplo de Select Extendido</legend>
        <p>
        <label for="idProdutos"> Escolha seus produtos</label>
        <p>
            <select name="cProdutos" id="idProdutos" size="5" multiple="multiple">
                <option value="Produto1">Produto 1</option>
                <option value="Produto2">Produto 2</option>
                <option value="Produto3">Produto 3</option>
                <option value="Produto4">Produto 4</option>
                <option value="Produto5" selected="selected">Produto 5</option>
            </select>
        </p>
    </fieldset>
    <input type="submit" value="Enviar">
</form>