<div class="">
    <div class="row">
        <br>
        <div class="col-md-12">
            <a href="?c=c&a=ccb" class="btn btn-success btn-sm">Adicionar</a>
            <hr>
        </div>
        <div class="col-md-12">

            <?php
            if(!count($resultado)){
                ?>
                <div class="alert alert-info" role="alert">Nenhum Cliente encontrado</div>
                <?php
            } else {
                ?>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">ID</td>
                            <td class="info">Nome</td>
                            <td class="info">Telefone</td>
                            <td class="info">Email</td>
                            <td class="info">Endereço</td>
                            <td class="info"></td>
                        </tr>
                        <?php
                        foreach( $resultado as $cliente) {
                            ?>
                            <tr>
                                <td><?php echo $cliente->getIdCliente(); ?></td>
                                <td><?php echo $cliente->getNome(); ?></td>
                                <td><?php echo $cliente->getTelefone(); ?></td>
                                <td><?php echo $cliente->getEmail(); ?></td>
                                <td><?php echo $cliente->getEndereco(); ?></td>
                                <td>

                                    <a href="?c=c&a=aa&id=<?=$cliente->getIdCliente();?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="?c=c&a=ad&id=<?=$cliente->getIdCliente();?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja mesmo excluir esse registro?');">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>