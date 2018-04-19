<?php

session_start();
if(!isset($_GET['c'])){
    require_once("Controllers/mainController.php");
    $main = new mainController();
    $main ->index();


}else{
    switch ($_REQUEST['c']){
        case 'u':
            require_once("Controllers/userController.php");
            $user = new userController();
            if(!isset($_GET['a'])){
                $user->index;
            }else{
                switch($_REQUEST['a'])
                {
                    case 'cl': $user -> consultLogin();
                    break;
                }
        break;
            }
        case'm':
            require_once("Controllers/mainController.php");
            $main = new mainController();
            if(!isset($_GET['a'])){
                $main->index;
            }else{
                switch($_REQUEST['a']){
                    case 'i': $main->index();
                    break;
                    case 'l': $main->login();
                    break;
                    case 'sd':$main->destroy();
                    break;
                }
            }
            break;

            case 'c':
            require_once("Controllers/ClientesController.php");
            $site = new ClientesController();
            if (!isset($_GET['a'])) {
                $site -> index();
            }
            else {
                switch ($_REQUEST['a']) {
                    case 'cc': $site->getformulario();
                        break;
                    case 'ccb': $site->getCadastro();
                        break;
                    case 'ccs': $site->salvar();
                        break;
                    case 'lu':$site->listaCliente();
                        break;
                    case 'cca': $site->mostrarFormulario();
                        break;
                    case 'aa': $id = ($_GET['id']); $site->EditarCliente($id);
                    break;
                    case'ac': $site->atualizarCliente();
                    break;
                    case 'ad': $id = ($_GET['id']); $site->excluirCliente($id);
                    break;
                }
            }
        }
}
