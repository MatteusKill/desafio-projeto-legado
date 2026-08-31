<?php

namespace Controller;

use Model\Usuarios;

class UsuariosController extends Controller
{

    public static function listar()
    {
        $model = new Usuarios();
        $model->getAllRows();
        parent::render('/Usuarios/listar', $model);
    }

    public static function cadastro()
    {     
        $model = new Usuarios();
        if(parent::isPost())
        {
            $model->id = !empty($_POST['id']) ? $_POST['id'] : null;
            $model->nome = $_POST['nome'];
            $model->email = $_POST['email'];
            $model->senha = $_POST['senha'];
            // print_r($model);
            // exit;
            $model = $model->save();
            if($model){
                parent::redirect('/Usuarios/listar');
            }
        }
        else{
            if(isset($_GET['id'])){

                 $id = $_GET['id'];
                 $model = Usuarios::getById($id);
                //  print_r($model);
                //  exit;
            }
            
            parent::render('/Usuarios/cadastrar', $model);
        }

    }

    public static function exclusao()
    {
        if(isset($_GET['id'])){

            $id = $_GET['id']; //captura o id que veio via GET
            $model = new Usuarios();
            $model->delete($id);
            parent::redirect('/Usuarios/listar');
       }
    }
}