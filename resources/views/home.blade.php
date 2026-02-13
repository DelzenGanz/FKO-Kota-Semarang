{{-- Extend the main layout --}}
@extends('layouts.app')

{{-- Set page title --}}
@section('title', 'Beranda - Forum Komunikasi OSIS Kota Semarang')

{{-- Main content --}}
@section('content')

{{-- Modern Hero Section with Background Image Overlay --}}
<section id="hero" class="hero-modern">
    {{-- Background Image --}}
    <div class="hero-bg" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');"></div>
    
    {{-- Dark Overlay --}}
    <div class="hero-overlay"></div>
    
    {{-- Content --}}
    <div class="hero-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    {{-- Badge --}}
                    <div class="hero-badge mb-4" data-aos="fade-down">
                        <i class="bi bi-people-fill me-2"></i>
                        Forum Komunikasi OSIS Kota Semarang
                    </div>
                    
                    {{-- Main Heading --}}
                    <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                        Membangun Generasi<br>
                        <span class="hero-title-highlight">Pemimpin Berkarakter</span>
                    </h1>
                    
                    {{-- Description --}}
                    <p class="hero-description mb-5" data-aos="fade-up" data-aos-delay="200">
                        Wadah komunikasi dan koordinasi pengurus OSIS se-Kota Semarang dalam 
                        mengembangkan kepemimpinan, prestasi, dan karakter siswa yang unggul.
                    </p>
                    
                    {{-- CTA Buttons --}}
                    <div class="hero-cta d-flex gap-3 justify-content-center flex-wrap" data-aos="fade-up" data-aos-delay="300">
                        <a href="#programs" class="btn btn-hero-primary">
                            <span>Jelajahi Program</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#contact" class="btn btn-hero-secondary">
                            <i class="bi bi-envelope me-2"></i>
                            <span>Hubungi Kami</span>
                        </a>
                    </div>
                    
                    {{-- Scroll Indicator --}}
                    <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="400">
                        <a href="#about" class="scroll-link">
                            <i class="bi bi-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Section --}}
<section id="about" class="section-padding-large bg-warm-brown-gradient">
    <div class="noise-texture"></div>
    <div class="decoration-blur decoration-blur-1"></div>
    <div class="decoration-blur decoration-blur-2"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center">
            {{-- Left Column: Text --}}
            <div class="col-lg-6 mb-5 mb-lg-0 about-text-container">
                <span class="badge bg-white bg-opacity-25 text-dark-brown border border-white border-opacity-25 px-3 py-2 mb-3">
                    <i class="bi bi-info-circle me-2"></i>Tentang FKO
                </span>
                <h2 class="display-5 fw-bold text-dark-brown mb-3" style="font-family: 'Poppins', serif;">Tentang Kami</h2>
                <div class="divider mb-4" style="background: var(--color-dark-brown);"></div>
                
                <p class="lead text-dark-brown mb-4">
                    Forum Komunikasi OSIS (FKO) Kota Semarang adalah wadah bagi seluruh pengurus OSIS SMA/SMK/MA sederajat di Kota Semarang.
                </p>
                
                <div class="about-content text-dark-brown text-justify-custom">
                    <p class="mb-4">
                        Kami berkomitmen untuk menjadi jembatan aspirasi siswa serta sarana pengembangan diri melalui berbagai kegiatan positif yang inspiratif dan edukatif. Bersama, kita membangun generasi muda yang berkarakter, kreatif, dan inovatif.
                    </p>

                    {{-- Tabbed Visi & Misi --}}
                    <div class="mt-5">
                        <ul class="nav nav-pills nav-pills-custom mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-visi-tab" data-bs-toggle="pill" data-bs-target="#pills-visi" type="button" role="tab" aria-controls="pills-visi" aria-selected="true">Visi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-misi-tab" data-bs-toggle="pill" data-bs-target="#pills-misi" type="button" role="tab" aria-controls="pills-misi" aria-selected="false">Misi</button>
                            </li>
                        </ul>
                        <div class="tab-content glass-tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-visi" role="tabpanel" aria-labelledby="pills-visi-tab" tabindex="0">
                                <blockquote class="visi-quote">
                                    <p class="mb-0">
                                        "Memajukan FKO sebagai organisasi yang menjadi dasar bagi siswa siswi SMA/SMK/MA dan sederajat untuk dapat meningkatkan perkembangan minat & bakatnya dalam berorganisasi. Menjadi landasan penting bagi pemerintah untuk peduli terhadap para pelajar yang giat menyeruakan suara untuk pendidikan yang lebih maju."
                                    </p>
                                </blockquote>
                            </div>
                            <div class="tab-pane fade" id="pills-misi" role="tabpanel" aria-labelledby="pills-misi-tab" tabindex="0">
                                <ul class="list-unstyled misi-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Menjadi Pembimbing bagi siswa siswi SMA/SMK/MA & sederajat untuk mengembangkan minat & bakatnya dalam berorganisasi</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Menjadi organisasi pelopor dalam penggerak siswa untuk memajukan lingkungan pendidikan yang lebih harmonis</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Menghubungkan aspirasi & kreativitas siswa SMA/SMK/MA & guna menciptakan keserasian pelajar</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Membentuk FKO sebagai organisasi yang independen dan peduli dengan lingkungan masyarakat sekitar</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Menjembatani perkumpulan seluruh anggota OSIS SMA/SMK/MA & sederajat di Kota Semarang secara harmonis dan menjunjung tinggi nilai Pancasila.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Image --}}
            <div class="col-lg-6 about-image-container">
                <div class="position-relative">
                    <img src="{{ asset('images/hero-bg.jpg') }}" alt="Tentang FKO" class="img-fluid about-image w-100 object-fit-cover" style="height: 500px;">
                    
                    {{-- Floating Badge --}}
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-4 shadow-lg m-4" style="max-width: 200px;">
                        <h3 class="fw-bold text-dark-brown mb-0">50+</h3>
                        <p class="text-muted small mb-0">Sekolah Tergabung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Programs & Activities Section --}}
