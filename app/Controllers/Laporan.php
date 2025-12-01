<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;
use App\Models\BarangKeluarModel;

class Laporan extends BaseController
{
    protected $masuk;
    protected $keluar;

    public function __construct()
    {
        $this->masuk  = new BarangMasukModel();
        $this->keluar = new BarangKeluarModel();
    }

    public function index()
    {
        return view('laporan/index');
    }


    // =====================
    // FILTER PROCESSOR
    // =====================
    public function filter()
    {
        $tipe = $this->request->getGet('tipe');

        switch ($tipe) {
            case 'harian':
                return $this->filterHarian();
            case 'mingguan':
                return $this->filterMingguan();
            case 'bulanan':
                return $this->filterBulanan();
        }

        return redirect()->back()->with('error', 'Filter tidak valid!');
    }


    // ================
    // 1. HARIAN
    // ================
    private function filterHarian()
    {
        $tgl = $this->request->getGet('tanggal');

        $dataMasuk = $this->masuk
            ->where('tanggal_masuk', $tgl)
            ->findAll();

        $dataKeluar = $this->keluar
            ->where('tanggal_keluar', $tgl)
            ->findAll();

        return view('laporan/index', [
            'tipe' => 'harian',
            'tanggal' => $tgl,
            'masuk' => $dataMasuk,
            'keluar' => $dataKeluar,
        ]);
    }


    // ================
    // 2. MINGGUAN
    // ================
    private function filterMingguan()
    {
        $minggu = $this->request->getGet('minggu');
        $tahun  = $this->request->getGet('tahun');

        $start = date("Y-m-d", strtotime($tahun . "W" . sprintf("%02d", $minggu)));
        $end   = date("Y-m-d", strtotime($start . " +6 days"));

        $dataMasuk = $this->masuk
            ->where('tanggal_masuk >=', $start)
            ->where('tanggal_masuk <=', $end)
            ->findAll();

        $dataKeluar = $this->keluar
            ->where('tanggal_keluar >=', $start)
            ->where('tanggal_keluar <=', $end)
            ->findAll();

        return view('laporan/index', [
            'tipe' => 'mingguan',
            'tanggal' => $start . " s/d " . $end,
            'masuk' => $dataMasuk,
            'keluar' => $dataKeluar,
        ]);
    }


    // ================
    // 3. BULANAN
    // ================
    private function filterBulanan()
    {
        $bulan = $this->request->getGet('bulan');
        $tahun = $this->request->getGet('tahun');

        $start = "$tahun-$bulan-01";
        $end   = date("Y-m-t", strtotime($start));

        $dataMasuk = $this->masuk
            ->where('tanggal_masuk >=', $start)
            ->where('tanggal_masuk <=', $end)
            ->findAll();

        $dataKeluar = $this->keluar
            ->where('tanggal_keluar >=', $start)
            ->where('tanggal_keluar <=', $end)
            ->findAll();

        return view('laporan/index', [
            'tipe' => 'bulanan',
            'tanggal' => date("F Y", strtotime($start)),
            'masuk' => $dataMasuk,
            'keluar' => $dataKeluar,
        ]);
    }


    // ==========================
    // CETAK PDF
    // ==========================
    public function pdf()
    {
        $tipe = $this->request->getGet('tipe');
        $tanggal = $this->request->getGet('tanggal');

        $masuk = $this->request->getGet('m') ? json_decode($this->request->getGet('m'), true) : [];
        $keluar = $this->request->getGet('k') ? json_decode($this->request->getGet('k'), true) : [];

        $html = view('laporan/pdf', [
            'tipe' => $tipe,
            'tanggal' => $tanggal,
            'masuk' => $masuk,
            'keluar' => $keluar,
        ]);

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("laporan-transaksi.pdf", ["Attachment" => true]);
    }
}
