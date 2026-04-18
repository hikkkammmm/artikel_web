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
    .article-main-img {
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        border-radius: 0.5rem;
    }
    .card-img-top-related {
        height: 160px;
        object-fit: cover;
    }
    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--bs-primary) 0%, #0a58ca 100%);
    }
    /* Social Brand Colors */
    .btn-facebook { background-color: #1877F2; color: white; transition: opacity 0.2s; }
    .btn-twitter { background-color: #1DA1F2; color: white; transition: opacity 0.2s; }
    .btn-instagram { background-color: #E4405F; color: white; transition: opacity 0.2s; }
    .btn-linkedin { background-color: #0A66C2; color: white; transition: opacity 0.2s; }
    .btn-facebook:hover, .btn-twitter:hover, .btn-instagram:hover, .btn-linkedin:hover { opacity: 0.8; color: white; }
    
    .category-link {
        display: flex;
        align-items: center;
        padding: 0.5rem 0;
        color: #495057;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .category-link:hover { color: var(--bs-primary); }
</style>

<div class="hero-section shadow-sm">
    <div class="container">
        <h1 class="fw-bold text-dark mb-3"><?= $artikel['judul'] ?></h1>
        <p class="text-muted fs-5 mb-0">
            <span class="badge bg-primary me-2"><?= $artikel['kategori'] ?></span> 
            <i class="fas fa-calendar-alt me-1"></i> <?= date('d F Y', strtotime($artikel['tanggal'])) ?>
        </p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
        
        <div class="col-lg-8">
            <article>
                <img src="<?= $artikel['gambar'] ?>" alt="<?= $artikel['judul'] ?>" class="article-main-img shadow-sm mb-4">

                <div class="d-flex flex-wrap align-items-center text-muted border-bottom pb-3 mb-4 gap-4">
                    <div>
                        <i class="fas fa-user-circle fs-5 me-2 align-middle"></i>
                        <span>Oleh <strong class="text-dark"><?= $artikel['author'] ?></strong></span>
                    </div>
                    <div>
                        <i class="fas fa-calendar-alt fs-5 me-2 align-middle"></i>
                        <span><?= date('d F Y', strtotime($artikel['tanggal'])) ?></span>
                    </div>
                    <div>
                        <i class="fas fa-tag fs-5 me-2 align-middle"></i>
                        <span><?= $artikel['kategori'] ?></span>
                    </div>
                </div>

                <div class="fs-5 lh-lg text-dark mb-5">
                    <?= nl2br($artikel['isi']) ?>
                </div>

                <div class="card bg-light border-0 shadow-sm mb-5">
                    <div class="card-body p-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                        <p class="mb-3 mb-md-0 fw-bold text-dark">
                            <i class="fas fa-share-alt text-primary me-2"></i> Bagikan Artikel Ini
                        </p>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="#" class="btn btn-facebook btn-sm px-3"><i class="fab fa-facebook-f me-1"></i> Facebook</a>
                            <a href="#" class="btn btn-twitter btn-sm px-3"><i class="fab fa-twitter me-1"></i> Twitter</a>
                            <a href="#" class="btn btn-instagram btn-sm px-3"><i class="fab fa-instagram me-1"></i> Instagram</a>
                            <a href="#" class="btn btn-linkedin btn-sm px-3"><i class="fab fa-linkedin-in me-1"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>

                <div class="card bg-gradient-primary border-0 shadow-sm mb-5 text-white">
                    <div class="card-body p-4 p-md-5 d-flex align-items-center">
                        <div class="me-4 d-none d-md-block">
                            <i class="fas fa-user-tie" style="font-size: 4rem; opacity: 0.8;"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Tentang Penulis</h5>
                            <h4 class="mb-2 fw-bolder"><?= $artikel['author'] ?></h4>
                            <p class="mb-0 text-white-50">Penulis konten teknologi berpengalaman dengan fokus pada framework PHP, web development, dan best practices dalam coding.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 border-top pt-5">
                    <h4 class="fw-bold mb-4"><i class="fas fa-link text-primary me-2"></i> Artikel Terkait</h4>
                    <div class="row g-4">
                        <?php foreach (array_slice($semuaArtikel, 0, 3) as $rel_art): ?>
                            <?php if ($rel_art['id'] != $artikel['id']): ?>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm hover-lift">
                                        <img src="<?= $rel_art['gambar'] ?>" class="card-img-top card-img-top-related" alt="<?= $rel_art['judul'] ?>">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title fw-bold mb-3 flex-grow-1">
                                                <?= strlen($rel_art['judul']) > 50 ? substr($rel_art['judul'], 0, 50) . '...' : $rel_art['judul'] ?>
                                            </h6>
                                            <a href="<?= base_url('artikel/detail/' . $rel_art['id']) ?>" class="btn btn-outline-primary btn-sm mt-auto">
                                                Baca Artikel
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

            </article>
        </div>

        <div class="col-lg-4">
            
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold"><i class="fas fa-list text-primary me-2"></i> Kategori</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <a href="#" class="category-link border-bottom"><i class="fas fa-tag text-muted me-3"></i> Teknologi</a>
                        <a href="#" class="category-link border-bottom"><i class="fas fa-tag text-muted me-3"></i> Framework</a>
                        <a href="#" class="category-link border-bottom"><i class="fas fa-tag text-muted me-3"></i> Desain</a>
                        <a href="#" class="category-link border-bottom"><i class="fas fa-tag text-muted me-3"></i> Keamanan</a>
                        <a href="#" class="category-link"><i class="fas fa-tag text-muted me-3"></i> Database</a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold"><i class="fas fa-star text-warning me-2"></i> Artikel Terbaru</h5>
                </div>
                <div class="card-body">
                    <?php foreach (array_slice($semuaArtikel, 0, 4) as $index => $new_art): ?>
                        <div class="<?= $index < 3 ? 'border-bottom mb-3 pb-3' : '' ?>">
                            <a href="<?= base_url('artikel/detail/' . $new_art['id']) ?>" class="text-decoration-none text-dark">
                                <h6 class="fw-bold mb-1 hover-primary" style="transition: color 0.2s;">
                                    <?= $new_art['judul'] ?>
                                </h6>
                            </a>
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i> <?= date('d M Y', strtotime($new_art['tanggal'])) ?>
                            </small>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4 text-center">
                    <div class="mb-3">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fas fa-bell fs-4"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-2">Notifikasi</h5>
                    <p class="small text-muted mb-4">Aktifkan notifikasi untuk mendapat update artikel favorit secara real-time.</p>
                    <button class="btn btn-primary w-100 fw-bold">
                        Aktifkan Notifikasi
                    </button>
                </div>
            </div>

            <div class="card border-0 shadow-sm bg-light text-center">
                <div class="card-body p-5">
                    <i class="fas fa-comment-dots text-secondary mb-3" style="font-size: 3rem; opacity: 0.5;"></i>
                    <h5 class="fw-bold text-dark">Ruang Diskusi</h5>
                    <p class="text-muted small mb-0">Fitur komentar sedang dalam tahap pengembangan dan akan segera tersedia.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>