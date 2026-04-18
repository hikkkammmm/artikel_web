<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="mb-2 fw-bold text-dark">Kebijakan Privasi (Privacy Policy)</h1>
            <p class="text-muted border-bottom pb-3 mb-4">
                Terakhir diperbarui: <strong><?= date('d F Y') ?></strong>
            </p>
            
            <div class="content-policy">
                <p>Selamat datang di <strong>CI-BLOG</strong>. Kami sangat menghargai privasi Anda dan berkomitmen penuh untuk melindungi data pribadi yang Anda bagikan kepada kami. Kebijakan Privasi ini menjelaskan secara rinci bagaimana kami mengumpulkan, menggunakan, memelihara, dan menjaga informasi Anda saat Anda mengakses dan menggunakan layanan blog kami.</p>

                <h4 class="mt-5">1. Informasi yang Kami Kumpulkan</h4>
                <p>Saat Anda berinteraksi dengan blog kami, kami mungkin mengumpulkan beberapa jenis informasi untuk memberikan pengalaman yang lebih baik, antara lain:</p>
                <ul>
                    <li><strong>Informasi Pribadi:</strong> Data seperti nama, alamat email, atau informasi kontak lainnya yang Anda berikan secara sukarela (misalnya saat berlangganan newsletter, mengisi formulir kontak, atau meninggalkan komentar).</li>
                    <li><strong>Data Penggunaan (Log Data):</strong> Informasi otomatis yang dikirimkan oleh browser Anda, seperti alamat Protokol Internet (IP), jenis browser, versi browser, halaman blog kami yang Anda kunjungi, waktu dan tanggal kunjungan, serta durasi waktu yang dihabiskan di halaman tersebut.</li>
                </ul>

                <h4 class="mt-4">2. Bagaimana Kami Menggunakan Informasi Anda</h4>
                <p>Informasi yang kami kumpulkan digunakan untuk berbagai tujuan, termasuk namun tidak terbatas pada:</p>
                <ul>
                    <li>Menyediakan, mengoperasikan, dan memastikan kelancaran layanan blog kami.</li>
                    <li>Memperbaiki, mempersonalisasi, dan memperluas pengalaman antarmuka pengguna (UI/UX).</li>
                    <li>Memahami dan menganalisis tren bagaimana pengunjung berinteraksi dengan situs kami.</li>
                    <li>Melindungi sistem dari tindakan penyalahgunaan, spam, atau aktivitas ilegal lainnya.</li>
                    <li>Berkomunikasi dengan Anda terkait pembaruan layanan, artikel terbaru, atau balasan atas pertanyaan Anda.</li>
                </ul>

                <h4 class="mt-4">3. Penggunaan Cookies dan Teknologi Pelacakan</h4>
                <p>Kami menggunakan <em>"cookies"</em> dan teknologi pelacakan serupa untuk melacak aktivitas di layanan kami. Cookies adalah file dengan sejumlah kecil data yang mungkin menyertakan pengenal unik anonim. Cookies dikirim ke browser Anda dari situs web dan disimpan di perangkat Anda. Anda dapat mengatur browser Anda untuk menolak semua cookies atau untuk memberikan notifikasi saat cookie sedang dikirim.</p>

                <h4 class="mt-4">4. Keamanan Data</h4>
                <p>Keamanan data Anda sangat penting bagi kami. Kami menerapkan langkah-langkah keamanan teknis dan administratif yang dirancang untuk melindungi Informasi Pribadi Anda dari akses, pengungkapan, atau modifikasi yang tidak sah. Namun, perlu diingat bahwa tidak ada metode transmisi melalui Internet atau metode penyimpanan elektronik yang 100% aman dan tanpa celah.</p>

                <h4 class="mt-4">5. Tautan ke Layanan Pihak Ketiga</h4>
                <p>Artikel atau halaman di blog kami mungkin berisi tautan ke situs web pihak ketiga yang tidak dioperasikan oleh kami. Jika Anda mengklik tautan tersebut, Anda akan diarahkan ke situs web mereka. Kami tidak memiliki kendali dan tidak bertanggung jawab atas konten, kebijakan privasi, atau praktik dari situs atau layanan pihak ketiga mana pun.</p>

                <h4 class="mt-4">6. Perubahan pada Kebijakan Privasi Ini</h4>
                <p>Kami memegang hak untuk memperbarui Kebijakan Privasi ini dari waktu ke waktu agar tetap relevan dengan hukum yang berlaku atau perubahan pada layanan kami. Kami akan memberi tahu Anda tentang segala perubahan dengan memposting Kebijakan Privasi baru di halaman ini dan memperbarui "Tanggal pembaruan" di bagian atas halaman. Anda disarankan untuk meninjau halaman ini secara berkala.</p>

                <h4 class="mt-4">7. Hubungi Kami</h4>
                <p>Jika Anda memiliki pertanyaan, keluhan, atau masukan mengenai Kebijakan Privasi ini, jangan ragu untuk menghubungi kami melalui:</p>
                <ul>
                    <li>Halaman Kontak di situs web ini</li>
                    <li>Email: <strong>admin@domainkamu.com</strong> (Silakan ubah dengan email aslimu)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .content-policy h4 { 
        color: #2c3e50; 
        font-weight: 600; 
        margin-bottom: 1rem;
    }
    .content-policy p, .content-policy li { 
        line-height: 1.8; 
        color: #4a5568; 
        font-size: 1.05rem;
    }
    .content-policy ul {
        margin-bottom: 1.5rem;
    }
</style>
<?= $this->endSection() ?>