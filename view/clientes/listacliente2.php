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
                                <td><?php echo $cliente->getNome(); ?></td>
                                <td><?php echo $cliente->getTelefone(); ?></td>
                                <td><?php echo $cliente->getEmail(); ?></td>
                                <td><?php echo $cliente->getEndereco(); ?></td>
                                <td>
                                    <a href="?c=c&a=aa" <?php echo $cliente->getIdCliente(); ?> class="btn btn-info btn-sm">Editar</a>
                                    <a href="" class="btn btn-danger btn-sm">Excluir</a>
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