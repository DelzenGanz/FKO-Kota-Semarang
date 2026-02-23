{{-- Extend the main layout --}}
@extends('layouts.app')

{{-- Set page title --}}
@section('title', $article['title'] . ' - FKO Kota Semarang')

{{-- Main content --}}
@section('content')

{{-- Article Hero Banner --}}
<section class="news-detail-hero">
    <div class="hero-bg" style="background-image: url('{{ asset($article['image'] ?? 'images/hero-bg.jpg') }}');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    {{-- Breadcrumb --}}
                    <nav aria-label="breadcrumb" class="mb-4" data-aos="fade-down">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-white text-decoration-none opacity-75">
                                    <i class="bi bi-house-door me-1"></i>Beranda
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}#news" class="text-white text-decoration-none opacity-75">Berita</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">{{ Str::limit($article['title'], 30) }}</li>
                        </ol>
                    </nav>

                    {{-- Category Badge --}}
                    <span class="badge bg-white bg-opacity-25 text-white border border-white border-opacity-25 px-3 py-2 mb-3" data-aos="fade-up">
                        <i class="bi bi-bookmark-fill me-1"></i>{{ $article['category'] }}
                    </span>

                    {{-- Title --}}
                    <h1 class="display-5 fw-bold text-white mb-4" data-aos="fade-up" data-aos-delay="100">
                        {{ $article['title'] }}
                    </h1>

                    {{-- Meta Info --}}
                    <div class="d-flex flex-wrap gap-3 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <span class="text-white-50 small">
                            <i class="bi bi-calendar3 me-1"></i>
                            {{ \Carbon\Carbon::parse($article['date'])->locale('id')->isoFormat('D MMMM YYYY') }}
                        </span>
                        <span class="text-white-50 small">
                            <i class="bi bi-person me-1"></i>{{ $article['author'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Article Content --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            {{-- Main Content --}}
            <div class="col-lg-8">
                <div class="card glass-card border-0 shadow-sm mb-5">
                    <div class="card-body p-4 p-lg-5">
                        <div class="news-article-content">
                            {!! $article['content'] !!}
                        </div>

                        {{-- Share & Tags --}}
                        <hr class="my-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="d-flex gap-2 align-items-center">
                                <span class="text-muted small me-2"><i class="bi bi-tag me-1"></i>Kategori:</span>
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">{{ $article['category'] }}</span>
                            </div>
                            <div class="d-flex gap-2 mt-2 mt-md-0">
                                <span class="text-muted small me-2">Bagikan:</span>
                                <a href="https://wa.me/?text={{ urlencode($article['title'] . ' - ' . url()->current()) }}" 
                                   target="_blank" class="btn btn-sm btn-outline-success rounded-circle" style="width:32px;height:32px;padding:0;display:inline-flex;align-items:center;justify-content:center;" aria-label="Share via WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($article['title']) }}&url={{ urlencode(url()->current()) }}" 
                                   target="_blank" class="btn btn-sm btn-outline-dark rounded-circle" style="width:32px;height:32px;padding:0;display:inline-flex;align-items:center;justify-content:center;" aria-label="Share via Twitter">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Back Button --}}
                <div class="text-center mb-5">
                    <a href="{{ route('home') }}#news" class="btn btn-outline-primary px-4 py-2">
                        <i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda
                    </a>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">
                <div class="sticky-lg-top" style="top: 100px;">
                    <h5 class="fw-bold text-dark-brown mb-4">
                        <i class="bi bi-newspaper me-2"></i>Berita Lainnya
                    </h5>
                    @foreach($relatedNews as $related)
                    <a href="{{ route('news.show', $related['slug']) }}" class="text-decoration-none d-block mb-3">
                        <div class="card glass-card border-0 shadow-sm hover-lift">
                            <div class="card-body p-3">
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                            <i class="bi bi-newspaper text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold text-dark mb-1 small">{{ $related['title'] }}</h6>
                                        <span class="text-muted" style="font-size: 0.75rem;">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ \Carbon\Carbon::parse($related['date'])->locale('id')->isoFormat('D MMM YYYY') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
