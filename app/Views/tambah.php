<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<style>
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 4rem 0;
        margin-bottom: 3rem;
        text-align: center;
        border-radius: 0 0 1.5rem 1.5rem;
    }
    .hover-lift {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
</style>

<div class="hero-section shadow-sm">
    <div class="container">
        <h1 class="fw-bold text-primary mb-3">
            <i class="fas fa-pen-fancy me-2"></i>Tulis Artikel Baru
        </h1>
        <p class="text-muted fs-5 mb-0">Bagikan pengetahuan dan pengalaman Anda dengan komunitas tech Indonesia</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-<?= (session()->getFlashdata('tipe_pesan') === 'success') ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                    <i class="fas fa-<?= (session()->getFlashdata('tipe_pesan') === 'success') ? 'check-circle' : 'exclamation-circle'; ?> me-2"></i>
                    <strong><?= (session()->getFlashdata('tipe_pesan') === 'success') ? 'Berhasil!' : 'Error!'; ?></strong><br>
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4 p-md-5">
                    <form method="POST" action="<?= base_url('artikel/simpan') ?>" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="alert alert-info border-start border-4 border-info mb-4" role="alert">
                            <h6 class="alert-heading fw-bold mb-1">
                                <i class="fas fa-info-circle me-1"></i> Catatan Penting
                            </h6>
                            <p class="mb-0 small">
                                Ini adalah simulasi form. Data yang Anda masukkan tidak akan disimpan ke database. Fitur ini dibuat untuk keperluan pembelajaran tentang Controller dan View di CodeIgniter.
                            </p>
                        </div>

                        <div class="mb-4">
                            <label for="judul" class="form-label fw-semibold">
                                <i class="fas fa-heading text-secondary me-1"></i> Judul Artikel
                            </label>
                            <input type="text" class="form-control form-control-lg" id="judul" name="judul" placeholder="Masukkan judul artikel yang menarik..." value="<?= old('judul'); ?>" required>
                            <div class="form-text">Minimal 10 karakter, maksimal 200 karakter</div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="kategori" class="form-label fw-semibold">
                                    <i class="fas fa-tag text-secondary me-1"></i> Kategori
                                </label>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option value="" <?= (old('kategori') === '') ? 'selected' : ''; ?> disabled>Pilih Kategori...</option>
                                    <option value="Teknologi" <?= (old('kategori') === 'Teknologi') ? 'selected' : ''; ?>>Teknologi</option>
                                    <option value="Framework" <?= (old('kategori') === 'Framework') ? 'selected' : ''; ?>>Framework</option>
                                    <option value="Desain" <?= (old('kategori') === 'Desain') ? 'selected' : ''; ?>>Desain</option>
                                    <option value="Keamanan" <?= (old('kategori') === 'Keamanan') ? 'selected' : ''; ?>>Keamanan</option>
                                    <option value="Database" <?= (old('kategori') === 'Database') ? 'selected' : ''; ?>>Database</option>
                                    <option value="DevOps" <?= (old('kategori') === 'DevOps') ? 'selected' : ''; ?>>DevOps</option>
                                    <option value="Mobile" <?= (old('kategori') === 'Mobile') ? 'selected' : ''; ?>>Mobile Development</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="author" class="form-label fw-semibold">
                                    <i class="fas fa-user text-secondary me-1"></i> Nama Penulis
                                </label>
                                <input type="text" class="form-control" id="author" name="author" placeholder="Contoh: John Doe" value="<?= old('author'); ?>" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal" class="form-label fw-semibold">
                                <i class="fas fa-calendar text-secondary me-1"></i> Tanggal Publikasi
                            </label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>" required>
                            <div class="form-text">Pilih tanggal publikasi artikel</div>
                        </div>

                        <div class="mb-4">
                            <label for="excerpt" class="form-label fw-semibold">
                                <i class="fas fa-quote-left text-secondary me-1"></i> Ringkasan Singkat
                            </label>
                            <textarea class="form-control" id="excerpt" name="excerpt" rows="2" placeholder="Tuliskan ringkasan singkat untuk menarik pembaca..." required><?= old('excerpt'); ?></textarea>
                            <div class="form-text">Ringkasan ini akan ditampilkan di halaman preview artikel (maksimal 200 karakter).</div>
                        </div>

                        <div class="mb-4">
                            <label for="isi" class="form-label fw-semibold">
                                <i class="fas fa-file-alt text-secondary me-1"></i> Isi Artikel
                            </label>
                            <textarea class="form-control" id="isi" name="isi" rows="12" placeholder="Tulis isi lengkap artikel Anda di sini..." required><?= old('isi'); ?></textarea>
                            <div class="form-text">Minimal 500 karakter.</div>
                        </div>

                        <div class="mb-4">
                            <label for="gambar" class="form-label fw-semibold">
                                <i class="fas fa-image text-secondary me-1"></i> URL Gambar Thumbnail
                            </label>
                            <input type="url" class="form-control" id="gambar" name="gambar" placeholder="Contoh: https://images.unsplash.com/..." value="<?= old('gambar'); ?>">
                            <div class="form-text">Gunakan URL gambar dari Unsplash atau sumber lainnya. Biarkan kosong untuk menggunakan gambar default.</div>
                        </div>

                        <div class="bg-light p-4 rounded mb-4 border">
                            <h6 class="fw-bold text-dark mb-3">
                                <i class="fas fa-clipboard-check text-primary me-2"></i> Panduan Penulisan
                            </h6>
                            <ul class="text-muted mb-0 small ps-3">
                                <li class="mb-1">Tulis artikel dengan bahasa yang jelas dan mudah dipahami.</li>
                                <li class="mb-1">Hindari plagiarisme — selalu cantumkan sumber referensi.</li>
                                <li class="mb-1">Gunakan <em>heading</em> dan <em>formatting</em> untuk meningkatkan keterbacaan.</li>
                                <li class="mb-1">Sertakan contoh <em>code</em> jika artikel tentang <em>programming</em>.</li>
                                <li class="mb-1">Lakukan <em>proofreading</em> sebelum mengirimkan tulisan.</li>
                                <li>Artikel akan ditinjau (<em>review</em>) sebelum dipublikasikan.</li>
                            </ul>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <a href="<?= base_url('artikel') ?>" class="btn btn-light border w-100 py-2">
                                    <i class="fas fa-arrow-left me-2"></i> Batal & Kembali
                                </a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary w-100 py-2">
                                    <i class="fas fa-paper-plane me-2"></i> Publish Artikel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-lift">
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-primary mb-3">
                                <i class="fas fa-lightbulb me-2"></i> Tips Judul Bagus
                            </h5>
                            <ul class="text-muted mb-0 small ps-3">
                                <li class="mb-1">Jelas dan deskriptif.</li>
                                <li class="mb-1">Gunakan <em>keyword</em> yang relevan.</li>
                                <li class="mb-1">Buat agar menarik dan <em>eye-catching</em>.</li>
                                <li>Panjang ideal: 50-60 karakter.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-lift">
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-success mb-3">
                                <i class="fas fa-chart-line me-2"></i> Tips SEO
                            </h5>
                            <ul class="text-muted mb-0 small ps-3">
                                <li class="mb-1">Gunakan <em>keyword</em> utama di awal judul.</li>
                                <li class="mb-1">Tulis <em>meta description</em> yang menarik.</li>
                                <li class="mb-1">Berikan <em>internal</em> dan <em>external links</em>.</li>
                                <li>Isi <em>alt text</em> untuk setiap gambar.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>