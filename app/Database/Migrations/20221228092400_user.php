<?php namespace App\Database\Migrations;

class User extends \CodeIgniter\Database\Migration
{
	public function up(){
		$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE,
			],
			'username'=>[
				'type'=>'VARCHAR',
				'constraint'=>'100',
				
			],
			'password'=>[
				'type'=>'TEXT',

			],
			'salt'=>[
				'type'=>'TEXT',

			],
			'avatar'=>[
				'type'=>'TEXT',
				'null'=>TRUE,
			],
			'role'=>[
				'type'=>'INT',
				'constraint'=>11,
				'default'=>1,
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
		$this->forge->addKey('id', TRUE);
		//membuat tabel
		$this->forge->createTable('user');
	}
	public function down(){
		$this->forge->dropTable('user');

	}
}

?>