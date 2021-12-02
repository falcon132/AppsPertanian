<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'nohp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'lokasi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'usia'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'komoditas'       => [
				'type'           => 'VARCHAR',
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
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('pengguna');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pengguna');
	}
}
