<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMasukModel extends Model
{
    protected $table            = 'barang_masuk';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'kode_barang',
        'nama_barang',
        'jumlah',
        'tanggal_masuk',
        'no_faktur',
        'stok'
    ];
    protected $useTimestamps    = true;
}
