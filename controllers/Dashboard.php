<?php

    class Dashboard extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function dashboard()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "";
            $data['page_title'] = "Dashboard";
            $data['page_name'] = "dashboard";

            //$this->views->getView($this, "../templates/header_admin", $data);
            //$this->views->getView($this, "../templates/nav_admin");
            $this->views->getView($this, "index", $data);
            //$this->views->getView($this, "../templates/footer_admin", $data);
        }
    }

?>