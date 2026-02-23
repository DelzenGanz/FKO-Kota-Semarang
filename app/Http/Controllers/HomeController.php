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
                'image' => 'images/programs/firstgathering.jpg',
                'category' => 'Networking'
            ],
            [
                'title' => 'Musyawarah Besar',
                'short' => 'Mubes',
                'description' => 'Forum musyawarah tertinggi FKO untuk menetapkan program kerja, anggaran, dan kepengurusan baru organisasi.',
                'icon' => 'bi-megaphone-fill',
                'image' => 'images/programs/mubes2.jpg',
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
                'image' => 'images/programs/geloramuda3.jpg',
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

        // Divisi / Struktur Organisasi FKO Kota Semarang
        $divisions = [
            ['name' => 'Badan Pengurus Harian', 'short' => 'BPH', 'description' => 'Inti kepemimpinan organisasi yang bertanggung jawab atas seluruh kebijakan dan arah strategis.', 'tag' => 'Pengurus', 'icon' => 'bi-shield-fill-check'],
            ['name' => 'Divisi Keagamaan', 'short' => 'DIV 1', 'description' => 'Membina kehidupan spiritual anggota dan menyelenggarakan kegiatan keagamaan organisasi.', 'tag' => 'Keagamaan', 'icon' => 'bi-moon-stars-fill'],
            ['name' => 'Divisi Bela Negara', 'short' => 'DIV 2', 'description' => 'Menumbuhkan semangat nasionalisme, kedisiplinan, dan cinta tanah air di kalangan anggota.', 'tag' => 'Bela Negara', 'icon' => 'bi-flag-fill'],
            ['name' => 'Divisi Keolahragaan', 'short' => 'DIV 3', 'description' => 'Mengembangkan potensi olahraga anggota dan mengelola kegiatan kompetisi serta kebugaran.', 'tag' => 'Olahraga', 'icon' => 'bi-dribbble'],
            ['name' => 'Divisi Kesehatan', 'short' => 'DIV 4', 'description' => 'Meningkatkan kesadaran kesehatan anggota melalui edukasi dan program layanan kesehatan.', 'tag' => 'Kesehatan', 'icon' => 'bi-heart-pulse-fill'],
            ['name' => 'Divisi Keorganisasian', 'short' => 'DIV 5', 'description' => 'Mengelola administrasi, keanggotaan, dan pengembangan kapasitas internal organisasi.', 'tag' => 'Organisasi', 'icon' => 'bi-diagram-3-fill'],
            ['name' => 'Divisi Kewirausahaan', 'short' => 'DIV 6', 'description' => 'Mendorong jiwa wirausaha anggota melalui pelatihan, inkubasi ide, dan program bisnis.', 'tag' => 'Wirausaha', 'icon' => 'bi-shop'],
            ['name' => 'Divisi Sosial Budaya', 'short' => 'DIV 7', 'description' => 'Melestarikan budaya lokal dan menjalankan program pengabdian sosial kepada masyarakat.', 'tag' => 'Sosial Budaya', 'icon' => 'bi-globe-asia-australia'],
            ['name' => 'Divisi TIK', 'short' => 'DIV 8', 'description' => 'Mengelola infrastruktur digital, teknologi informasi, dan komunikasi organisasi.', 'tag' => 'Teknologi', 'icon' => 'bi-cpu-fill'],
            ['name' => 'Divisi Humas', 'short' => 'DIV 9', 'description' => 'Membangun relasi publik, mengelola media sosial, dan menjaga citra organisasi.', 'tag' => 'Humas', 'icon' => 'bi-broadcast-pin'],
        ];

        // News articles - centralized in NewsController
        $news = \App\Http\Controllers\NewsController::getNews();

        // Pass data to the view
        return view('home', compact('programs', 'news', 'divisions'));
    }
}
