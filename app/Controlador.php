<?php 

class Controlador{
    public $vista;
    public$modelo;
    


    public function __construct()
    {
       $this->vista= new vista(); 
    }

    public function cargarModelo($nombre)
    {
       require_once 'model/' . $nombre. ".php";
       
    }
}