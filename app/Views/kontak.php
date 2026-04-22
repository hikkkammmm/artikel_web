<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/kontak.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<?= $this->endSection() ?>

<div class="hero-section shadow-sm contact-header">
    <div class="container">
        <h1 class="fw-bold mb-3">
            <i class="fas fa-headset me-2 text-primary"></i>Hubungi Kami
        </h1>
        <p class="fs-5 mb-0">Punya pertanyaan, kritik, atau saran? Jangan ragu untuk mengirimkan pesan kepada tim kami.</p>
    </div>
</div>

<?php if (session()->has('pesan')): ?>
    <div class="container mb-4">
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 border-start border-4 border-success" role="alert">
            <i class="fas fa-check-circle text-success me-2"></i> <?= session()->getFlashdata('pesan') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

<div class="container mb-5">
    
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="contact-icon-wrap me-3 border border-primary border-opacity-25">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email Kami</h6>
                        <p class="text-muted small mb-0">info@technews.id</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="contact-icon-wrap me-3 bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Telepon</h6>
                        <p class="text-muted small mb-0">+62 (0274) 1234-567</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 hover-lift">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="contact-icon-wrap me-3 bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Lokasi Kantor</h6>
                        <p class="text-muted small mb-0">Yogyakarta, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-8">
    <div class="card border-0 shadow-sm h-100 overflow-hidden">
        
        <div class="card-header bg-primary text-white border-bottom-0 pt-4 pb-4 px-4 px-md-5">
            <h4 class="fw-bold mb-1 text-white">
                <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
            </h4>
            <p class="small text-white-50 mb-0">
                Isi formulir di bawah ini dan tim kami akan merespons dalam waktu 1x24 jam.
            </p>
        </div>
        
        <div class="card-body p-4 p-md-5 custom-form bg-white">
            <form action="<?= base_url('kontak/kirim') ?>" method="POST" id="contactForm">
                <?= csrf_field() ?>
                
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" 
                                   class="form-control rounded-3 <?= session('errors.nama') ? 'is-invalid' : '' ?>" 
                                   id="nama" name="nama" 
                                   placeholder="Nama Lengkap" 
                                   value="<?= old('nama') ?>" required>
                            <label for="nama"><i class="fas fa-user text-muted me-1"></i> Nama Lengkap</label>
                            <?php if(session('errors.nama')): ?>
                                <div class="invalid-feedback"><?= session('errors.nama') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" 
                                   class="form-control rounded-3 <?= session('errors.email') ? 'is-invalid' : '' ?>" 
                                   id="email" name="email" 
                                   placeholder="nama@email.com" 
                                   value="<?= old('email') ?>" required>
                            <label for="email"><i class="fas fa-envelope text-muted me-1"></i> Alamat Email</label>
                            <?php if(session('errors.email')): ?>
                                <div class="invalid-feedback"><?= session('errors.email') ?></div>
                            <?php else: ?>
                                <div class="form-text small text-muted mt-2">
                                    <i class="fas fa-lock me-1 text-success"></i>Email Anda aman bersama kami.
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-4">
                    <select class="form-select rounded-3 <?= session('errors.subjek') ? 'is-invalid' : '' ?>" 
                            id="subjek" name="subjek" aria-label="Pilih topik pertanyaan" required>
                        <option value="" <?= old('subjek') == '' ? 'selected' : '' ?> disabled>Pilih topik...</option>
                        <option value="Pertanyaan Umum" <?= old('subjek') == 'Pertanyaan Umum' ? 'selected' : '' ?>>Pertanyaan Umum</option>
                        <option value="Kerja Sama" <?= old('subjek') == 'Kerja Sama' ? 'selected' : '' ?>>Kerja Sama / Partnership</option>
                        <option value="Laporan Bug" <?= old('subjek') == 'Laporan Bug' ? 'selected' : '' ?>>Laporan Bug / Masalah Teknis</option>
                        <option value="Karier" <?= old('subjek') == 'Karier' ? 'selected' : '' ?>>Informasi Karier</option>
                        <option value="Lainnya" <?= old('subjek') == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                    </select>
                    <label for="subjek"><i class="fas fa-tag text-muted me-1"></i> Subjek Pesan</label>
                    <?php if(session('errors.subjek')): ?>
                        <div class="invalid-feedback"><?= session('errors.subjek') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-floating mb-5">
                    <textarea class="form-control rounded-3 <?= session('errors.pesan') ? 'is-invalid' : '' ?>" 
                              id="pesan" name="pesan" 
                              placeholder="Tuliskan pesan Anda..." 
                              style="height: 160px" required><?= old('pesan') ?></textarea>
                    <label for="pesan"><i class="fas fa-comment-alt text-muted me-1"></i> Tuliskan detail pesan Anda di sini...</label>
                    <?php if(session('errors.pesan')): ?>
                        <div class="invalid-feedback"><?= session('errors.pesan') ?></div>
                    <?php endif; ?>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary px-5 py-3 fw-bold rounded-3 shadow-sm hover-lift d-flex align-items-center justify-content-center">
                        Kirim Pesan <i class="fas fa-paper-plane ms-2"></i>
                    </button>
                </div>
            </form>
        </div>
        
    </div>
</div>

        <div class="col-lg-4">
            
            <div class="card border-0 shadow-sm mb-4 bg-primary text-white hover-lift">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4"><i class="fas fa-clock me-2"></i> Jam Operasional</h5>
                    <div class="d-flex justify-content-between border-bottom border-light border-opacity-25 pb-2 mb-2">
                        <span>Senin - Jumat</span>
                        <span class="fw-bold">09:00 - 17:00</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom border-light border-opacity-25 pb-2 mb-2">
                        <span>Sabtu</span>
                        <span class="fw-bold">09:00 - 14:00</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Minggu & Libur</span>
                        <span class="fw-bold text-warning">Tutup</span>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4 hover-lift">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold text-dark"><i class="fas fa-map text-primary me-2"></i> Peta Lokasi</h5>
                </div>
                <div class="card-body p-3">
<iframe class="map-iframe" 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.28548101438!2d110.29409865!3d-7.7940023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Yogyakarta%20City%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1680000000000!5m2!1sen!2sid" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                </div>
            </div>

            <div class="card border-0 shadow-sm text-center">
                <div class="card-body p-4">
                    <h6 class="fw-bold text-dark mb-3">Ikuti Kami</h6>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-light text-primary hover-lift"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light text-info hover-lift"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light text-danger hover-lift"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light text-primary hover-lift"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>