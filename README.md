# Ringkasan Proyek CI-BLOG

## Deskripsi Singkat
CI-BLOG adalah aplikasi portal berita teknologi sederhana berbasis **CodeIgniter 4** dengan arsitektur MVC. Data artikel disimpan sementara menggunakan **Session** (tanpa database). UI responsif dengan Bootstrap.

## Struktur & Isi Utama Proyek
- **app/Controllers/**: Berisi controller utama seperti `Artikel`, `Home`, dan `Kontak`.
  - `Artikel`: Menyimpan data artikel statis, menampilkan daftar, detail, tambah artikel.
  - `Home`: Menampilkan halaman utama, kontak, dan privacy policy.
  - `Kontak`: Menangani form kontak (tanpa database, hanya flash message).
- **app/Views/**: Berisi tampilan halaman (home, detail, tambah, kontak, tentang, privacypolicy) dan layout dasar.
- **app/Config/Routes.php**: Routing URL ke controller.
- **app/Models/**, **app/Helpers/**, **app/Libraries/**: Kosong (hanya .gitkeep).
- **public/**: Entry point aplikasi (`index.php`).
- **composer.json**: Konfigurasi dependency PHP (CodeIgniter, PHPUnit, dsb).
- **tests/**: Unit test dengan PHPUnit.

## Fitur Utama
- Daftar & detail artikel berita (statis, tanpa database)
- Tambah artikel (data disimpan di session)
- Halaman kontak (form sederhana, flash message)
- Halaman tentang & privacy policy
- UI modern, responsif (Bootstrap)

## Cara Menjalankan Proyek

### 1. Clone Repository
```bash
git clone https://github.com/USERNAME_GITHUB_KAMU/NAMA_REPOSITORY_KAMU.git
cd NAMA_REPOSITORY_KAMU
```

### 2. Install Dependency
```bash
composer install
```

### 3. Jalankan Development Server
#### Opsi 1: Spark CLI (direkomendasikan)
```bash
php spark serve
```
Akses di browser: http://localhost:8080

#### Opsi 2: Web Server Lokal (XAMPP/Laragon)
- Copy seluruh folder ke `htdocs` (XAMPP) atau `www` (Laragon)
- Akses di browser: http://localhost/ci-blog/public

## Pengujian (Testing)
- Jalankan unit test:
  - Linux/macOS: `./vendor/bin/phpunit`
  - Windows: `vendor\bin\phpunit`

## Catatan
- Tidak membutuhkan database (artikel disimpan di session)
- Konfigurasi lebih lanjut bisa dilakukan di `app/Config/`
- Untuk pengembangan, gunakan PHP >= 8.2 (lihat composer.json)

---

**Lisensi:** MIT


---
