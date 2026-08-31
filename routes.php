<?php

use Controller\{
    UsuariosController,
    InicioController,
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $url;

switch ($url) {
    case "/":
        InicioController::index();
        break;

    case "/usuarios":
        UsuariosController::listar();
        break;

    case "/usuarios/cadastro":
        UsuariosController::cadastro();
        break;

    case "/usuarios/excluir":
        UsuariosController::exclusao();
        break;

    case "/admin":
        InicioController::notFound();
        break;
    
}
