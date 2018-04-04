<div class="container">
    <div class="row">
        <br>
        <div class="col-md-12">
        </div>
        <div class="col-md-12">


                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td class="info">Nome</td>
                            <td class="info">Telefone</td>
                            <td class="info">Email</td>
                            <td class="info">Endereco</td>
                            <td class="info"></td>
                        </tr>
                        <?php
                        foreach( $resultado as $cliente) {
                            ?>
                            <tr>
                                <td><?php echo $cliente->getNome(); ?></td>
                                <p></p>
                                <td><?php echo $cliente->getTelefone(); ?></td>
                                <td><?php echo $cliente->getEmail(); ?></td>
                                <p></p>
                                <td><?php echo $cliente->getEndereco(); ?></td>
                                <p></p>
                                <td>

                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
    </div>
</div>