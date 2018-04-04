<?php
/**
 * Created by PhpStorm.
 * User: lucasfogaca
 * Date: 04/04/2018
 * Time: 13:20
 */

namespace App\model\dao;

use App\model\Entidades\Cliente;
use App\Models\DAO\BaseDAO;


class ClienteDAO extends BaseDAO{

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

}