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
<section id="about" class="py-5 bg-white">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3">
                        <i class="bi bi-info-circle me-2"></i>Tentang FKO
                    </span>
                    <h2 class="display-5 fw-bold text-primary mb-3">Tentang Kami</h2>
                    <div class="divider mx-auto mb-4"></div>
                </div>
                
                <div class="row g-4">
                    {{-- Vision Card --}}
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body p-4">
                                <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                     style="width: 60px; height: 60px;">
                                    <i class="bi bi-bullseye text-primary fs-3"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Visi</h4>
                                <p class="text-muted mb-0">
                                    Menjadi wadah komunikasi OSIS yang solid, inovatif, dan berkontribusi 
                                    nyata dalam pengembangan kepemimpinan dan prestasi siswa se-Kota Semarang.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Mission Card --}}
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body p-4">
                                <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                     style="width: 60px; height: 60px;">
                                    <i class="bi bi-flag text-primary fs-3"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Misi</h4>
                                <ul class="text-muted ps-3 mb-0">
                                    <li class="mb-2">Membangun koordinasi antar OSIS se-Kota Semarang</li>
                                    <li class="mb-2">Mengembangkan program pemberdayaan siswa</li>
                                    <li class="mb-2">Meningkatkan prestasi dan kreativitas siswa</li>
                                    <li>Mewujudkan organisasi siswa yang berkarakter</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Programs & Activities Section --}}
<section id="programs" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3">
                <i class="bi bi-calendar-check me-2"></i>Program Kami
            </span>
            <h2 class="display-5 fw-bold text-primary mb-3">Program & Kegiatan</h2>
            <div class="divider mx-auto mb-4"></div>
            <p class="lead text-muted">
                Beragam program unggulan untuk pengembangan organisasi dan prestasi siswa
            </p>
        </div>
        
        <div class="row g-4">
            @foreach($programs as $index => $program)
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-lift text-center">
                    <div class="card-body p-4">
                        <div class="icon-box bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                             style="width: 80px; height: 80px;">
                            <i class="bi {{ $program['icon'] }} text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-3">{{ $program['title'] }}</h5>
                        <p class="text-muted small mb-0">{{ $program['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Latest News Section --}}
<section id="news" class="py-5 bg-white">
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
                <div class="card border-0 shadow-sm h-100 hover-lift overflow-hidden">
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
<section id="contact" class="py-5 bg-beige">
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
                
                <div class="card border-0 shadow-lg">
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
