<?php 

class SecondControlador extends Controlador{

    public function __construct()
    {
       parent::__construct();

    }

    public function inicio(){
        $this->vista->mostrar("principal/index2");
  }

}



