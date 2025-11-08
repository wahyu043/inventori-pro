# 🧩 Implementasi Aplikasi Manajemen Gudang Menggunakan CodeIgniter 4 (Refactor Tes Skill 2021)

## 📘 Deskripsi Proyek
Proyek ini merupakan implementasi ulang dari tes skill Software Developer tahun 2021 yang berfokus pada pembuatan aplikasi manajemen data barang sederhana.  
Versi ini dibuat ulang dengan pendekatan **MVC (Model-View-Controller)** menggunakan framework **CodeIgniter 4**, dengan tujuan:
- Melatih pemahaman arsitektur modern di PHP.
- Menunjukkan kemampuan refactor dan strukturisasi proyek.
- Meningkatkan kualitas kode agar lebih maintainable dan scalable.

---

## ⚙️ Fitur yang Dibangun
Berdasarkan instruksi asli tes skill, aplikasi ini memiliki fitur utama berikut:

- 🔐 **Halaman Login (sederhana)**  
  Terdapat dua role utama:
  - `admin` (pengelola utama)
  - `user1` (penjaga toko)

- 📦 **CRUD Data Barang Masuk**  
  Form input dan daftar data barang yang baru masuk ke gudang.

- 🚚 **CRUD Data Barang Keluar**  
  Menampilkan dan mengatur data barang yang keluar dari stok gudang.

- 🏷️ **CRUD Data Barang Tersisa di Gudang**  
  Menampilkan stok tersisa berdasarkan perhitungan masuk dan keluar.

- 🔁 **CRUD Data Transaksi**  
  Menyimpan dan menampilkan catatan aktivitas transaksi barang.

- 📊 **Halaman Laporan (Read Only)**  
  Menampilkan data:
  - Barang  
  - Perusahaan  
  - Transaksi  
  Serta menyediakan tombol ekspor ke format `.csv` atau `.xlsx`.

---

## 🧱 Struktur Proyek
Proyek ini menggunakan struktur default CodeIgniter 4 dengan beberapa tambahan direktori:

```
app/
 ├── Controllers/
 │    ├── Auth.php
 │    ├── BarangMasuk.php
 │    ├── BarangKeluar.php
 │    ├── BarangTersisa.php
 │    ├── Transaksi.php
 │    └── Laporan.php
 ├── Models/
 │    ├── UserModel.php
 │    ├── BarangModel.php
 │    ├── TransaksiModel.php
 │    └── LaporanModel.php
 ├── Views/
 │    ├── layout/
 │    ├── auth/
 │    └── pages/
 │         ├── barang_masuk.php
 │         ├── barang_keluar.php
 │         ├── barang_tersisa.php
 │         ├── transaksi.php
 │         └── laporan.php
public/
 ├── css/
 ├── js/
 └── assets/
```

---

## 🗄️ Database Dummy
Database dummy akan diunggah terpisah (`inventory_pro.sql`) dan mencakup tabel-tabel berikut:
- `users` → berisi akun login (`admin`, `user1`)
- `barang_masuk`
- `barang_keluar`
- `barang_sisa`
- `transaksi`
- `perusahaan` *(opsional untuk laporan)*

---

## 🚀 Cara Menjalankan
1. Clone repository ini:
   ```bash
   git clone https://github.com/wahyu043/inventori-pro
   cd inventori-pro
   ```

2. Install dependencies CodeIgniter:
   ```bash
   composer install
   ```

3. Jalankan server pengembangan:
   ```bash
   php spark serve
   ```

4. Akses melalui browser:  
   👉 `http://localhost:8080`

---

## 🧠 Tujuan Pembelajaran
- Meningkatkan pemahaman konsep **MVC dan Routing di CodeIgniter 4**  
- Refactor kode procedural ke **struktur berorientasi objek (OOP)**  
- Menunjukkan kemampuan dalam membuat **aplikasi CRUD terintegrasi login system**

---

## 🧑‍💻 Author
**Wahyu Mahmudiyanto**  
SEO Specialist & Web Developer — CV. Agro Sukses Abadi  
📍 Yogyakarta / Temanggung  
🖥️ [wahyumahmudi.com](https://wahyumahmudi.com)  
📦 GitHub: [@wahyu043](https://github.com/wahyu043)

---

## 📅 Status Proyek
- ✅ Setup CodeIgniter via Composer  
- ✅ Konfigurasi Database & Migrasi User  
- 🕐 Next: Implementasi Controller & View untuk Halaman Login  
- 🔜 Tahap Berikutnya: CRUD Barang Masuk  

---

## 🏁 Catatan Akhir
Proyek ini merupakan **refactor modern** berdasarkan soal tes skill lama.  
Fokus utamanya adalah **membuktikan pemahaman fundamental PHP & framework CI** dengan gaya dokumentasi profesional seperti proyek fullstack modern.
