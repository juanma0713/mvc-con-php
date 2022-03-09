<?php

class Principal2Controlador extends Controlador{

    public function __construct(){
    
     parent::__construct();
     echo "Principal2 functing";
     $this->vista->mostrar("principal2/lista2.php");

    }
}