<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $data['items'] = $model->findAll();

        return view('barang/index', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function store()
    {
        $model = new BarangModel();

        $model->save([
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'satuan'      => $this->request->getPost('satuan'),
            'harga_beli'  => $this->request->getPost('harga_beli'),
            'harga_jual'  => $this->request->getPost('harga_jual'),
            'stok'        => $this->request->getPost('stok'),
        ]);

        return redirect()->to('/barang')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new BarangModel();
        $data['item'] = $model->find($id);

        return view('barang/edit', $data);
    }

    public function update($id)
    {
        $model = new BarangModel();

        $model->update($id, [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'satuan'      => $this->request->getPost('satuan'),
            'harga_beli'  => $this->request->getPost('harga_beli'),
            'harga_jual'  => $this->request->getPost('harga_jual'),
            // stok tidak diedit di sini!
        ]);

        return redirect()->to('/barang')->with('success', 'Barang berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new BarangModel();
        $model->delete($id);

        return redirect()->to('/barang')->with('success', 'Barang berhasil dihapus!');
    }
}
