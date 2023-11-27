<?php
namespace App\Models;

use CodeIgniter\Model;

class usuarios extends Model {
    protected $table = 't_usuarios';    
    protected $primarykeys = 'id_usuario';
    
    public function obtenerUsuario($data) {
            $Usuario = $this ->db->table('t_usuarios');
            $Usuario -> where($data);
            return $Usuario->get()->getResultArray();
        }

}

/* End of file ModelName.php */


?>