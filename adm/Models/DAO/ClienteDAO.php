<?php
/**
 * Created by PhpStorm.
 * User: lucasfogaca
 * Date: 04/04/2018
 * Time: 13:20
 */





require_once("models/Entidades/Cliente.php");
require_once("Models/DAO/BaseDAO.php");
require_once("models/DAO/ClienteDAO.php");



class ClienteDAO extends BaseDAO {

    public  function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM clientes WHERE id_cliente = $id"
            );

            return $resultado->fetchObject(Cliente::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM clientes'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Cliente::class);
        }

        return false;
    }

    public  function salvar(Cliente $cliente) {
        try {

            $nome      = $cliente->getNome();
            $email     = $cliente->getEmail();
            $telefone  = $cliente->getTelefone();
            $endereco  = $cliente->getEndereco();

            return $this->insert(
                'clientes',
                ":nome,:email,:telefone,:endereco",
                [
                    ':nome'=>$nome,
                    ':email'=>$email,
                    ':telefone'=>$telefone,
                    ':endereco'=>$endereco
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function atualizar(Cliente $cliente){
        try{
            $id_cliente             = $cliente->getIdCliente();
            $nome                   = $cliente->getNome();
            $email                  = $cliente->getEmail();
            $telefone               = $cliente->getTelefone();
            $endereco               = $cliente->getEndereco();

            return $this->update(
                'clientes',
                "nome = :nome,email = :email,telefone = :telefone,endereco = :endereco",
                [
                    ':id_cliente'=>$id_cliente,
                    ':nome'=>$nome,
                    ':email'=>$email,
                    ':telefone'=>$telefone,
                    ':endereco'=>$endereco
                ],
                "id_cliente = :id_cliente"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Cliente $cliente)
    {
        try {
            $id = $cliente->getIdCliente();

            return $this->delete('clientes',"id_cliente = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar", 500);
        }
    }

}
