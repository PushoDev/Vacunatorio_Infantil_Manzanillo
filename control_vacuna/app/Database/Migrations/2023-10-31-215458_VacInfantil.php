<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVacInfantil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_infante' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'edad' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'c_identidad' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'cmf' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'dir_particular' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],            
        ]);

        $this->forge->addKey('id_infante', true);
        $this->forge->createTable('vac_infantil');
    }

    public function down()
    {
        $this->forge->dropTable('vac_infantil');
    }
}