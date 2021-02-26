<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DocenteModel;

class Docente extends BaseController
{
    protected $docente;

    public function __construct()
    {
        $this->docente = new DocenteModel();
    }

    public function index($activo = 1)
    {
        $docente = $this->docente->where('activo',$activo)->findAll();
        $data = ['titulo' => 'Docente', 'datos' => $docente];

        echo view('header_');
        echo view('Docente_/Docente_', $data);
        echo view('footer_');
    }

    public function nuevo()
    {
        $data = ['titulo' => 'Agregar docente'];

        echo view('header_');
        echo view('Docente_/nuevo', $data);
        echo view('footer_');
    }
}