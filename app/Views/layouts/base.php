<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Portal Berita' ?> - TechNews Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #1f3a93;
            --primary-light: #2d5aa6;
            --secondary: #ff6b6b;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --border-color: #e9ecef;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }

        /* Navbar */
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .navbar-custom .navbar-brand {
            font-size: 1.8rem;
            font-weight: 800;
            color: white !important;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-custom .navbar-brand i {
            font-size: 2rem;
            color: var(--secondary);
        }

        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            margin-left: 1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-custom .nav-link:hover {
            color: white !important;
        }

        .navbar-custom .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .navbar-custom .nav-link:hover::after {
            width: 100%;
        }

        .navbar-custom .btn-outline-light {
            border-color: white;
            color: white;
            font-weight: 600;
        }

        .navbar-custom .btn-outline-light:hover {
            background-color: var(--secondary);
            border-color: var(--secondary);
        }

        /* Header Hero */
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 107, 107, 0.1);
            border-radius: 50%;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .hero-section p {
            font-size: 1.3rem;
            margin-bottom: 0;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        /* Card Article */
        .article-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .article-card .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .article-card .card-body {
            flex-grow: 1;
        }

        .article-card .badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
            background-color: var(--secondary);
            color: white;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .article-card .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .article-card .card-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .article-card .meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
            color: #999;
            font-size: 0.85rem;
        }

        .article-card .meta-author {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .article-card .btn-read {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            align-self: flex-start;
            margin-top: auto;
        }

        .article-card .btn-read:hover {
            background: var(--secondary);
            color: white;
            transform: scale(1.05);
        }

        /* Featured Article */
        .featured-article {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
        }

        .featured-article .row {
            align-items: center;
        }

        .featured-article img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .featured-article .content {
            padding: 2rem;
        }

        .featured-article .badge {
            background: var(--secondary);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 1rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .featured-article h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .featured-article p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 3rem;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        footer p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
        }

        footer a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        footer a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }

        footer .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--primary);
            border-radius: 50%;
            margin-right: 0.5rem;
            color: white;
            transition: all 0.3s ease;
        }

        footer .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        footer .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 2rem;
            padding-top: 1.5rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
        }

        /* Sidebar */
        .sidebar {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .sidebar h5 {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--secondary);
        }

        .sidebar .category-list a {
            display: block;
            padding: 0.7rem 0;
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            padding-left: 1rem;
        }

        .sidebar .category-list a:hover {
            color: var(--primary);
            border-left-color: var(--secondary);
        }

        /* Alert */
        .alert-custom {
            border: none;
            border-radius: 8px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }

        /* Article Detail */
        .article-detail {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .article-detail img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        .article-detail h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .article-meta {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            flex-wrap: wrap;
        }

        .article-meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #666;
        }

        .article-meta-item i {
            color: var(--primary);
        }

        .article-content {
            color: #333;
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 2rem;
        }

        /* Form */
        .form-section {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .form-section h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 2rem;
            color: var(--dark);
        }

        .form-section .form-label {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .form-section .form-control,
        .form-section .form-select {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-section .form-control:focus,
        .form-section .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(31, 58, 147, 0.25);
        }

        .form-section .btn-submit {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .form-section .btn-submit:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Related Articles */
        .related-articles {
            background: var(--light);
            border-radius: 12px;
            padding: 2rem;
            margin-top: 2rem;
        }

        .related-articles h3 {
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 1.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .featured-article .row {
                flex-direction: column-reverse;
            }

            .article-card .card-title {
                font-size: 1.1rem;
            }

            .article-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .article-detail h1 {
                font-size: 1.8rem;
            }
        }
    </style>
    <?= $this->renderSection('styles') ?? '' ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <i class="fas fa-newspaper"></i> TechNews
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('artikel') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('artikel/tentang') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light ms-2" href="<?= base_url('artikel/tambah') ?>">
                            <i class="fas fa-plus"></i> Tulis Artikel
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-vh-100">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5><i class="fas fa-newspaper"></i> TechNews Indonesia</h5>
                    <p>Portal berita teknologi terpercaya untuk update terkini seputar dunia digital dan inovasi teknologi.</p>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kategori</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Teknologi</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Framework</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Desain</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Keamanan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Menu</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?= base_url('artikel') ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="<?= base_url('artikel/tentang') ?>"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                        <li><a href="<?= base_url('kontak') ?>"><i class="fas fa-chevron-right"></i> Hubungi Kami</a></li>
                        <li><a href="<?= base_url('privacy-policy') ?>"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Newsletter</h5>
                    <p>Dapatkan update artikel terbaru langsung ke email Anda.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Anda" style="border-radius: 8px 0 0 8px; border: none;">
                        <button class="btn btn-primary" type="button" style="background: var(--primary); border: none; border-radius: 0 8px 8px 0;">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 TechNews Indonesia. Semua hak dilindungi.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
