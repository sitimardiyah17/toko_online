<?php namespace App\Database\Migrations;

class Barang extends \CodeIgniter\Database\Migration
{
	public function up(){
		$this->forge->addField([
			'id_barang'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE,
			],
			'nama'=>[
				'type'=>'TEXT',
				
			],
			'harga'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
			'deskripsi'=>[
				'type'=>'TEXT',

			],
			'stok'=>[
				'type'=>'INT',
				'constraint'=>11,

			],
			'berat'=>[
				'type'=>'INT',
				'constraint'=>11,
				
			],
			'gambar'=>[
				'type'=>'TEXT',
				'null'=>TRUE,
			],
			
			'created_by'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
			'created_date'=>[
				'type'=>'DATETIME',
			],
			'updated_by'=>[
				'type'=>'INT',
				'constraint'=>11,
				'null'=>TRUE,
			],
			'updated_date'=>[
				'type'=>'DATETIME',
				'null'=>TRUE,
			]
		]);
		//membuat primary key
		$this->forge->addKey('id_barang', TRUE);
		//membuat tabel
		$this->forge->createTable('barang');
	}
	public function down(){
		$this->forge->dropTable('barang');

	}
}

?>