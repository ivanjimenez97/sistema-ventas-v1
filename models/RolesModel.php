<?php

    class RolesModel extends Mysql
    {

        public $intIdrol;
        public $strRol;
        public $strDescripcion;
        public $intStatus;

        public function __construct()
        {
            parent::__construct();
        }

        public function selectRoles()
        {
            //Extraer Roles
            $sql = "SELECT * FROM rol WHERE status != 0";
            $request = $this->select_all($sql);
            return $request;
        }

        public function insertRol(string $rol, string $descripcion, int $status)
        {
            $return = "";
            $this->strRol = $rol;
            $this->strDescripcion = $descripcion;
            $this->intStatus = $status;

        $sql = "SELECT * FROM rol WHERE tipo_rol = '{$this->strRol}'";
        $request = $this->select_all($sql);

            if (empty($request)) {
                $query_insert = "INSERT INTO rol(tipo_rol,descripcion,status) VALUES(?,?,?)";
                $arrayData = array($this->strRol, $this->strDescripcion, $this->intStatus);
                $request_insert = $this->insert($query_insert, $arrayData);
                $return = $request_insert;
            }
            else
            {
                $return = "exist";
            }
            return $return;
        }
    }

?>