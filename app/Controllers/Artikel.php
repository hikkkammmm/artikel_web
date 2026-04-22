<?php

namespace App\Controllers;

class Artikel extends BaseController
{
    // Data artikel statis (array)
    private $artikel = [
        [
            'id' => 1,
            'judul' => 'Revolusi Kecerdasan Buatan dalam Teknologi Web',
            'kategori' => 'Teknologi',
            'author' => 'Ahmad Rizki',
            'tanggal' => '2024-04-15',
            'gambar' => 'https://images.unsplash.com/photo-1677442d019cecf8721ce6f1d553642a96219854?w=600&h=400&fit=crop',
            'excerpt' => 'Perkembangan AI telah mengubah cara kita mengembangkan aplikasi web. Dari chatbot hingga rekomendasi konten, teknologi ini semakin mendominasi industri.',
            'isi' => 'Kecerdasan Buatan (AI) telah menjadi tulang punggung revolusi digital. Dalam dunia pengembangan web, AI digunakan untuk berbagai keperluan mulai dari otomasi proses, personalisasi konten, hingga keamanan aplikasi. Teknologi machine learning memungkinkan aplikasi web untuk belajar dari pola pengguna dan memberikan experience yang lebih baik.

Dengan adanya API seperti OpenAI, Google AI, dan lainnya, developer kini memiliki akses mudah untuk mengintegrasikan kekuatan AI ke dalam aplikasi mereka. Ini membuka peluang tak terbatas untuk menciptakan aplikasi yang lebih intelligent dan user-friendly.'
        ],
        [
            'id' => 2,
            'judul' => 'Framework CodeIgniter Masih Relevan di 2024',
            'kategori' => 'Framework',
            'author' => 'Siti Nurhaliza',
            'tanggal' => '2024-04-14',
            'gambar' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&h=400&fit=crop',
            'excerpt' => 'Meskipun ada kompetitor baru, CodeIgniter tetap menjadi pilihan solid untuk project web yang stabil dan mudah dikerjakan.',
            'isi' => 'CodeIgniter telah lama menjadi favorit developer PHP. Bahkan di tahun 2024, framework ini masih sangat relevan karena kemudahan penggunaannya, dokumentasi yang lengkap, dan performance yang baik.

Banyak perusahaan masih menggunakan CodeIgniter untuk membangun aplikasi bisnis mereka. Alasan utamanya adalah kurva pembelajaran yang landai, sehingga mudah untuk onboard developer baru. Selain itu, CodeIgniter memiliki struktur MVC yang jelas dan mudah diikuti.'
        ],
        [
            'id' => 3,
            'judul' => 'Trend Desain Web Modern: Dark Mode dan Minimalis',
            'kategori' => 'Desain',
            'author' => 'Budi Santoso',
            'tanggal' => '2024-04-13',
            'gambar' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop',
            'excerpt' => 'Dark mode dan desain minimalis adalah tren yang mendominasi industri desain web. Ini tidak hanya stylish tetapi juga user-friendly.',
            'isi' => 'Tahun 2024 menunjukkan peningkatan adopsi dark mode dalam desain web. Ini bukan hanya soal estetika, tetapi juga tentang kenyamanan pengguna. Dark mode mengurangi kelelahan mata, terutama ketika menggunakan aplikasi di malam hari.

Desain minimalis juga terus menjadi pilihan utama. Dengan menghilangkan elemen yang tidak perlu, desain minimalis fokus pada fungsi dan readability. Kombinasi dark mode dengan desain minimalis menciptakan experience yang elegan dan modern.'
        ],
        [
            'id' => 4,
            'judul' => 'Keamanan Web: Best Practices yang Harus Diterapkan',
            'kategori' => 'Keamanan',
            'author' => 'Eka Putri',
            'tanggal' => '2024-04-12',
            'gambar' => 'https://images.unsplash.com/photo-1516321325253-23cc6f90ba49?w=600&h=400&fit=crop',
            'excerpt' => 'Keamanan website bukan lagi pilihan tetapi keharusan. Berikut best practices yang harus diimplementasikan setiap developer.',
            'isi' => 'Serangan cyber semakin canggih dan sering terjadi. Sebagai developer, kita harus memastikan aplikasi yang kita buat aman dari berbagai jenis serangan seperti SQL Injection, XSS, CSRF, dan lainnya.

Best practices keamanan web meliputi: input validation, output encoding, menggunakan HTTPS, password hashing yang kuat, dan regular security updates. CodeIgniter menyediakan built-in features untuk membantu kita mengimplementasikan praktik-praktik ini dengan mudah.'
        ],
        [
            'id' => 5,
            'judul' => 'Optimasi Database untuk Performa Web yang Maksimal',
            'kategori' => 'Database',
            'author' => 'Rio Hartono',
            'tanggal' => '2024-04-11',
            'gambar' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop',
            'excerpt' => 'Database yang optimal adalah kunci performa aplikasi web. Pelajari teknik-teknik optimasi yang efektif.',
            'isi' => 'Performa database memiliki dampak langsung terhadap kecepatan aplikasi web. Optimasi database meliputi penggunaan index yang tepat, query optimization, dan proper database design.

Teknik-teknik seperti denormalization, caching, dan query profiling dapat meningkatkan performance secara signifikan. Penting juga untuk melakukan monitoring regular terhadap database untuk mendeteksi bottleneck sejak dini.'
        ]
    ];

