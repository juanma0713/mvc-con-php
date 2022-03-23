<?php

class UsuarioControlador extends Controlador{
    public function __construct()
    {
        parent:: __construct();
        $this->cargarModelo("Usuario");
    }

    public function inicio(){
        $usuario =new Usuario("","","","");
        $usuarios = $usuario->listarTodos();
        $this->vista->usuarios = $usuarios;
        $this->vista->mostrar('usuario/index');

    }

    public function crear()
    {
        $this->vista->mostrar('usuario/crear');
    }

    public function almacenar()
    {
        $cedula = $_POST['cedula']?? "";
        $nombre = $_POST['nombre']?? "";
        $correo = $_POST['correo']?? "";
        $contrasena = $_POST['contrasena']?? "";

        $usuario = new Usuario($cedula, $nombre, $correo, $contrasena);
        $usuario->guardar();

        echo "guardado";
    }
}