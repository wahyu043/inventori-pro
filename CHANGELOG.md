# 🧾 Changelog – Inventori Pro (CodeIgniter 4)

## [v0.6.0] – 2025-11-28

### ✨ Penambahan

- Menambahkan tampilan tabel **Data Barang (Master)** pada halaman Dashboard sebagai ringkasan stok terkini.
- Menambahkan tombol navigasi baru di bagian atas Dashboard:
  - **Kelola Data Barang**
  - **Kelola Barang Masuk**
  - **Kelola Barang Keluar**
  - **Data Transaksi** (halaman placeholder untuk pengembangan berikutnya)
- Menambahkan halaman awal CRUD **Master Barang**:
  - Tabel data barang dinamis (`barang/index.php`)
  - Form **Tambah Barang**
  - Form **Edit Barang**
  - Fitur **Hapus Barang**

### 🔧 Perubahan

- Memindahkan tombol navigasi Dashboard dari posisi lama ke bagian atas card statistik agar lebih mudah diakses.
- Menyesuaikan controller `Dashboard` untuk mengirimkan data barang (`$items`) ke tabel ringkasan.
- Menyesuaikan struktur dashboard menjadi lebih informatif dan berorientasi overview.

### 🧹 Pemeliharaan

- Merapikan route `barang` ke dalam group terproteksi `auth`.
- Menambahkan struktur CRUD penuh untuk `BarangController` (create, read, update, delete).
- Menjaga data stok master agar hanya berubah berdasarkan transaksi masuk & keluar.

## [v0.5.0] – 2025-11-19

### ✨ Penambahan

- Menambahkan **tabel master `barang`** berisi 25 data produk lengkap (kode, nama, satuan, harga, stok awal).
- Mengimplementasikan **sistem stok dinamis**:
  - Barang Masuk otomatis menambah stok.
  - Barang Keluar otomatis mengurangi stok.
  - Setiap transaksi tersimpan sebagai log, stok akhir hanya dihitung dari tabel `barang`.
- Menambahkan mapping stok (`stokMap`) agar halaman Barang Masuk & Barang Keluar menampilkan stok langsung dari data master.
- Menambahkan tombol navigasi baru pada dashboard:
  - **Kelola Barang Keluar**
  - **Kelola Barang** (akses data master)

### 🔧 Perubahan

- Refactor penuh controller **BarangMasuk**:
  - Menghapus penggunaan kolom stok dari transaksi.
  - Menambahkan logika update stok (+) saat `store()`, koreksi stok saat `update()`, dan rollback stok (-) saat `delete()`.
- Refactor penuh controller **BarangKeluar**:
  - Menghapus input stok dari form.
  - Menambahkan logika pengurangan stok (-) saat `store()`, koreksi stok saat `update()`, dan rollback stok (+) saat `delete()`.
- Membersihkan form Barang Masuk & Barang Keluar (hapus field `stok`).
- Menyesuaikan semua view agar tidak lagi menggunakan `$model` lama dan beralih ke variabel `items` + `stokMap`.

### 🐛 Perbaikan Bug

- Memperbaiki error `Undefined property $model` pada controller akibat nama properti tidak konsisten.
- Memperbaiki error `Undefined variable $barangMasukModel` di view dengan mengganti ke variabel `items`.
- Memperbaiki error `Undefined variable $item` di table view dengan mengganti ke variabel loop `$row`.
- Memperbaiki error SQL `#1054 Unknown column 'pemasok'` saat insert data master barang.

### 🧹 Pemeliharaan

- Membersihkan isi tabel `barang` dan mengisi ulang dummy resmi sebanyak 25 baris agar transaksi keluar tidak menghasilkan stok nol.
- Menyamakan penamaan variabel controller (`$barangMasukModel`, `$barangKeluarModel`) sesuai standar CI4.
- Merapikan struktur controller agar konsisten (construct, index, store, update, delete).
- Melakukan perbaikan tampilan stok di halaman tabel Barang Masuk & Barang Keluar menggunakan map data master.

## [v0.4.0] – 2025-11-08

### ✨ Penambahan

- Menambahkan sistem **proteksi login (AuthFilter)** agar halaman internal hanya bisa diakses setelah login.
- Menambahkan **Dashboard utama** sebagai pusat navigasi aplikasi Inventori Pro.
- Dashboard menampilkan data dinamis:
  - Total Barang (dari tabel `barang`)
  - Total Barang Masuk (dari tabel `barang_masuk`)
  - Role pengguna aktif (admin/user)
- Menambahkan tampilan **sapaan pengguna** di header dan dashboard.
- Menambahkan tombol navigasi cepat ke _Barang Masuk_ dan _Data Barang_.

### 🔧 Perubahan

- Mengalihkan redirect login sukses ke `/dashboard` agar user langsung masuk ke halaman utama sistem.
- Menyusun ulang struktur view `dashboard/index.php` agar modular dan siap dikembangkan.
- Mengatur tampilan header agar tombol Login/Logout dan sapaan user tampil dinamis sesuai status session.

### 🎨 UI & Layout

- Memperbarui tampilan Dashboard dengan 3 kartu statistik berwarna (Bootstrap 4).
- Menyempurnakan navbar dan tombol user di kanan atas agar sejajar dan responsif.
- Menambahkan footer sticky agar tetap berada di bagian bawah halaman.

### 🧹 Pemeliharaan

- Merapikan struktur folder `app/Views/dashboard/` untuk kesiapan pengembangan fitur berikutnya.
- Memastikan integrasi data dari model `BarangModel` dan `BarangMasukModel` berjalan lancar.
- Memastikan seluruh route dilindungi `AuthFilter` (terutama `/dashboard` dan `/barang-masuk`).

---

## [v0.3.0] – 2025-11-08

### ✨ Penambahan

- Menambahkan sistem autentikasi berbasis database menggunakan `UserModel` dan hashing SHA-256.
- Menambahkan `migration` dan `seeder` untuk tabel `users` (`admin` dan `user1` sebagai akun awal).
- Menambahkan halaman `dashboard` dummy sebagai playground awal untuk Petugas Gudang.
- Menambahkan tombol `Login` pada halaman `beranda.php` yang mengarah ke form login.
- Menambahkan fitur `Logout` untuk mengakhiri sesi dan kembali ke halaman login.

### 🔒 Proteksi & Akses

- Menerapkan proteksi akses pada halaman `dashboard` agar hanya dapat diakses oleh user yang sudah login.
- Menambahkan validasi login dengan session `logged_in` untuk menjaga keamanan akses.

### 🔧 Perubahan

- Mengarahkan hasil login sukses ke `/dashboard` alih-alih halaman beranda publik.
- Menyesuaikan alur logout agar selalu menghapus session dan redirect ke `/login`.
- Menyesuaikan file `Routes.php` untuk menambahkan route baru `/dashboard` dan `/logout`.

### 🧹 Pemeliharaan

- Membersihkan data manual lama pada tabel `users` sebelum menjalankan migration & seeder baru.
- Menyelaraskan namespace dan struktur folder (`Controllers`, `Models`, `Views`) sesuai standar CI4.
- Memastikan login, logout, dan routing berjalan lancar pada server lokal (`php spark serve`).

---

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
