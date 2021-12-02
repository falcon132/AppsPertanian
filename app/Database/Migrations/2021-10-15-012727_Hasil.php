<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hasil extends Migration
{

	public function up()
	{
		$this->forge->addField([
			'nama'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'lokasi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'usia'       => [
				'type'           => 'INT',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]

		]);
		$this->forge->addPrimaryKey('nama', true);
		$this->forge->createTable('Hasil');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('hasil');
	}
}