    // Path file JSON untuk penyimpanan artikel tambahan
    private $jsonFile = WRITEPATH . 'data/artikel.json';

    // Method helper untuk membaca artikel dari JSON
    private function bacaArtikelJson()
    {
        if (!file_exists($this->jsonFile)) {
            return [];
        }
        $json = file_get_contents($this->jsonFile);
        return json_decode($json, true) ?? [];
    }

    // Method helper untuk menyimpan artikel ke JSON
    private function simpanArtikelJson($artikel)
    {
        $json = json_encode($artikel, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        return file_put_contents($this->jsonFile, $json) !== false;
    }

    // Method untuk mendapatkan semua artikel (bawaan + JSON)
    private function getSemuaArtikel()
    {
        $artikelBawaan = $this->artikel;
        $artikelJson = $this->bacaArtikelJson();
        return array_merge($artikelBawaan, $artikelJson);
    }

    public function index()
    {
        $semuaArtikel = $this->getSemuaArtikel();
        $data = [
            'title' => 'Portal Berita Teknologi',
            'artikel' => $semuaArtikel,
            'total' => count($semuaArtikel)
        ];

        return view('home', $data);
    }

    public function detail($id = null)
    {
        if ($id === null) {
            return redirect()->to('/');
        }

        $semuaArtikel = $this->getSemuaArtikel();
        $artikel = null;
        foreach ($semuaArtikel as $art) {
            if ($art['id'] == $id) {
                $artikel = $art;
                break;
            }
        }

        if ($artikel === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        $data = [
            'title' => $artikel['judul'],
            'artikel' => $artikel,
            'semuaArtikel' => $semuaArtikel
        ];

        return view('detail', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang Portal Berita',
        ];

        return view('tentang', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Artikel Baru',
        ];

        return view('tambah', $data);
    }

    public function simpan()
    {
        // Ambil input dari form
        $judul = $this->request->getPost('judul');
        $kategori = $this->request->getPost('kategori');
        $author = $this->request->getPost('author');
        $tanggal = $this->request->getPost('tanggal');
        $excerpt = $this->request->getPost('excerpt');
        $isi = $this->request->getPost('isi');
        $gambar = $this->request->getPost('gambar');
        
        $session = session();

        // Validasi sederhana - semua field wajib diisi
        if (empty($judul) || empty($kategori) || empty($author) || empty($tanggal) || empty($excerpt) || empty($isi)) {
            $session->setFlashdata('pesan', 'Error: Semua field wajib diisi!');
            $session->setFlashdata('tipe_pesan', 'danger');
            
            return redirect()->to('/artikel/tambah')->withInput();
        }

        // Jika validasi lolos, buat artikel baru dari input
        // ID unik: mulai dari 1000 untuk menghindari bentrok dengan artikel bawaan (1-5)
        $artikelJson = $this->bacaArtikelJson();
        $idBaru = 1000 + count($artikelJson) + 1;
        
        $artikelBaru = [
            'id' => $idBaru,
            'judul' => $judul,
            'kategori' => $kategori,
            'author' => $author,
            'tanggal' => $tanggal,
            'gambar' => !empty($gambar) ? $gambar : 'https://images.unsplash.com/photo-1516321325253-23cc6f90ba49?w=600&h=400&fit=crop',
            'excerpt' => $excerpt,
            'isi' => $isi
        ];

        // Simpan artikel baru ke JSON
        $artikelJson[] = $artikelBaru;
        $this->simpanArtikelJson($artikelJson);

        // Set flash message sukses
        $session->setFlashdata('pesan', 'Artikel berhasil ditambahkan dan tersimpan permanen!');
        $session->setFlashdata('tipe_pesan', 'success');

        // Redirect ke halaman artikel (home)
        return redirect()->to('/artikel');
    }
}
