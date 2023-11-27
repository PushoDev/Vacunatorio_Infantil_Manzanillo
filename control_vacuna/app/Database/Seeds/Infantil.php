<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Infantil extends Seeder
{
    public function run()
    {
        $infantil = [
            [
                'nombre' => 'Luis Alberto Guisado',
                'edad' => '2 meses',
                'c_identidad' => '23082243240',
                'cmf' => '1',
                'dir_particular' => '2da Ave No.305 ent/16 y 17 Rpto.Cespedez',                
            ],
            [
                'nombre' => 'Willian Miguel Guisado',
                'edad' => '6 meses',
                'c_identidad' => '23022443240',
                'cmf' => '1',
                'dir_particular' => '2da Ave No.305 ent/16 y 17 Rpto.Cespedez',                
            ],
        ];
            
        $this->db->table('vac_infantil')->insertBatch($infantil);
    }
}