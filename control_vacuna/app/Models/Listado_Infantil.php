<?php 

namespace App\Models;

use CodeIgniter\Model;

class Listado_Infantil extends Model {

    // Listar a los Infantiles Registrados
    public function listarInfantile() {
        $infantiles = $this -> db -> query("SELECT * FROM vac_infantil");
        return $infantiles -> getResult();
    }

    // Agregar Infantiles
    public function insertarinfantil($nuevoinfantil) {
        $nombreinf = $this -> db -> table('vac_infantil');
        $nombreinf -> insert($nuevoinfantil);

        return $this -> db -> insertID();
    }

    // Obtener Infantil
    public function obtenerinfantil($id_infante) {
        $nombreinf = $this->db->table('vac_infantil');
        $nombreinf->where('id_infante', $id_infante);

        return $nombreinf->get()->getResultArray();
    }

    // Actualizar datos infantiles
    public function actualizarinfantil($actualizarinfantil, $id_infante) {
        $nombreinf = $this->db->table('vac_infantil');
        $nombreinf -> set($actualizarinfantil);
        $nombreinf -> where('id_infante', $id_infante);

        return $nombreinf -> update();
    }

    // Eliminar Infantil de la Tabla
    public function eliminarinfantil($id_infante) {
        $nombreinf = $this -> db -> table('vac_infantil');
        $nombreinf -> where('id_infante', $id_infante);

        return $nombreinf -> delete();
    }
}



