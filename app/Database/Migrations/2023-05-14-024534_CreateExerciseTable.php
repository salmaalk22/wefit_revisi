<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExerciseTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "video" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "type" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('exercise', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('exercise', true); //If Exists drop table products
    }
}
