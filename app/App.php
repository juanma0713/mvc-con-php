<?php

Class App{
    public function __construct()
    {
        $url = $_GET['url'] ?? ""; //si llega vacio se manda un espacio
        $url = rtrim($url, "/");//se borran los slash /; ejempo= ///hola mundo ///, quedaria asi: hola mundo.
        $url = explode('/', $url); // se separa la cadena; ejemplo: Usuario/crear quedaria = [Usuario, crear].     
        
        
        if (empty($url[0])){
            require_once 'controller/Principal.controlador.php';
            $principal = new PrincipalControlador();
            $principal -> inicio();
            return;
            
        }

        $rutaArchivoControlador = "controller/" . ucfirst($url[0]) . ".controlador.php"; 

        if (!file_exists($rutaArchivoControlador)){
            die("Error, no exise el controlador");

        }

        require $rutaArchivoControlador;

        $nombreControlador = ucfirst($url[0]) . "Controlador";
        $controlador = new $nombreControlador;

        if(count($url)==1){
            $controlador->inicio();
        }

        if (count($url)==2){
            if(!method_exists($controlador, $url[1])){
                die("Error, el metodo no existe");
            }
            
            $controlador->{$url[1]}();
        }

        
    }
    
}