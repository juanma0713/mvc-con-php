<?php 

class Controlador{
    public $vista;
    public$modelo;
    


    public function __construct()
    {
       $this->vista= new vista(); 
    }
}