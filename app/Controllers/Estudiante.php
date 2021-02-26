<?php
namespace App\Controllers;
use App\Controllers\BaseController;
<<<<<<< HEAD
use App\Models\EstudianteModel;

=======
use App\Models\UserModel;
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c

class Estudiante extends BaseController {
    protected $estudiante;

    public function __construct()
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c

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
<<<<<<< HEAD
}
=======
}
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c
