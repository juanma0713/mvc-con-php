<?php

Class App{
    public function __construct()
    {
        require_once './controller/Principal.controlador.php';
        $principal = new PrincipalControlador();
        require_once './controller/Principal2.controlador.php';
        $principal2 = new Principal2Controlador();
    }
}