<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ],
            'jumlah_produk' => [
                'type' => 'INT',
                'constraint' => 8,
                'null' => FALSE,
            ],
            'total_stok' => [
                'type' => 'INT',
                'constraint' => 8,
                'null' => FALSE,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('product_category');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('product_category');
    }
}