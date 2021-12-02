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
			'tenaga_nama'    => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => true,
			],
			'tenaga_jumlah'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'tenaga_harga'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'anorganik_nama'    => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => true,
			],
			'anorganik_jumlah'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'anorganik_harga'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'organik_nama'    => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => true,
			],
			'organik_jumlah'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'organik_harga'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'pestisida_nama'    => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => true,
			],
			'pestisida_jumlah'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'pestisida_harga'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'hasil_panen_jumlah'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'hasil_panen_harga'  => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('calculations');
	}

	public function down()
	{
		$this->forge->dropTable('calculations');
	}
}
