# TechNews Indonesia - Website Manajemen Artikel

Website berita teknologi sederhana yang dibangun menggunakan **CodeIgniter 4** untuk pembelajaran konsep MVC (Model-View-Controller).

## 🌟 Fitur Utama

- 📰 **Halaman Home** - Daftar artikel dengan featured article terbaru
- 📖 **Halaman Detail** - Tampilan lengkap artikel dengan konten penuh
- 👥 **Halaman Tentang** - Informasi tentang portal dan tim
- ✍️ **Form Tambah Artikel** - Simulasi form untuk membuat artikel baru
- 🎨 **Design Modern** - Tampilan yang menarik dengan gradient, shadow effects
- 📱 **Responsive** - Bekerja sempurna di desktop, tablet, dan mobile

## 🛠️ Teknologi Stack

- **Backend Framework**: CodeIgniter 4 (PHP)
- **Frontend**: Bootstrap 5, Font Awesome Icons
- **Database**: Array Statis (tidak menggunakan database)
- **Server**: PHP Built-in Development Server

## 📋 Struktur Project

```
ci-blog/
├── app/
│   ├── Controllers/
│   │   ├── Home.php           # Controller default
│   │   └── Artikel.php        # Controller untuk artikel
│   ├── Views/
│   │   ├── layouts/
│   │   │   └── base.php       # Layout template utama
│   │   ├── home.php           # View halaman home
│   │   ├── detail.php         # View detail artikel
│   │   ├── tentang.php        # View halaman tentang
│   │   └── tambah.php         # View form tambah artikel
│   └── Config/
│       └── Routes.php         # Konfigurasi routing
├── public/
│   ├── index.php              # Entry point aplikasi
│   └── .htaccess              # URL rewrite rules
├── vendor/                    # Composer dependencies
├── .env                       # Environment configuration
├── composer.json              # PHP dependencies
└── README.md                  # File dokumentasi ini
```

## 🚀 Cara Menjalankan

### Prerequisites
- PHP 7.4 atau lebih tinggi
- Composer (untuk dependency management)

### Installation Steps

1. **Clone atau Extract Project**
```bash
cd ci-blog
```

2. **Install Dependencies**
```bash
composer install --ignore-platform-req=ext-intl
```

3. **Jalankan Development Server**

**Option 1: Menggunakan PHP Built-in Server**
```bash
cd public
php -S localhost:8080
```

**Option 2: Menggunakan CodeIgniter Spark**
```bash
php spark serve
```

4. **Akses Aplikasi**
- Home: http://localhost:8080/artikel
- Detail: http://localhost:8080/artikel/detail/1
- Tentang: http://localhost:8080/artikel/tentang
- Tambah: http://localhost:8080/artikel/tambah

## 📚 Halaman-Halaman

### 1. Halaman Home (`/artikel`)
- ✅ Menampilkan featured article terbaru dengan layout besar
- ✅ Grid artikel sisanya dalam 2 kolom
- ✅ Sidebar dengan kategori, artikel terpopuler, dan newsletter signup
- ✅ Pagination info

### 2. Halaman Detail (`/artikel/detail/{id}`)
- ✅ Tampilan lengkap konten artikel
- ✅ Meta informasi (author, tanggal, kategori)
- ✅ Social media share buttons
- ✅ Artikel terkait di bagian bawah
- ✅ Author card dengan informasi penulis

### 3. Halaman Tentang (`/artikel/tentang`)
- ✅ Misi dan visi portal
- ✅ Daftar layanan yang ditawarkan
- ✅ Profil tim dengan photo cards
- ✅ Statistik website
- ✅ Informasi kontak

### 4. Halaman Tambah Artikel (`/artikel/tambah`)
- ✅ Form untuk membuat artikel baru (simulasi)
- ✅ Fields: judul, kategori, author, excerpt, isi, gambar
- ✅ CSRF protection
- ✅ Tips penulisan dan SEO
- ⚠️ **Catatan**: Form ini hanya simulasi, data tidak disimpan

## 🎨 Design Features

### Color Scheme
- **Primary**: #1f3a93 (Blue)
- **Secondary**: #ff6b6b (Red)
- **Dark**: #1a1a1a
- **Light**: #f8f9fa

