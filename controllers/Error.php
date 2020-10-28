<?php

    class Errors extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function notFound()
        {
            //echo "Mensaje desde el controlador";
            $this->views->getView($this, "notFound");
        }

    }

    $notFound = new Errors();
    $notFound->notFound();

?>