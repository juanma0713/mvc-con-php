<?php 

class PrincipalControlador extends Controlador{
     
    public function __construct()
    {
       parent::__construct();
       echo"controlador principal funcionando";
       $this->vista->mostrar("principal/lista.php");
    }
}