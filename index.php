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
     }
 }
