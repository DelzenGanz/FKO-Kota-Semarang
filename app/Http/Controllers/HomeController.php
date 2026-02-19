<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * HomeController
 * 
 * Handles the main landing page of the Forum Komunikasi OSIS Kota Semarang website
 * Provides sample data for programs and news articles
 */
class HomeController extends Controller
{
    /**
     * Display the home page
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Program Kerja & Kegiatan FKO Kota Semarang
        $programs = [
            [
                'title' => 'First Gathering',
                'short' => 'First Gathering',
                'description' => 'Acara perkenalan dan silaturahmi awal seluruh anggota OSIS SMA/SMK/MA se-Kota Semarang untuk membangun kebersamaan dan jaringan antar sekolah.',
                'icon' => 'bi-people-fill',
                'image' => 'images/programs/first-gathering.jpg',
                'category' => 'Networking'
            ],
            [
                'title' => 'Musyawarah Besar',
                'short' => 'Mubes',
                'description' => 'Forum musyawarah tertinggi FKO untuk menetapkan program kerja, anggaran, dan kepengurusan baru organisasi.',
                'icon' => 'bi-megaphone-fill',
                'image' => 'images/programs/musyawarah-besar.jpg',
                'category' => 'Organisasi'
            ],
            [
                'title' => 'BATAKO',
                'short' => 'Bagi-Bagi Takjil Bareng FKO',
                'description' => 'Kegiatan sosial berbagi takjil di bulan Ramadhan sebagai wujud kepedulian dan kebersamaan pelajar Kota Semarang.',
                'icon' => 'bi-heart-fill',
                'image' => 'images/programs/batako.jpg',
                'category' => 'Sosial'
            ],
            [
                'title' => 'WASBANG',
                'short' => 'Wawasan Kebangsaan',
                'description' => 'Program edukasi wawasan kebangsaan untuk memperkuat nilai-nilai nasionalisme dan cinta tanah air di kalangan pelajar.',
                'icon' => 'bi-flag-fill',
                'image' => 'images/programs/wasbang.jpg',
                'category' => 'Edukasi'
            ],
            [
                'title' => 'FUWIKO',
                'short' => 'Fun With FKO',
                'description' => 'Kegiatan rekreasi dan games seru bersama seluruh anggota FKO untuk mempererat tali persaudaraan antar sekolah.',
                'icon' => 'bi-emoji-laughing-fill',
                'image' => 'images/programs/fuwiko.jpg',
                'category' => 'Hiburan'
            ],
            [
                'title' => 'FENTOS',
                'short' => 'FKO Advance with Youth Conventions',
                'description' => 'Konvensi pemuda tingkat kota yang membahas isu-isu strategis kepemudaan dan pendidikan masa depan.',
                'icon' => 'bi-mic-fill',
                'image' => 'images/programs/fentos.jpg',
                'category' => 'Konvensi'
            ],
            [
                'title' => 'FPMKS',
                'short' => 'Forum Pemimpin Muda Kota Semarang',
                'description' => 'Forum diskusi dan pelatihan kepemimpinan bagi para pemimpin muda OSIS se-Kota Semarang.',
                'icon' => 'bi-star-fill',
                'image' => 'images/programs/fpmks.jpg',
                'category' => 'Leadership'
            ],
            [
                'title' => 'GELORA CUP',
                'short' => 'Gelora Cup',
                'description' => 'Kompetisi olahraga dan seni antar sekolah se-Kota Semarang untuk menyalurkan bakat dan meningkatkan sportivitas.',
                'icon' => 'bi-trophy-fill',
                'image' => 'images/programs/gelora-cup.jpg',
                'category' => 'Kompetisi'
            ],
            [
                'title' => 'GELORA MUDA',
                'short' => 'Gelora Muda',
                'description' => 'Program pengembangan kreativitas dan inovasi generasi muda melalui berbagai kegiatan inspiratif.',
                'icon' => 'bi-lightning-fill',
                'image' => 'images/programs/gelora-muda.jpg',
                'category' => 'Kreativitas'
            ],
            [
                'title' => 'SLP',
                'short' => 'Semarang Leadership Project',
                'description' => 'Program unggulan pelatihan kepemimpinan intensif yang mencetak kader pemimpin masa depan Kota Semarang.',
                'icon' => 'bi-rocket-takeoff-fill',
                'image' => 'images/programs/slp.jpg',
                'category' => 'Leadership'
            ],
        ];

        // Sample news/articles data - In production, this would come from a database
        $news = [
            [
                'title' => 'Pelantikan Pengurus FKO Periode 2026',
                'excerpt' => 'Acara pelantikan pengurus Forum Komunikasi OSIS Kota Semarang periode 2026 telah dilaksanakan dengan khidmat di Gedung Serbaguna...',
                'date' => '2026-02-01',
                'image' => null // Ganti dengan: asset('images/news/news1.jpg')
            ],
            [
                'title' => 'Workshop Manajemen Organisasi',
                'excerpt' => 'FKO mengadakan workshop manajemen organisasi yang dihadiri oleh seluruh pengurus OSIS dari 50 sekolah di Kota Semarang...',
                'date' => '2026-01-28',
                'image' => null // Ganti dengan: asset('images/news/news2.jpg')
            ],
            [
                'title' => 'Baksos Peduli Banjir Semarang',
                'excerpt' => 'Sebagai bentuk kepedulian terhadap korban banjir, FKO menggalang donasi dan menyalurkan bantuan kepada warga terdampak...',
                'date' => '2026-01-25',
                'image' => null // Ganti dengan: asset('images/news/news3.jpg')
            ],
            [
                'title' => 'Juara Umum Lomba Kreatif Pelajar',
                'excerpt' => 'Prestasi membanggakan diraih oleh perwakilan FKO dalam ajang Lomba Kreatif Pelajar tingkat Jawa Tengah...',
                'date' => '2026-01-20',
                'image' => null // Ganti dengan: asset('images/news/news4.jpg')
            ]
        ];

        // Pass data to the view
        return view('home', compact('programs', 'news'));
    }
}
