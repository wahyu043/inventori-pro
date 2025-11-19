<?php

namespace App\Controllers;

use App\Models\BarangKeluarModel;

class BarangKeluar extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new BarangKeluarModel();
    }

    public function index()
    {
        $items = $this->model->findAll();

        $barangModel = new \App\Models\BarangModel();
        $master      = $barangModel->findAll();

        $stokMap = [];
        foreach ($master as $b) {
            $stokMap[$b['kode_barang']] = $b['stok'];
        }

        return view('barang_keluar/index', [
            'items'   => $items,
            'stokMap' => $stokMap
        ]);
    }

    public function create()
    {
        return view('barang_keluar/create');
    }

    public function store()
    {
        $kode   = $this->request->getPost('kode_barang');
        $jumlah = (int) $this->request->getPost('jumlah');

        // 1. Simpan transaksi keluar (tanpa stok)
        $this->model->save([
            'kode_barang'     => $kode,
            'nama_barang'     => $this->request->getPost('nama_barang'),
            'jumlah'          => $jumlah,
            'tanggal_keluar'  => $this->request->getPost('tanggal_keluar'),
            'no_faktur'       => $this->request->getPost('no_faktur'),
        ]);

        // 2. Update stok master: stok - jumlah
        $barangModel = new \App\Models\BarangModel();
        $barang      = $barangModel->where('kode_barang', $kode)->first();

        if ($barang) {
            $barangModel->update($barang['id'], [
                'stok' => $barang['stok'] - $jumlah
            ]);
        }

        return redirect()->to('/barang-keluar')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = $this->model->find($id);

        return view('barang_keluar/edit', ['item' => $item]);
    }

    public function update($id)
    {
        // data lama
        $old       = $this->model->find($id);
        $oldJumlah = (int) $old['jumlah'];

        // data baru
        $kode   = $this->request->getPost('kode_barang');
        $jumlah = (int) $this->request->getPost('jumlah');

        // 1. Update transaksi
        $this->model->update($id, [
            'kode_barang'     => $kode,
            'nama_barang'     => $this->request->getPost('nama_barang'),
            'jumlah'          => $jumlah,
            'tanggal_keluar'  => $this->request->getPost('tanggal_keluar'),
            'no_faktur'       => $this->request->getPost('no_faktur'),
        ]);

        // 2. Update stok master (stok = stok - selisih)
        $barangModel = new \App\Models\BarangModel();
        $barang      = $barangModel->where('kode_barang', $kode)->first();

        // selisih
        $selisih = $jumlah - $oldJumlah;

        if ($barang) {
            $barangModel->update($barang['id'], [
                'stok' => $barang['stok'] - $selisih
            ]);
        }

        return redirect()->to('/barang-keluar')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $old = $this->model->find($id);

        $barangModel = new \App\Models\BarangModel();
        $barang      = $barangModel->where('kode_barang', $old['kode_barang'])->first();

        // rollback stok
        if ($barang) {
            $barangModel->update($barang['id'], [
                'stok' => $barang['stok'] + $old['jumlah']
            ]);
        }

        $this->model->delete($id);

        return redirect()->to('/barang-keluar')->with('success', 'Data berhasil dihapus!');
    }
}
