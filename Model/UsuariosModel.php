<?php

namespace Model;

use DAO\UsuariosDAO; 

final class Usuarios extends Model
{
    public ?int $id;
    public string $nome;
    public string $email;
    public string $senha;

    public function getAllRows()
    {   
        $objCli = new UsuariosDAO();
        $this->rows = $objCli->select();
        return $this->rows;
    }

    public static function getById(int $id)
    {   
        $objCli = new UsuariosDAO();
        return $objCli->selectById($id);
    }

    public function save()
    {   
        $objCli = new UsuariosDAO();
        return $objCli->save($this);
    }

    public function delete(int $id)
    {   
        $objCli = new UsuariosDAO();
        return $objCli->delete($id);
    }
}
