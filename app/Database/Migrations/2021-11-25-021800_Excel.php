<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Otomatis extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'jenis_tanaman'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'jenis_bibit'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'luas_lahan'       => [
				'type'       => 'INT',
				'constraint' => '20',
			],
			'name_user'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('excel');
	}

	public function down()
	{
		$this->forge->dropTable('excel');
	}
}
