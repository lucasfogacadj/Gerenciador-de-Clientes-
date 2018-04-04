<?php

namespace App\controller;


class HomeController
{

    public function index()
    {
        include "view/header.php";
        include "view/site/london.php";
        include "view/footer.php";
    }

    public function london()
    {
        include "view/header.php";
        include "view/site/london.php";
        include "view/footer.php";
    }

    public function paris()
    {
        include "view/header.php";
        include "view/site/paris.php";
        include "view/footer.php";
    }

    public function tokio()
    {
        include "view/header.php";
        include "view/site/tokio.php";
        include "view/footer.php";
    }

}
