<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangMasukTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'kode_barang'    => ['type' => 'VARCHAR', 'constraint' => 50],
            'nama_barang'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'jumlah'         => ['type' => 'INT', 'constraint' => 11],
            'tanggal_masuk'  => ['type' => 'DATE'],
            'no_faktur'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'stok'           => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barang_masuk');
    }

    public function down()
    {
        $this->forge->dropTable('barang_masuk');
    }
}
