<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Vacunas extends Seeder
{
    public function run()
    {
        $vacunas = [
            [
                'vacuna' => 'BCG',
                'edad' => '2 meses',
                'c_identidad' => '23082243240',
                'cmf' => '1',
                'dir_particular' => '2da Ave No.305 ent/16 y 17 Rpto.Cespe',
                'dosis_ml' => '0.05',
                'via' => 'ID',
                'region_aplicacion' => 'Deltoide Izquierdo',
                'lugar_aplicacion' => 'Maternidad',
                'imagen_vac' => 'imagenvac1.jpg',
                'resumen' => ' Contra la Tuberculosis',
            ]
        ];

        $this->db->table('esquema_vacunacion')->insertBatch($vacunas);
    }
}