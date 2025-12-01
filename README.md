# 🧩 Implementasi Aplikasi Manajemen Gudang Menggunakan CodeIgniter 4 (Refactor Tes Skill 2021)

## 📘 Deskripsi Proyek

Proyek ini merupakan implementasi ulang dari tes skill Software Developer tahun 2021 yang berfokus pada pembuatan aplikasi manajemen data barang sederhana.  
Versi ini dibuat ulang dengan pendekatan **MVC (Model-View-Controller)** menggunakan framework **CodeIgniter 4**, dengan tujuan:

- Melatih pemahaman arsitektur modern di PHP.
- Menunjukkan kemampuan refactor dan strukturisasi proyek.
- Meningkatkan kualitas kode agar lebih maintainable dan scalable.

---

## 🚀 Fitur Utama

### 🔐 Autentikasi

- Login berbasis database (akun `admin` & `user1`)
- Proteksi session & halaman dengan filter `auth`

### 📦 Barang Masuk (CRUD)

- Tambah, edit, hapus
- Otomatis menambah stok master barang

### 🚚 Barang Keluar (CRUD)

- Tambah, edit, hapus
- Otomatis mengurangi stok master barang

### 📊 Data Barang (Master)

- Data barang lengkap + stok terupdate
- Integrasi dengan transaksi masuk & keluar

### 🔁 **Data Transaksi (History)** — _NEW_

- Halaman khusus gabungan barang masuk & keluar
- Ditampilkan dalam satu timeline history
- Urut terbaru → terlama
- Badge warna (Hijau = Masuk, Merah = Keluar)

### 📝 Laporan

- Laporan harian, mingguan, bulanan
- Filter dinamis (per tanggal)
- Layout rapi dengan tampilan bootstrap

---

## 📂 Struktur Proyek

```
app/
 ├── Controllers/
 │    ├── Auth.php
 │    ├── Dashboard.php
 │    ├── Barang.php
 │    ├── BarangMasuk.php
 │    ├── BarangKeluar.php
 │    ├── Transaksi.php   ← NEW
 │    └── Laporan.php
 ├── Models/
 │    ├── UserModel.php
 │    ├── BarangModel.php
 │    ├── BarangMasukModel.php
 │    ├── BarangKeluarModel.php
 │    └── LaporanModel.php
 ├── Views/
 │    ├── layouts/
 │    ├── auth/
 │    ├── barang/
 │    │     └── index.php
 │    ├── barang_masuk/
 │    │     └── index.php
 │    ├── barang_keluar/
 │    │     └── index.php
 │    ├── transaksi/
 │    │     └── index.php   ← NEW
 │    └── laporan/
 │          └── index.php
public/
 ├── css/
 ├── js/
 └── assets/
```

---

## 🗄️ Database

Database dummy (25 master barang + contoh transaksi) tersedia dalam file:

```
writable/dummy/inventori_pro.sql
```

Tabel-tabel utama:

- users
- barang
- barang_masuk
- barang_keluar
- transaksi (history gabungan dihasilkan lewat controller)

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

- v0.1.0 – Setup CI4
- v0.3.0 – Login & Auth
- v0.4.0 – Dashboard
- v0.5.0 – Integrasi Master Barang
- v0.6.1 – Sidebar & Layout Consolidation
- **v0.6.2 – Penambahan Data Transaksi (History)** ✔️

Proyek dinyatakan **stabil & siap dikembangkan ke tahap berikutnya**.

---

## 🏁 Catatan Akhir

Proyek ini merupakan **refactor modern** berdasarkan soal tes skill lama.  
Fokus utamanya adalah **membuktikan pemahaman fundamental PHP & framework CI** dengan gaya dokumentasi profesional seperti proyek fullstack modern.
