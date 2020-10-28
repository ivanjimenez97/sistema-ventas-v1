<?php
    //Este es el archivo para conectar con la base de datos mysql
    class Conexion
    {
        private $conect;

        public function __construct()
        {
            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try {
                $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexion Exitosa!.";
            } catch (PDOException $e) {
                $this->conect = "Error de Conexión";
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function conect()
        {
            return $this->conect;
        }

    }

?>