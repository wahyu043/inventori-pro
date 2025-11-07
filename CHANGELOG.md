# 🧾 Changelog – Inventori Pro (CodeIgniter 4)

## [v0.2.1] – 2025-11-07
### ✨ Penambahan
- Menerapkan tampilan Bootstrap 4 yang bersih untuk halaman `beranda.php` dan `login.php`.
- Menambahkan komponen `header.php` dan `footer.php` agar layout lebih modular dan dapat digunakan ulang.

### 🔧 Perubahan
- Menghapus elemen global `<div class="container mt-5">` dari `header.php` agar footer bisa tampil penuh (full-width).
- Menyesuaikan gaya tampilan `footer` supaya melebar ke seluruh lebar layar.
- Merapikan jarak (spacing) dan perataan elemen pada halaman login dan beranda.
- Meningkatkan konsistensi tampilan antarmuka (navbar, footer, dan hirarki teks).

### 🧹 Pemeliharaan
- Memastikan routing `/` menuju `Beranda::index` dan `/login` menuju `Login::index`.
- Memverifikasi konsistensi base URL server (`localhost:8080`).
- Melakukan penyempurnaan visual umum sebelum masuk ke tahap migrasi database.

---

## [v0.1.0] – 2025-11-07
### 🚀 Rilis Pengembangan Awal
- Inisialisasi proyek CodeIgniter 4 melalui Composer.
- Mengaktifkan konfigurasi `.env` dan koneksi ke MySQL (`inventori_pro`).
- Memverifikasi koneksi database (MySQLi, port 8889 untuk MAMP).
- Membuat struktur awal routing dan MVC:
  - Controller `Beranda` sebagai halaman utama.
  - Controller `Login` dengan validasi form dan pesan flash.
- Mengimplementasikan Bootstrap 4 untuk tampilan dan layout responsif.
- Memodularisasi layout:
  - `layouts/header.php`
  - `layouts/footer.php`
- Menambahkan fitur **login dummy** (redirect berbasis flash).
- Beralih ke sistem **login berbasis database** (Model + UserSeeder + Migration).
- Menetapkan baseURL konsisten (`http://localhost:8080`).
- Penyempurnaan visual:
  - Footer penuh (full-width).  
  - Navbar bersih dan konten di tengah halaman.  
  - Tema biru seragam.

### 🧹 Catatan
- Versi ini menandai penyelesaian dasar struktur MVC dan tampilan utama.  
- Target berikutnya → implementasi tabel melalui migration (`users`, `barang`) dan proteksi akses berdasarkan role.
