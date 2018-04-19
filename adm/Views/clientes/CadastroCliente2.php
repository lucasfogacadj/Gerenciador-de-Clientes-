<div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Cliente</h3>


            <form action="?c=c&a=ccs" method="post" id="form_cadastroCliente">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome do Cliente" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Endereço de Email" required>
                </div>
                <div class="form-group">
                    <label for="Telefone">Telefone</label>
                    <input type="number" class="form-control" name="telefone" placeholder="00 0000-0000" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereco</label>
                    <textarea class="form-control" name="endereco" placeholder="Endereço do Cliente" required></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="?c=c&a=lu" class="btn btn-info btn-sm">Voltar</a>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>