<?php

    class Mysql extends Conexion
    {
        private $conexion;
        private $strQuery;
        private $arrayValues;

        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
        #Insertar un Registro
        public function insert(string $query, array $arrayValues)
        {
            $this->strQuery = $query;
            $this->arrayValues = $arrayValues;

            $insert = $this->conexion->prepare($this->strQuery);
            $resInsert = $insert->execute($this->arrayValues);
            if ($resInsert) {
                $lastInsert = $this->conexion->lastInsertId();
            }else
            {
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        #Buscar un Registro
        public function select(string $query)
        {
            $this->strQuery = $query;
            $result = $this->conexion->prepare($this->strQuery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        #Devuelve todos los Registros
        public function select_all(string $query)
        {
            $this->strQuery = $query;
            $result = $this->conexion->prepare($this->strQuery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        #actualizar registros
        public function update(string $query, array $arrayValues)
        {
            $this->strQuery = $query;
            $this->arrayValues = $arrayValues;
            $update = $this->conexion->prepare($this->strQuery);
            $resExecute = $update->execute($this->arrayValues);
            return $resExecute;
        }

        #Eliminar un registro
        public function delete(string $query)
        {
            $this->strQuery = $query;
            $result = $this->conexion->prepare($this->strQuery);
            $del = $result->execute();
            return $del;
        }
    }

?>