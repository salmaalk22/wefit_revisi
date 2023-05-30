<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKaloriTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "user_id" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kalori" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "jam" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "date" => [
                "type" => "DATE",
                // "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('kalori', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('kalori', true); //If Exists drop table products
    }
}
