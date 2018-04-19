<?php

class userController
{

    public function consultLogin()
    {
        require("Models/DAO/UsuarioDAO.php");
        $login = $_POST["login"];
        $user = new UsuarioDAO();
        if($user->verificaEmail($_POST['login'])){
            if($user->verificaSenha($_POST['pass'])){
                $_SESSION['user'] = "user";
            header("Location: index.php?c=m&a=i");
            }else{
                print("Senha Incorreta");
            }
        }else{
            print("Usuario não existe");
        }
    }

}
