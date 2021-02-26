<?php

namespace App\Models;

use CodeIgniter\Model;

class DocenteModel extends Model
{
<<<<<<< HEAD
    protected $table      = 'docente';
=======
    protected $table      = 'docentes';
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

<<<<<<< HEAD
    protected $allowedFields = ['nombres', 'apellidos', 'curso'];
=======
    protected $allowedFields = ['apellidos', 'nombres', 'curso'];
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
<<<<<<< HEAD
}
=======
}
?>
>>>>>>> b816d29d5b1e374d215f17433d796c260680a74c
