<?php

class mainController
{
    public function index()
{
 if(!isset($_SESSION["user"])){
     header("Location: index.php?c=m&a=l");
     }
     require("views/header.php");
     require("views/home.php");
     require("views/footer.php");
}
    public function login()
    {
        require("Views/user/login.php");
    }

    public function destroy()
    {
        session_destroy();
        header("Location: index.php?c=m&a=l");
    }

}
