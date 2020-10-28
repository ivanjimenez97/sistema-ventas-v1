<?php

    class HomeModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function setUser(string $usuario, int $rol_id, string $password, string $nombre, string $apellido)
        {
            $query_insert = "INSERT INTO usuarios(
                            usuario, rol_id, pass, nombre, apellido
                            ) VALUES(?,?,?,?,?)";
            $arrayData = array(
                $usuario, 
                $rol_id,
                $password,
                $nombre,
                $apellido
            );
            
            $request_insert = $this->insert($query_insert,$arrayData);
            return $request_insert;
        }

        public function getUser($id)
        {
            $sql = "SELECT * FROM usuarios WHERE usuario_id = $id";
            $request = $this->select($sql);
            return $request; 
        }

        public function updateUser(int $id, string $usuario, int $rol_id, string $pass, string $nombre, string $apellido)
        {
            $sql = "UPDATE usuarios SET usuario = ?, rol_id = ?, pass = ?, nombre = ?, apellido = ? WHERE usuario_id = $id";
            $arrayData =  array($usuario, $rol_id, $pass, $nombre, $apellido);
            $request = $this->update($sql, $arrayData);
            return $request;
        }

        public function getUsers()
        {
            $sql = "SELECT * FROM usuarios";
            $request = $this->select_all($sql);
            return $request;
        }

        public function deleteUser($id)
        {
            $sql = "DELETE FROM usuarios WHERE usuario_id = $id";
            $request = $this->delete($sql);
            return $request;
        }
    }

?>