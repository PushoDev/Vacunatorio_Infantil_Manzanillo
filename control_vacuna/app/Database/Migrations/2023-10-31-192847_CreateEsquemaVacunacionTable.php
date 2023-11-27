<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEsquemaVacunacionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_vac' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'vacuna' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            '1ra_dosis' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            '2da_dosis' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            '3ra_dosis' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'reactivacion' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'dosis_ml' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'via' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'region_aplicacion' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'lugar_aplicacion' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'imagen_vac' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'resumen' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_vac', true);
        $this->forge->createTable('esquema_vacunacion');
    }

    public function down()
    {
        $this->forge->dropTable('esquema_vacunacion');
    }
}
