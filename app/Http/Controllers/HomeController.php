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
        // Sample programs data - In production, this would come from a database
        $programs = [
            [
                'title' => 'Rapat Koordinasi Bulanan',
                'description' => 'Pertemuan rutin koordinasi antar pengurus OSIS se-Kota Semarang untuk membahas program kerja dan evaluasi kegiatan.',
                'icon' => 'bi-calendar-event'
            ],
            [
                'title' => 'Pelatihan Leadership',
                'description' => 'Program pengembangan kepemimpinan bagi pengurus OSIS untuk meningkatkan kompetensi organisasi.',
                'icon' => 'bi-people'
            ],
            [
                'title' => 'Bakti Sosial',
                'description' => 'Kegiatan sosial kemasyarakatan sebagai wujud kepedulian siswa terhadap lingkungan sekitar.',
                'icon' => 'bi-heart'
            ],
            [
                'title' => 'Kompetisi Antar Sekolah',
                'description' => 'Penyelenggaraan berbagai lomba untuk meningkatkan prestasi dan kreativitas siswa se-Kota Semarang.',
                'icon' => 'bi-trophy'
            ]
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
