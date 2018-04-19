
	<fieldset id="usuario"><legend>Login</legend>
		<p>Nome: <?= $formulario ['nome']; ?>
		<p>Senha: <?= $formulario ['senha']; ?>

		<fieldset id="sexo"><legend>Sexo</legend>
            <?= $formulario ['sexo']; ?>
        </fieldset>
    </fieldset>

    <fieldset id="check"><legend>Exemplo de Selecao de CheckBox</legend>
        <p>
            <?= $formulario ['opc']; ?>
        </p>
    </fieldset>

    <fieldset id="mensagem"><legend>Mensagem do Usuario</legend>
        <p>Grau de Urgencia</p>
        <?= $formulario ['urgencia']; ?>
        <p>Mensagem:</p>
        <?= $formulario ['mensagem']; ?>
    </fieldset>

    <fieldset id="simples"><legend>Exemplo de Select Simples</legend>
        <p>
        <label for="idProduto"> Escolha seu Produto</label>
            <p></p>
            <?= $formulario ['produto']; ?>
    </fieldset>

    <fieldset id="extendido"><legend>Exemplo de Select Extendido</legend>
        <?= $formulario ['produtos']; ?>
        </p>
    </fieldset>
