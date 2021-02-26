<?php
<<<<<<< HEAD
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
=======

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DocenteModel;

class Docente extends BaseController
{
    protected $docentes;

    public function __construct()
    {
        $this->docentes = new DocenteModel();
    }

    public function index($activo = 1)
    {
        $docentes = $this->docentes->where('activo',$activo)->findAll();
        $data = ['titulo' => 'Docente', 'datos' => $docentes];

        echo view('header_');
        echo view('Docente_/Docente_', $data);
        echo view('footer_');
    }

    public function insertar()
    {
        $data = ['titulo' => 'Agregar docentes'];

        echo view('header_');
        echo view('Docente_/formulario1', $data);
        echo view('footer_');
    }

    public function guardar(){
       // $apellidos = $this->input->post['apellidos'];
       // $nombres = $this->input->post['nombres'];
       // $curso = $this->input->post['curso'];

        $data = [

            'apellidos'=>$apellidos,
            'nombres'=>$nombres,
            'curso'=>$curso
        ]
        $this->db->insert('docentes',$data);

        header("location:".base_url()."/docentes");
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c

    }
}