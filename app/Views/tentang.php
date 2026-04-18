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
    
    /* Gradient Avatars for Team */
    .avatar-icon {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 auto 1rem;
        color: white;
        font-size: 2rem;
    }
    .bg-gradient-1 { background: linear-gradient(135deg, var(--bs-primary) 0%, #0a58ca 100%); }
    .bg-gradient-2 { background: linear-gradient(135deg, #ff6b6b 0%, #ee5253 100%); }
    .bg-gradient-3 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .bg-gradient-4 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
    
    .contact-icon-wrap {
        width: 60px;
        height: 60px;
        background-color: rgba(13, 110, 253, 0.1); /* light primary */
        color: var(--bs-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
</style>

<div class="hero-section shadow-sm">
    <div class="container">
        <h1 class="fw-bold text-dark mb-3">
            <i class="fas fa-info-circle text-primary me-2"></i>Tentang TechNews Indonesia
        </h1>
        <p class="text-muted fs-5 mb-0">Mengenal lebih jauh tentang portal berita teknologi terdepan di Indonesia</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
        
        <div class="col-lg-8">
            <div class="mb-5">
                <h3 class="fw-bold text-primary mb-3">Misi Kami</h3>
                <p class="fs-5 text-muted lh-lg mb-5">
                    TechNews Indonesia didirikan dengan misi utama untuk menyediakan informasi teknologi terkini, akurat, dan bermanfaat bagi para developer, entrepreneur, dan tech enthusiast di Indonesia. Kami percaya bahwa pengetahuan adalah kunci kesuksesan dalam menghadapi era digital.
                </p>

                <h3 class="fw-bold text-primary mb-3">Visi Kami</h3>
                <p class="fs-5 text-muted lh-lg mb-5">
                    Menjadi portal berita teknologi paling terpercaya dan influential di Asia Tenggara dengan misi memberdayakan komunitas tech Indonesia melalui knowledge sharing dan networking.
                </p>

                <h3 class="fw-bold text-dark mb-4 border-bottom pb-2">Apa yang Kami Layani</h3>
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light border-start border-4 border-primary hover-lift">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2"><i class="fas fa-newspaper text-primary me-2"></i> Artikel & Berita</h5>
                                <p class="text-muted mb-0">Update terkini seputar perkembangan teknologi, framework baru, dan tren industri digital.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light border-start border-4 border-success hover-lift">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2"><i class="fas fa-graduation-cap text-success me-2"></i> Tutorial & Guide</h5>
                                <p class="text-muted mb-0">Panduan lengkap untuk developer pemula hingga advanced dalam berbagai topik teknologi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light border-start border-4 border-warning hover-lift">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2"><i class="fas fa-code text-warning me-2"></i> Code Review</h5>
                                <p class="text-muted mb-0">Analisis mendalam tentang best practices dan common mistakes dalam penulisan kode.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light border-start border-4 border-info hover-lift">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2"><i class="fas fa-comments text-info me-2"></i> Komunitas</h5>
                                <p class="text-muted mb-0">Platform untuk networking, berbagi pengetahuan, dan berkolaborasi dengan developer lain.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="fw-bold text-dark mb-4 border-bottom pb-2">Tim Kami</h3>
                <p class="fs-5 text-muted lh-lg mb-4">
                    TechNews Indonesia dijalankan oleh tim profesional yang berpengalaman di bidang teknologi, jurnalisme, dan content creation. Setiap anggota tim kami memiliki passion tinggi terhadap dunia teknologi dan komitmen untuk memberikan konten berkualitas tinggi.
                </p>

                <div class="row g-4 mb-5 text-center">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm bg-light hover-lift h-100">
                            <div class="card-body p-4">
                                <div class="avatar-icon bg-gradient-1 shadow-sm">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Ahmad Rizki</h5>
                                <p class="text-muted small mb-0">Founder & Chief Editor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm bg-light hover-lift h-100">
                            <div class="card-body p-4">
                                <div class="avatar-icon bg-gradient-2 shadow-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Siti Nurhaliza</h5>
                                <p class="text-muted small mb-0">Content Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm bg-light hover-lift h-100">
                            <div class="card-body p-4">
                                <div class="avatar-icon bg-gradient-3 shadow-sm">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Budi Santoso</h5>
                                <p class="text-muted small mb-0">Tech Writer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm bg-light hover-lift h-100">
                            <div class="card-body p-4">
                                <div class="avatar-icon bg-gradient-4 shadow-sm">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Eka Putri</h5>
                                <p class="text-muted small mb-0">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="fw-bold text-dark mb-4 border-bottom pb-2">Hubungi Kami</h3>
                <div class="row g-4 text-center">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="contact-icon-wrap">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h6 class="fw-bold text-dark mb-2">Email</h6>
                                <p class="text-muted small mb-0">info@technews.id</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="contact-icon-wrap">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h6 class="fw-bold text-dark mb-2">Telepon</h6>
                                <p class="text-muted small mb-0">+62 (021) 1234-5678</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="contact-icon-wrap">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h6 class="fw-bold text-dark mb-2">Lokasi</h6>
                                <p class="text-muted small mb-0">Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold"><i class="fas fa-award text-warning me-2"></i> Penghargaan</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="pb-3 mb-3 border-bottom d-flex align-items-center">
                            <i class="fas fa-trophy fs-5 text-warning me-3"></i> 
                            <span class="text-dark fw-semibold">Best Tech News Portal 2023</span>
                        </li>
                        <li class="pb-3 mb-3 border-bottom d-flex align-items-center">
                            <i class="fas fa-trophy fs-5 text-warning me-3"></i> 
                            <span class="text-dark fw-semibold">Most Trusted Tech Web 2024</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fas fa-trophy fs-5 text-warning me-3"></i> 
                            <span class="text-dark fw-semibold">Innovation in Journalism 2024</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold"><i class="fas fa-chart-line text-success me-2"></i> Statistik</h5>
                </div>
                <div class="card-body">
                    <div class="bg-light rounded p-3 text-center mb-3">
                        <h2 class="fw-bolder text-primary mb-0">50K+</h2>
                        <p class="text-muted small mb-0">Active Readers</p>
                    </div>
                    <div class="bg-light rounded p-3 text-center mb-3">
                        <h2 class="fw-bolder text-success mb-0">200+</h2>
                        <p class="text-muted small mb-0">Artikel Dipublikasikan</p>
                    </div>
                    <div class="bg-light rounded p-3 text-center">
                        <h2 class="fw-bolder text-info mb-0">15+</h2>
                        <p class="text-muted small mb-0">Tahun Pengalaman</p>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm bg-primary text-white text-center">
                <div class="card-body p-4">
                    <i class="fas fa-heart fs-1 mb-3 text-white-50"></i>
                    <h5 class="fw-bold mb-2">Perlu Bantuan?</h5>
                    <p class="small text-white-50 mb-4">Jika Anda punya pertanyaan, masukan, atau feedback, jangan ragu untuk menghubungi kami.</p>
                    <a href="mailto:info@technews.id" class="btn btn-light text-primary w-100 fw-bold">
                        <i class="fas fa-envelope me-2"></i> Hubungi Kami
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>