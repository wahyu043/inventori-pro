<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;
use CodeIgniter\Controller;

class BarangMasuk extends BaseController
{
    protected $barangMasukModel;

    public function __construct()
    {
        $this->barangMasukModel = new BarangMasukModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $items = $this->barangMasukModel->findAll();

        $barangModel = new \App\Models\BarangModel();
        $master      = $barangModel->findAll();

        $stokMap = [];
        foreach ($master as $b) {
            $stokMap[$b['kode_barang']] = $b['stok'];
        }

        return view('barang_masuk/index', [
            'items'   => $items,
            'stokMap' => $stokMap
        ]);
    }

    public function create()
    {
        return view('barang_masuk/create');
    }

    public function store()
    {
        $kode   = $this->request->getPost('kode_barang');
        $jumlah = (int) $this->request->getPost('jumlah');

        // 1. Simpan transaksi masuk (tanpa stok)
        $this->barangMasukModel->save([
            'kode_barang'    => $kode,
            'nama_barang'    => $this->request->getPost('nama_barang'),
            'jumlah'         => $jumlah,
            'tanggal_masuk'  => $this->request->getPost('tanggal_masuk'),
            'no_faktur'      => $this->request->getPost('no_faktur'),
        ]);

        // 2. Update stok master
        $barangModel = new \App\Models\BarangModel();
        $barang      = $barangModel->where('kode_barang', $kode)->first();

        if ($barang) {
            $barangModel->update($barang['id'], [
                'stok' => $barang['stok'] + $jumlah
            ]);
        }

        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['barang'] = $this->barangMasukModel->find($id);
        return view('barang_masuk/edit', $data);
    }

    public function update($id)
    {
        // data lama
        $old = $this->barangMasukModel->find($id);
        $oldJumlah = (int) $old['jumlah'];

        // data baru
        $kode   = $this->request->getPost('kode_barang');
        $jumlah = (int) $this->request->getPost('jumlah');

        // 1. Update transaksi
        $this->barangMasukModel->update($id, [
            'kode_barang'    => $kode,
            'nama_barang'    => $this->request->getPost('nama_barang'),
            'jumlah'         => $jumlah,
            'tanggal_masuk'  => $this->request->getPost('tanggal_masuk'),
            'no_faktur'      => $this->request->getPost('no_faktur'),
        ]);

        // 2. Update stok master (stok = stok + selisih)
        $barangModel = new \App\Models\BarangModel();
        $barang      = $barangModel->where('kode_barang', $kode)->first();

        $selisih = $jumlah - $oldJumlah;

        if ($barang) {
            $barangModel->update($barang['id'], [
                'stok' => $barang['stok'] + $selisih
            ]);
        }

        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $old = $this->barangMasukModel->find($id);

        // rollback stok master
        $barangModel = new \App\Models\BarangModel();
        $barang      = $barangModel->where('kode_barang', $old['kode_barang'])->first();

        if ($barang) {
            $barangModel->update($barang['id'], [
                'stok' => $barang['stok'] - $old['jumlah']
            ]);
        }

        // hapus transaksi masuk
        $this->barangMasukModel->delete($id);

        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil dihapus!');
    }
}
