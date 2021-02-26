<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Estudiante extends BaseController {
    protected $estudiante;

    public function __construct()
    {
        $this->estudiante= new UserModel();
    }

    public function index(){

        $data = $this->db->get('estudiante');
        $rows = $data->result();
        $datos['rows'] = $rows;


        return view("header").view("Estudiantes/listado",$datos).view("footer");
  
    }

    public function insertar(){

        return view("header").view("Estudiantes/formulario").view("footer");

    }

    public function guardar(){
        $grado = $this->input->post('grado');
        $seccion = $this->input->post('seccion');
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $direccion = $this->input->post('direccion');

        $data = array(
            'grado'=>$grado,
            'seccion'=>$seccion,
            'nombres'=>$nombres,
            'apellidos'=>$apellidos,
            'direccion'=>$direccion,
        );
        $this->db->insert('estudiante',$data);

        header("location:".base_url()."/index.php/estudiante");

    }
}