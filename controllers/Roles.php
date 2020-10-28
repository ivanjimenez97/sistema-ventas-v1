<?php

    class Roles extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function Roles()
        {   
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles de Usuario";
            $data['page_title'] = "Roles de Usuario";
            $data['page_name'] = "Roles de Usuario";

            $this->views->getView($this, "roles", $data);
        }

        public function getRoles()
        {
            $arrayData = $this->model->selectRoles();

            for ($i=0; $i < count($arrayData); $i++) { 
                if ($arrayData[$i]['status'] == 1) {
                    $arrayData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
                }else{
                    $arrayData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                $arrayData[$i]['options'] = '<div class="text-center">
                    <button class="btn btn-secondary btn-sm btnPermisosRol rl="'.$arrayData[$i]['rol_id'].'" title="Permisos">
                        <i class="fas fa-key"></i>
                    </button>
                    
                    <button class="btn btn-primary btn-sm btnEditRol rl="'.$arrayData[$i]['rol_id'].'" title="Editar">
                        <i class="fas fa-pencil-alt"></i>
                    </button> 

                    <button class="btn btn-danger btn-sm btnDeleteRol rl="'.$arrayData[$i]['rol_id'].'" title="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button> 
                </div>';
            }
            echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
            die(); 
        }

        public function setRol()
        {
            $strRol = strClean($_POST['txtNombre']);
            $strDescripcion = strClean($_POST['txtDescripcion']);
            $intStatus = intval($_POST['listStatus']);
            $request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);

            if ($request_rol > 0) {
                $arrayResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
            }elseif ($request_rol == 'exist') {
                $arrayResponse = array('status' => false, 'msg' => '¡Atención! El rol ya existe.');
            }else {
                $arrayResponse = array('status' => false, 'msg' => 'No es posible almacenar los datos.');
            }
            echo json_encode($arrayResponse, JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>