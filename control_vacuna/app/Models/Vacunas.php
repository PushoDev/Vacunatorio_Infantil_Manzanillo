<?php

namespace App\Models;

use CodeIgniter\Model;

class Vacunas extends Model
{
    protected $table = 'esquema_vacunacion';
    
    public function obtenerCantidaddeVacunas()
    {
        return $this->countAll();
    }
}