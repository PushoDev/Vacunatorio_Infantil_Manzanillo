<?php namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Stmt\Return_;

class Listado_Vacuna extends Model {

    //Listar Vacunas
    public function listarVacunas() {
        $vacunas = $this -> db -> query("SELECT * FROM esquema_vacunacion");
        return $vacunas -> getResult();
    }

    //Agregar Vacuna
    public function insertarvacuna($nuevavacuna) {
        $nombresvac = $this -> db -> table('esquema_vacunacion');
        $nombresvac -> insert($nuevavacuna);

        return $this -> db -> insertID();
    }

    //Obtener datos de la Vacuna
    public function obtenervacuna($id_vac) {
        $nombresvac = $this->db->table('esquema_vacunacion');
        $nombresvac->where('id_vac', $id_vac);

        return $nombresvac->get()->getResultArray();
    }

    //Actualizar Datos de la Vacuna
    public function actualizarvacunas($actualizarvacuna, $id_vac){
        $nombresvac = $this->db->table('esquema_vacunacion');
        $nombresvac->set($actualizarvacuna);
        $nombresvac->where('id_vac', $id_vac);

        return $nombresvac->update();
    }


    //Eliminar Vacuna
    public function eliminarvacuna($id_vac) {
        $nombresvac = $this -> db -> table('esquema_vacunacion');
        $nombresvac -> where($id_vac);
        
        return $nombresvac -> delete();
    }
}


