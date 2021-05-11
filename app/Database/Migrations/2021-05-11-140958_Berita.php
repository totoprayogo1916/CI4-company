<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_berita' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_user' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'   => true,
			],
			'id_kategori' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'   => true,
			],
			'slug_berita' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'judul_berita' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'ringkasan' => [
				'type'       => 'VARCHAR',
				'constraint' => 500,
			],
			'isi' => [
				'type'       => 'TEXT',
			],
			'status_berita' => [
				'type'       => 'VARCHAR',
				'constraint' => 20,
			],
			'jenis_berita' => [
				'type'       => 'VARCHAR',
				'constraint' => 20,
			],
			'keywords' => [
				'type' => 'TEXT',
			],
			'gambar' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				'default'    => null,
				'null'       => true
			],
			'icon' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				'default'    => null,
				'null'       => true
			],
			'hits' => [
				'type'       => 'INT',
				'constraint' => 11,
			],
			'tanggal_post' => [
				'type' => 'DATETIME',
			],
			'tanggal_publish' => [
				'type' => 'DATETIME',
			],
			'tanggal' => [
				'type'    => 'TIMESTAMP',
				// 'default' => 'CURRENT_TIMESTAMP'
			],
		]);
		$this->forge->addKey('id_berita', true);
		$this->forge->createTable('berita', true);
	}

	public function down()
	{
		//
		$this->forge->dropTable('berita', true);
	}
}
