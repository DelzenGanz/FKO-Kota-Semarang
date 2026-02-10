<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Page Title - Dynamic from each page --}}
    <title>@yield('title', 'Forum Komunikasi OSIS Kota Semarang')</title>
    
    {{-- Meta Description for SEO --}}
    <meta name="description" content="Forum Komunikasi OSIS Kota Semarang - Wadah komunikasi dan koordinasi pengurus OSIS se-Kota Semarang">
    <meta name="keywords" content="OSIS, Forum OSIS, Semarang, Organisasi Siswa, FKO">
    
    {{-- Bootstrap 5 CSS via CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    {{-- Custom CSS for color scheme --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    {{-- Additional page-specific styles --}}
    @yield('styles')
</head>
<body>
    {{-- Sticky Navigation Bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm" id="mainNavbar">
        <div class="container">
            {{-- Brand/Logo --}}
            {{--
                CARA GANTI LOGO:
                1. Simpan logo FKO Anda dengan nama 'logo.png' 
                2. Upload ke folder: /public/images/logo.png
                3. Logo akan otomatis muncul di navbar
                
                Format yang disarankan:
                - PNG dengan background transparan
                - Ukuran: 400x400px atau lebih
                - Aspect ratio: 1:1 (persegi)
            --}}
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" 
                     alt="Logo FKO Semarang" 
                     class="navbar-logo me-2">
                <span>FKO Semarang</span>
            </a>

            
            {{-- Mobile Toggle Button --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            {{-- Navigation Links --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programs">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content Area - Each page defines this section --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer Section --}}
    <footer class="bg-deep-brown text-white py-5">
        <div class="container">
            <div class="row">
                {{-- About Column --}}
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-people-fill me-2"></i>
                        FKO Kota Semarang
                    </h5>
                    <p class="text-white-50">
                        Forum Komunikasi OSIS Kota Semarang adalah wadah komunikasi dan koordinasi 
                        pengurus OSIS se-Kota Semarang dalam mengembangkan organisasi dan prestasi siswa.
                    </p>
                </div>
                
                {{-- Quick Links Column --}}
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#about" class="text-white-50 text-decoration-none hover-beige">
                                <i class="bi bi-chevron-right"></i> Tentang Kami
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#programs" class="text-white-50 text-decoration-none hover-beige">
                                <i class="bi bi-chevron-right"></i> Program & Kegiatan
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#news" class="text-white-50 text-decoration-none hover-beige">
                                <i class="bi bi-chevron-right"></i> Berita Terkini
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#contact" class="text-white-50 text-decoration-none hover-beige">
                                <i class="bi bi-chevron-right"></i> Hubungi Kami
                            </a>
                        </li>
                    </ul>
                </div>
                
                {{-- Social Media Column --}}
                <div class="col-lg-4 col-md-12">
                    <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                    <p class="text-white-50 mb-3">
                        Tetap terhubung dengan kami melalui media sosial
                    </p>
                    <div class="d-flex gap-3">
                        <a href="https://instagram.com/fkosemarang" target="_blank" 
                           class="btn btn-outline-light btn-social rounded-circle" 
                           aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://facebook.com/fkosemarang" target="_blank" 
                           class="btn btn-outline-light btn-social rounded-circle" 
                           aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://wa.me/6285159009038" target="_blank" 
                           class="btn btn-outline-light btn-social rounded-circle" 
                           aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="mailto:semarangfko@gmail.com" 
                           class="btn btn-outline-light btn-social rounded-circle" 
                           aria-label="Email">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            {{-- Copyright --}}
            <hr class="my-4 bg-white opacity-25">
            <div class="text-center text-white-50">
                <p class="mb-0">
                    &copy; {{ date('Y') }} Forum Komunikasi OSIS Kota Semarang. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    {{-- Bootstrap 5 JS Bundle with Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    {{-- Smooth Scroll Script for Navigation Links --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for all anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const navbarHeight = document.getElementById('mainNavbar').offsetHeight;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        const navbarCollapse = document.getElementById('navbarNav');
                        if (navbarCollapse.classList.contains('show')) {
                            bootstrap.Collapse.getInstance(navbarCollapse).hide();
                        }
                    }
                });
            });
            
            // Add active class to navbar links on scroll
            window.addEventListener('scroll', function() {
                let scrollPosition = window.scrollY + 100;
                
                document.querySelectorAll('section[id]').forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === `#${sectionId}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            });
        });
    </script>
    
    {{-- Additional page-specific scripts --}}
    @yield('scripts')
</body>
</html>
