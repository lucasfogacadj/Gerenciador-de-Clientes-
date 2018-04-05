<div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Cliente</h3>


            <form action="?c=c&a=ccs" method="post" id="form_cadastroCliente">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome do Cliente" value="<?php echo $cliente->getNome(); ?>" required>

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Endereço de Email" value="<?php echo $cliente->getEmail(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="Telefone">Telefone</label>
                    <input type="number" class="form-control" name="telefone" placeholder="00 0000-0000" value="<?php echo $cliente->getTelefone(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereco</label>
                    <input type="text" class="form-control" name="endereco"  value="<?php echo $cliente->getEndereco(); ?>"  required>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>