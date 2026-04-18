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
    .img-cover {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
    .featured-img-wrap {
        height: 300px;
        overflow: hidden;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    .category-link {
        display: flex;
        align-items: center;
        padding: 0.5rem 0;
        color: #495057;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .category-link:hover {
        color: var(--bs-primary);
    }
</style>

<?php if (session()->has('pesan')): ?>
    <div class="container mt-4">
        <div class="alert alert-<?= session()->getFlashdata('tipe_pesan') == 'success' ? 'success' : 'info' ?> alert-dismissible fade show shadow-sm border-0" role="alert">
            <i class="fas <?= session()->getFlashdata('tipe_pesan') == 'success' ? 'fa-check-circle' : 'fa-info-circle' ?> me-2"></i> 
            <?= session()->getFlashdata('pesan') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

<div class="hero-section shadow-sm">
    <div class="container">
        <h1 class="fw-bold text-dark mb-3">
            <i class="fas fa-fire text-danger me-2"></i>Berita Teknologi Terkini
        </h1>
        <p class="text-muted fs-5 mb-0">Jelajahi dunia teknologi, inovasi, dan perkembangan terbaru dalam industri digital</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
        
        <div class="col-lg-8">
            
            <?php if (!empty($artikel) && count($artikel) > 0): ?>
                <div class="card border-0 shadow-sm mb-5 hover-lift">
                    <div class="row g-0">
                        <div class="col-md-6 featured-img-wrap rounded-start">
                            <img src="<?= $artikel[0]['gambar'] ?>" class="img-cover" alt="<?= $artikel[0]['judul'] ?>">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <span class="badge bg-primary mb-2 px-3 py-2 text-uppercase tracking-wide">
                                    <?= $artikel[0]['kategori'] ?>
                                </span>
                                <h2 class="card-title h3 fw-bold mb-3"><?= $artikel[0]['judul'] ?></h2>
                                <p class="card-text text-muted mb-4"><?= $artikel[0]['excerpt'] ?></p>
                                
                                <div class="d-flex align-items-center text-muted small mb-4">
                                    <div class="me-3">
                                        <i class="fas fa-user-circle me-1"></i> <?= $artikel[0]['author'] ?>
                                    </div>
                                    <div>
                                        <i class="fas fa-calendar-alt me-1"></i> <?= date('d M Y', strtotime($artikel[0]['tanggal'])) ?>
                                    </div>
                                </div>
                                
                                <a href="<?= base_url('artikel/detail/' . $artikel[0]['id']) ?>" class="btn btn-primary px-4 py-2">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row g-4">
                <?php foreach (array_slice($artikel, 1) as $art): ?>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <img src="<?= $art['gambar'] ?>" class="card-img-top" alt="<?= $art['judul'] ?>">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <span class="badge bg-secondary"><?= $art['kategori'] ?></span>
                                </div>
                                <h5 class="card-title fw-bold"><?= $art['judul'] ?></h5>
                                <p class="card-text text-muted small flex-grow-1"><?= $art['excerpt'] ?></p>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top text-muted small">
                                    <span><i class="fas fa-user-circle me-1"></i> <?= $art['author'] ?></span>
                                    <span><i class="fas fa-calendar-alt me-1"></i> <?= date('d M', strtotime($art['tanggal'])) ?></span>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0 pb-3 px-3">
                                <a href="<?= base_url('artikel/detail/' . $art['id']) ?>" class="btn btn-outline-primary w-100">
                                    Baca Artikel <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($artikel)): ?>
            <div class="alert alert-info border-start border-4 border-info mt-5 shadow-sm bg-light text-dark" role="alert">
                <i class="fas fa-info-circle text-info me-2"></i> Menampilkan <strong><?= count($artikel) ?></strong> artikel dari total <strong><?= $total ?? count($artikel) ?></strong> artikel.
            </div>
            <?php endif; ?>
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
                    <h5 class="fw-bold"><i class="fas fa-star text-warning me-2"></i> Terpopuler</h5>
                </div>
                <div class="card-body">
                    <?php if(!empty($artikel)): ?>
                        <?php foreach (array_slice($artikel, 0, 3) as $index => $pop_art): ?>
                            <div class="<?= $index < 2 ? 'border-bottom mb-3 pb-3' : '' ?>">
                                <a href="<?= base_url('artikel/detail/' . $pop_art['id']) ?>" class="text-decoration-none text-dark">
                                    <h6 class="fw-bold mb-1 hover-primary">
                                        <i class="fas fa-trophy text-warning small me-1"></i> <?= $pop_art['judul'] ?>
                                    </h6>
                                </a>
                                <small class="text-muted">
                                    <i class="fas fa-calendar-alt me-1"></i> <?= date('d M Y', strtotime($pop_art['tanggal'])) ?>
                                </small>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-2"><i class="fas fa-bell me-2"></i> Langganan</h5>
                    <p class="small text-white-50 mb-3">Dapatkan update artikel terbaru setiap hari langsung ke inbox Anda.</p>
                    <form action="#" method="POST">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control border-0" placeholder="Email Anda" required>
                        </div>
                        <button type="submit" class="btn btn-light text-primary w-100 fw-bold">
                            <i class="fas fa-paper-plane me-1"></i> Berlangganan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>