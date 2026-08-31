<?php

namespace Controller;

class InicioController
{
    public static function index()
    {
        include VIEW . '/Inicial/index.php';
    }

    public static function notFound()
    {
        include VIEW . '/NotFound/notfound.php';
    }
}