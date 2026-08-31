<?php

namespace DAO;

use Model\Usuarios;

class UsuariosDAO extends DAO 
{
    public function __construct(){
        
        parent::__construct();
    }

    public function save(Usuarios $model)
    {
        return ($model->id == null) ? $this->insert($model) : $this->update($model);
    }

    public static function select()
    {
        $sql = "SELECT * FROM usuarios";
        $stmt = parent::$connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "Model\Usuarios");
    }

    public static function selectById(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = parent::$connection->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject(Usuarios::class);
    }

    public function insert(Usuarios $model)
    {
        $sql = "INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?,?)";
        $stmt = parent::$connection->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindVAlue(3, $model->senha);
        $stmt->execute();

        $model->id = parent::$connection->lastInsertId();
        return $model;
    }

    public function update(Usuarios $model)
    {
        $sql = "UPDATE usuarios SET nome=?, email=?, senha=? 
                WHERE id =?";
        $stmt = parent::$connection->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        
        return $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM usuarios WHERE id =?";
        $stmt = parent::$connection->prepare($sql);
        $stmt->bindValue(1, $id);
        
        return $stmt->execute();
    }



}

