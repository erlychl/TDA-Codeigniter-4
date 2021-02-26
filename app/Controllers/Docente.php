<?php

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

    }
}