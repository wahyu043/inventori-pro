<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
    protected $table = 'barang_keluar';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kode_barang',
        'nama_barang',
        'jumlah',
        'tanggal_keluar',
        'no_faktur',
        'stok',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
}