<section id="programs" class="section-padding-large bg-soft-cream">
    {{-- Wave Divider --}}
    <div class="wave-divider-top">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="container pt-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3">
                <i class="bi bi-calendar-check me-2"></i>Program Kami
            </span>
            <h2 class="display-5 fw-bold text-dark-brown mb-3">Program & Kegiatan</h2>
            <div class="divider mx-auto mb-4"></div>
            <p class="lead text-muted">
                Agenda unggulan untuk mengembangkan potensi pelajar Kota Semarang
            </p>
        </div>
        
        <div class="d-flex flex-column gap-5">
            @foreach($programs as $index => $program)
            <div class="program-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="row g-0 align-items-center">
                    {{-- Visual Program (Left) --}}
                    <div class="col-lg-5">
                        <div class="program-image-wrapper h-100">
                             {{-- Using hero-bg as placeholder if specific program images aren't dynamic in this context yet, 
                                  but usually better to have program specific images. Assuming $program might not have 'image' key yet based on previous code.
                                  I will check if $program has an image or use a random one from asset for demo. 
                                  Wait, previous code had `{{ $program['icon'] }}`. I will use a placeholder image for now. --}}
                            <img src="{{ asset('images/hero-bg.jpg') }}" alt="{{ $program['title'] }}" class="program-image">
                            
                            <div class="position-absolute top-0 start-0 m-3">
                                <div class="bg-white rounded-circle p-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="bi {{ $program['icon'] }} text-primary fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Informasi Program (Right) --}}
                    <div class="col-lg-7">
                        <div class="program-content">
                            <h3 class="program-title">{{ $program['title'] }}</h3>
                            <p class="text-muted mb-4">{{ $program['description'] }}</p>
                            
                            {{-- Stats / Progress --}}
                            <div class="program-stats">
                                <div class="row align-items-center mb-2">
                                    <div class="col">
                                        <h6 class="fw-bold text-dark-brown mb-0">Realisasi Kegiatan</h6>
                                    </div>
                                    <div class="col-auto">
                                        {{-- Randomize stats for demo purposes since they aren't in DB yet --}}
                                        <span class="fw-bold text-primary">{{ 85 + ($index * 2) }}%</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar progress-bar-custom" role="progressbar" style="width: {{ 85 + ($index * 2) }}%" aria-valuenow="{{ 85 + ($index * 2) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-check-circle-fill me-1 text-success"></i> Terjadwal</span>
                                    <span><i class="bi bi-people-fill me-1"></i> Partisipasi Aktif</span>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-end">
                                <a href="#" class="btn btn-outline-primary rounded-pill px-4">Detail Kegiatan <i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Latest News Section --}}
<section id="news" class="py-5 bg-white glass-bg">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3">
                <i class="bi bi-newspaper me-2"></i>Berita & Update
            </span>
            <h2 class="display-5 fw-bold text-primary mb-3">Berita Terkini</h2>
            <div class="divider mx-auto mb-4"></div>
            <p class="lead text-muted">
                Update terbaru kegiatan dan prestasi Forum Komunikasi OSIS
            </p>
        </div>
        
        <div class="row g-4">
            @foreach($news as $article)
            <div class="col-lg-6">
                <div class="card glass-card border-0 shadow-sm h-100 hover-lift overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="news-image-wrapper h-100 bg-beige d-flex align-items-center justify-content-center">
                                @if($article['image'])
                                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" 
                                         class="img-fluid w-100 h-100 object-fit-cover">
                                @else
                                    {{-- Fallback icon when no image --}}
                                    <i class="bi bi-newspaper text-primary" style="font-size: 4rem; opacity: 0.3;"></i>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-4 d-flex flex-column h-100">
                                <div class="mb-2">
                                    <span class="badge bg-primary">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ \Carbon\Carbon::parse($article['date'])->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </span>
                                </div>
                                <h5 class="fw-bold mb-3">{{ $article['title'] }}</h5>
                                <p class="text-muted small mb-3 flex-grow-1">{{ $article['excerpt'] }}</p>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-auto align-self-start">
                                    Baca Selengkapnya
                                    <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="py-5 bg-beige glass-bg">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <span class="badge bg-primary px-3 py-2 mb-3">
                        <i class="bi bi-envelope me-2"></i>Kontak Kami
                    </span>
                    <h2 class="display-5 fw-bold text-primary mb-3">Hubungi Kami</h2>
                    <div class="divider mx-auto mb-4"></div>
                    <p class="lead text-muted">
                        Ada pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami!
                    </p>
                </div>
                
                <div class="card glass-card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="row g-4">
                            {{-- Address Info --}}
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" 
                                             style="width: 50px; height: 50px;">
                                            <i class="bi bi-geo-alt-fill text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fw-bold mb-2">Alamat</h6>
                                        <p class="text-muted small mb-0">
                                            Dispora Kota Semarang<br>
                                            Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Phone Info --}}
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" 
                                             style="width: 50px; height: 50px;">
                                            <i class="bi bi-telephone-fill text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fw-bold mb-2">Telepon</h6>
                                        <p class="text-muted small mb-0">
                                            +62 851-5900-9038
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Email Info --}}
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" 
                                             style="width: 50px; height: 50px;">
                                            <i class="bi bi-envelope-fill text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fw-bold mb-2">Email</h6>
                                        <p class="text-muted small mb-0">
                                            semarangfko@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- WhatsApp Info --}}
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" 
                                             style="width: 50px; height: 50px;">
                                            <i class="bi bi-whatsapp text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fw-bold mb-2">WhatsApp</h6>
                                        <a href="https://wa.me/6285159009038" 
                                           class="btn btn-success btn-sm mt-1" target="_blank">
                                            <i class="bi bi-whatsapp me-2"></i>
                                            Chat via WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Social Media Links --}}
                        <div class="text-center mt-5 pt-4 border-top">
                            <p class="text-muted mb-3">Atau ikuti kami di media sosial:</p>
                            <div class="d-flex gap-3 justify-content-center">
                                <a href="https://instagram.com/fkosemarang" target="_blank" 
                                   class="btn btn-primary btn-social rounded-circle">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="https://facebook.com/fkosemarang" target="_blank" 
                                   class="btn btn-primary btn-social rounded-circle">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
