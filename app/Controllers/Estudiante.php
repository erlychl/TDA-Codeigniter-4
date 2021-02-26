<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\EstudianteModel;


class Estudiante extends BaseController {
    protected $estudiante;

    public function __construct()
    {
        $this->estudiante = new EstudianteModel();
    }

    public function index($activo = 1){
          
        $estudiante = $this->estudiante->where('activo',$activo)->findAll();
        $data = ['titulo' => 'Estudiante', 'rows' => $estudiante];
        
          return view("header").view("Estudiantes/listado", $data);
          
    }

    public function insertar(){
        $data = ['titulo' => 'Agregar estudiante'];

        return view("header").view("Estudiantes/formulario", $data);

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
