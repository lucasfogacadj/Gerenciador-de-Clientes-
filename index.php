 <?php

 require_once 'vendor/autoload.php';

 use \App\controller\HomeController;
 use \App\controller\ClientesController;



 if (!isset($_GET['c'])) {
     require_once ('controller/HomeController.php');
     $site = new HomeController();
     $site -> index();
 }
 else {
     switch ($_REQUEST['c']) {
         case 's':
             require_once ('controller/HomeController.php');
             $site = new HomeController();
             if (!isset($_GET['a'])) {
                 $site -> index();
             }
             else {
                 switch ($_REQUEST['a']) {
                     case 'h': $site -> index(); break;
                     case 's': $site -> london(); break;
                     case 'p': $site -> paris(); break;
                     case 'c': $site -> tokio(); break;

                 }
             }
         case 'c':
             require_once ('controller/ClientesController.php');
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
