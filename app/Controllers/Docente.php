<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DocenteModel;


class Docente extends BaseController {

    protected $docente;

    public function __construct()
    {
        $this->docente = new DocenteModel();
    }

    public function index($activo = 1){
        $docente = $this->docente->where('activo',$activo)->findAll();
        $data = ['titulo' => 'Docente', 'rows' => $docente];


          return view("header").view("Docentes/listado1", $data);
          
    }

    public function insertar(){

        $data = ['titulo' => 'Agregar docente'];

        return view("header").view("Docentes/formulario1", $data);

    }

    public function guardar(){
        $nombre = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $curso = $this->input->post('curso');

        $data = array(
            
            'nombre'=>$nombre,
            'apellidos'=>$apellidos,
            'curso'=>$curso
        );
        $this->db->insert('docente',$data);

        header("location:".base_url()."/index.php/docente");

    }
}