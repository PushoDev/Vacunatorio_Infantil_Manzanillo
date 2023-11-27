<?php

namespace App\Models;

use CodeIgniter\Model;

class Infantil extends Model
{
    protected $table = 'vac_infantil';
    
    public function obtenerCantidaddeinfantes()
    {
        return $this->countAll();
    }
}