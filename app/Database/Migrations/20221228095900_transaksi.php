<?php namespace App\Database\Migrations;

class Transaksi extends \CodeIgniter\Database\Migration
{
	public function up(){
		$this->forge->addField([
			'id_transaksi'=>[
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
			'id_pembeli'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
			],
			'nama'=>[
				'type'=>'TEXT',
				
			],
			'jumlah'=>[
				'type'=>'INT',
				'constraint'=>11,

			],
			'total_harga'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
			
			'total_berat'=>[
				'type'=>'INT',
				'constraint'=>11,
				
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
		$this->forge->addKey('id_transaksi', TRUE);
		//pengambilan id_pembeli
		$this->forge->addForeignKey('id_pembeli', 'user', 'id');
		//pengambilan id
		$this->forge->addForeignKey('id_barang', 'barang', 'id_barang');

		//membuat tabel
		$this->forge->createTable('transaksi');
	}
	public function down(){
		$this->forge->dropTable('transaksi');

	}
}

?>