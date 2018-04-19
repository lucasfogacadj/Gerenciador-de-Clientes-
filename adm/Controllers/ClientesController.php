<?php
/**
 * Created by PhpStorm.
 * User: lucasfogaca
 * Date: 23/03/2018
 * Time: 12:20
 */




require_once ('models/Entidades/Cliente.php');
require_once ('models/DAO/ClienteDAO.php');




class ClientesController{

    public function listaCliente()
    {
        $clienteDAO = new ClienteDAO();
        $resultado = $clienteDAO->listar();
        include "views/header.php";
        include "views/clientes/listaCliente2.php";
        include "views/footer.php";
    }

    public function getformulario()
    {
        include "views/header.php";
        include "views/clientes/formulario.php";
        include "views/footer.php";
    }

    public function getCadastro()
    {
        include "views/header.php";
        include "views/clientes/CadastroCliente2.php";
        include "views/footer.php";
    }

    public function mostrarFormulario(){
        $nome = empty($_POST["cNome"]) ? "[nao informado]" : $_POST["cNome"];
        $senha = empty($_POST["cSenha"])?"[nao informado]" : $_POST["cSenha"];
        $sexo = isset($_POST["cSexo"])?$_POST["cSexo"]:"[nao informado]";
        $urgencia = isset($_POST["cUrgencia"])?$_POST["cUrgencia"]:"[nao informado]";
        $mensagem = isset($_POST["cMensagem"])?$_POST["cMensagem"]:"[nao informado]";
        $produto = isset($_POST["cproduto"])?$_POST["cproduto"]:"[nao informado]";
        $produtos = isset($_POST["cProdutos"])?$_POST["cProdutos"]:"[nao informado]";
        $opc = isset($_POST["checkbox"])?$_POST["checkbox"]:"[nao informado]";


        $formulario = array('nome'=>$nome,
                            'senha'=>$senha,
                            'sexo'=>$sexo,
                            'urgencia'=>$urgencia,
                            'mensagem'=>$mensagem,
                            'produto'=>$produto,
                            'produtos'=>$produtos,
                            'opc'=>$opc
            );

        include "view/header.php";
        //print_r($formulario);
        include "view/clientes/mostrarFormulario.php";
        include "view/footer.php";
    }
    public function salvar()
    {


        $cliente = new Cliente();
        $cliente->setNome($_POST['nome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setEndereco($_POST['endereco']);


        $ClienteDAO = new ClienteDAO();
        $ClienteDAO->salvar($cliente);

        include "views/header.php";
        include "views/sucesso.php";
        include "views/footer.php";

    }

    public function EditarCliente($id){

        $idCliente = $id;

        $ClienteDAO = new ClienteDAO();

        $cliente = $ClienteDAO->listar($idCliente);
        include "views/header.php";
        include "views/clientes/EditarCliente.php";
        include "views/footer.php";

    }

    public function atualizarCliente(){

        $cliente = new Cliente();
        $cliente->setIdCliente($_POST['id_cliente']);
        $cliente->setNome($_POST['nome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setEndereco($_POST['endereco']);

        //var_dump($cliente);
        $ClienteDAO = new ClienteDAO();
        $ClienteDAO->atualizar($cliente);
        include "views/header.php";
        include "views/sucesso.php";
        include "views/footer.php";

    }

    public function excluirCliente($id){

        $Cliente = new Cliente();

        $Cliente->setIdCliente($id);

        $clienteDao = new ClienteDAO();

        $clienteDao->excluir($Cliente);

        include "views/header.php";
        include "views/sucesso.php";
        include "views/footer.php";


    }


}