### UI Components
- Gradient backgrounds pada navbar dan buttons
- Card-based layout untuk artikel
- Shadow effects pada hover
- Smooth transitions dan animations
- Responsive grid system menggunakan Bootstrap 5

### Responsive Breakpoints
- Mobile: < 576px
- Tablet: 576px - 992px
- Desktop: > 992px

## 🔧 Controller Methods

### Artikel Controller

```php
// GET /artikel
index()        // Menampilkan daftar semua artikel

// GET /artikel/detail/{id}
detail($id)    // Menampilkan detail satu artikel

// GET /artikel/tentang
tentang()      // Menampilkan halaman tentang

// GET /artikel/tambah
tambah()       // Menampilkan form tambah artikel

// POST /artikel/simpan
simpan()       // Simulasi penyimpanan artikel (redirect with flash message)
```

## 📊 Data Artikel

Setiap artikel memiliki struktur:
```php
[
    'id'       => 1,                    // ID unik
    'judul'    => 'Judul Artikel',      // Judul artikel
    'kategori' => 'Teknologi',          // Kategori
    'author'   => 'Nama Author',        // Penulis
    'tanggal'  => '2024-04-15',         // Tanggal publikasi
    'gambar'   => 'https://...',        // URL gambar
    'excerpt'  => 'Ringkasan...',       // Ringkasan singkat
    'isi'      => 'Konten artikel...'   // Konten lengkap
]
```

**Total artikel yang tersedia: 5 artikel**

## 🔗 Routes Configuration

```php
GET     /artikel                    -> Artikel::index()
GET     /artikel/detail/(:num)      -> Artikel::detail($1)
GET     /artikel/tentang            -> Artikel::tentang()
GET     /artikel/tambah             -> Artikel::tambah()
POST    /artikel/simpan             -> Artikel::simpan()
```

## ⚠️ Catatan Penting

1. **Data Statis** - Semua data artikel disimpan sebagai array di controller, bukan di database
2. **Simulasi Form** - Form tambah artikel hanya simulasi, submitted data tidak disimpan
3. **No Authentication** - Tidak ada sistem login atau authorization
4. **CSRF Protection** - Form dilindungi dengan CSRF token
5. **No Model** - Project ini tidak menggunakan Model (berfokus pada Controller & View)

## 🎓 Pembelajaran Konsep MVC

### View
- Template inheritance menggunakan `extend()` dan `section()`
- Looping data dengan `foreach`
- Conditional rendering dengan `if/else`
- Display data dari controller

### Controller
- Business logic dan data preparation
- Method untuk handling berbagai requests
- Error handling dengan exceptions
- Passing data ke views

### Routes
- Mapping URL ke controller methods
- Wildcard patterns untuk dynamic parameters
- HTTP method handling (GET, POST)
- Route protection dengan methods

## 🐛 Troubleshooting

### Error: "Class not found: Locale"
- Gunakan flag `--ignore-platform-req=ext-intl` saat composer install

### Routes tidak bekerja
- Pastikan Routes.php sudah di-update dengan benar
- Clear browser cache atau gunakan incognito mode

### View tidak ditemukan
- Pastikan nama file view sesuai (case-sensitive)
- Cek folder `app/Views/`

### CSS/JS tidak dimuat
- Pastikan mengakses dari folder `public/`
- Check browser console untuk error

## 📝 File Dokumentasi Lengkap

Lihat file [Langkah_Pengerjaan_Tugas_Pertemuan_4.md](../Langkah_Pengerjaan_Tugas_Pertemuan_4.md) untuk dokumentasi lengkap step-by-step pembuatan project ini.

## 👥 Informasi Tim (Data Simulasi)

- **Ahmad Rizki** - Founder & Chief Editor
- **Siti Nurhaliza** - Content Manager
- **Budi Santoso** - Tech Writer
- **Eka Putri** - UI/UX Designer

## 📞 Hubungi Kami

- Email: info@technewsindonesia.com
- Phone: +62 (021) 1234-5678
- Location: Jakarta Selatan, Indonesia

## 📄 License

Project ini dibuat untuk keperluan pembelajaran.

---

**Created for: Tugas Pertemuan 4 - Pemrograman Web Lanjut**  
**Framework: CodeIgniter 4**  
**Fokus: Controller dan View Implementation**


## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
