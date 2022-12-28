<?php namespace App\Database\Migrations;

class Komentar extends \CodeIgniter\Database\Migration
{
	public function up(){
		$this->forge->addField([
			'id_komentar'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE,
			],
			'id_barang'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
			],
			'id_user'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
			],
			'komentar'=>[
				'type'=>'TEXT',
				
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
		$this->forge->addKey('id_komentar', TRUE);
		//pengambilan id_usr
		$this->forge->addForeignKey('id_user', 'user', 'id');
		//pengambilan id
		$this->forge->addForeignKey('id_barang', 'barang', 'id_barang');

		//membuat tabel
		$this->forge->createTable('komentar');
	}
	public function down(){
		$this->forge->dropTable('komentar');

	}
}

?>