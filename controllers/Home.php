<?php

    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina Principal";
            $data['section_name'] = "home"; 
            $this->views->getView($this, "home", $data);
        }

        public function insertar()
        {
            $data = $this->model->setUser(
                "mayramaghdz@gmail.com",
                1,
                "abcdef",
                "Mayra",
                "Magana Hernandez"
            );
            print_r($data);
        }

        public function verUsuario($id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar()
        {
            $data = $this->model->updateUser(2, "goldenelecttro@gmail.com", 2, "123", "Eduardo", "León");
            print_r($data);
        }

        public function verUsuarios()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminarUsuario($id)
        {
            $data = $this->model->deleteUser($id);
            print_r($data);
        }
    }

?>