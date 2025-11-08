<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;
use CodeIgniter\Controller;

class BarangMasuk extends Controller
{
    protected $barangMasukModel;

    public function __construct()
    {
        $this->barangMasukModel = new BarangMasukModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['barangMasuk'] = $this->barangMasukModel->findAll();
        return view('barang_masuk/index', $data);
    }

    public function create()
    {
        return view('barang_masuk/create');
    }

    public function store()
    {
        $this->barangMasukModel->save([
            'kode_barang'   => $this->request->getPost('kode_barang'),
            'nama_barang'   => $this->request->getPost('nama_barang'),
            'jumlah'        => $this->request->getPost('jumlah'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
            'no_faktur'     => $this->request->getPost('no_faktur'),
            'stok'          => $this->request->getPost('stok')
        ]);

        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['barang'] = $this->barangMasukModel->find($id);
        return view('barang_masuk/edit', $data);
    }

    public function update($id)
    {
        $this->barangMasukModel->update($id, [
            'kode_barang'   => $this->request->getPost('kode_barang'),
            'nama_barang'   => $this->request->getPost('nama_barang'),
            'jumlah'        => $this->request->getPost('jumlah'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
            'no_faktur'     => $this->request->getPost('no_faktur'),
            'stok'          => $this->request->getPost('stok')
        ]);

        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil diubah.');
    }

    public function delete($id)
    {
        $this->barangMasukModel->delete($id);
        return redirect()->to('/barang-masuk')->with('success', 'Data berhasil dihapus.');
    }
}
