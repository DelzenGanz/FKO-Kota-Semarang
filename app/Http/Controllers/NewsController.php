<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * NewsController
 * 
 * Handles news article detail pages for FKO Kota Semarang website
 */
class NewsController extends Controller
{
    /**
     * Get all news articles
     * In production, this would come from a database
     *
     * @return array
     */
    public static function getNews()
    {
        return [
            [
                'slug' => 'semarang-leadership-project-2026',
                'title' => 'Semarang Leadership Project 2026',
                'excerpt' => 'Acara pelantikan pengurus Forum Komunikasi OSIS Kota Semarang periode 2026 telah dilaksanakan dengan khidmat di Gedung Serbaguna...',
                'date' => '2026-02-01',
                'author' => 'Humas FKO',
                'category' => 'Kegiatan',
                'image' => null,
                'content' => '
                    <p class="lead">Acara pelantikan pengurus Forum Komunikasi OSIS Kota Semarang periode 2026 telah dilaksanakan dengan khidmat di Gedung Serbaguna Kota Semarang pada tanggal 1 Februari 2026.</p>
                    
                    <p>Semarang Leadership Project (SLP) 2026 merupakan program unggulan FKO yang bertujuan untuk mencetak kader-kader pemimpin muda yang berkualitas. Acara ini dihadiri oleh lebih dari 200 peserta dari berbagai SMA/SMK/MA se-Kota Semarang.</p>

                    <h4>Rangkaian Kegiatan</h4>
                    <p>Program SLP 2026 berlangsung selama tiga hari penuh dengan berbagai rangkaian kegiatan yang dirancang untuk mengembangkan kemampuan kepemimpinan peserta:</p>
                    <ul>
                        <li><strong>Hari Pertama</strong> — Pembukaan resmi, keynote speech dari Walikota Semarang, dan sesi ice-breaking untuk mempererat hubungan antar peserta dari berbagai sekolah.</li>
                        <li><strong>Hari Kedua</strong> — Workshop kepemimpinan intensif, simulasi organisasi, dan diskusi panel tentang tantangan pemuda di era digital.</li>
                        <li><strong>Hari Ketiga</strong> — Presentasi proyek kelompok, pelantikan pengurus baru, dan penutupan resmi.</li>
                    </ul>

                    <h4>Dampak dan Harapan</h4>
                    <p>Melalui SLP 2026, FKO berharap dapat melahirkan pemimpin-pemimpin muda yang tidak hanya kompeten dalam berorganisasi, tetapi juga memiliki integritas dan kepedulian terhadap lingkungan sekitar. Para alumni SLP diharapkan mampu membawa perubahan positif di sekolah masing-masing.</p>

                    <blockquote class="blockquote border-start border-primary border-4 ps-4 my-4">
                        <p class="mb-0 fst-italic">"Kepemimpinan bukan tentang memerintah, melainkan tentang melayani dan menginspirasi orang lain untuk menjadi versi terbaik dari diri mereka."</p>
                        <footer class="blockquote-footer mt-2">Ketua Umum FKO Kota Semarang</footer>
                    </blockquote>

                    <p>Dengan berakhirnya program ini, tercatat 50 pengurus baru dilantik untuk memimpin FKO di periode 2026. Kepengurusan baru ini diharapkan dapat melanjutkan dan mengembangkan program-program kerja yang telah dirancang untuk memajukan pelajar Kota Semarang.</p>
                '
            ],
            [
                'slug' => 'workshop-manajemen-organisasi',
                'title' => 'Workshop Manajemen Organisasi',
                'excerpt' => 'FKO mengadakan workshop manajemen organisasi yang dihadiri oleh seluruh pengurus OSIS dari 50 sekolah di Kota Semarang...',
                'date' => '2026-01-28',
                'author' => 'Humas FKO',
                'category' => 'Edukasi',
                'image' => null,
                'content' => '
                    <p class="lead">FKO mengadakan workshop manajemen organisasi yang dihadiri oleh seluruh pengurus OSIS dari 50 sekolah di Kota Semarang pada tanggal 28 Januari 2026.</p>

                    <p>Workshop ini bertujuan untuk meningkatkan kapasitas pengurus OSIS dalam mengelola organisasi secara profesional dan efektif. Kegiatan berlangsung di Aula Dinas Pendidikan Kota Semarang dengan mengusung tema "Organisasi Modern untuk Generasi Unggul".</p>

                    <h4>Materi Workshop</h4>
                    <p>Para peserta mendapatkan pembekalan dari narasumber-narasumber berpengalaman di bidang manajemen organisasi:</p>
                    <ul>
                        <li><strong>Perencanaan Strategis</strong> — Teknik menyusun visi, misi, dan program kerja yang terukur dan realistis.</li>
                        <li><strong>Manajemen Tim</strong> — Cara membangun tim yang solid, delegasi tugas, dan resolusi konflik.</li>
                        <li><strong>Digital Management</strong> — Pemanfaatan teknologi untuk administrasi organisasi, termasuk tools kolaborasi online.</li>
                        <li><strong>Public Speaking & Communication</strong> — Keterampilan presentasi dan komunikasi efektif untuk pemimpin muda.</li>
                    </ul>

                    <h4>Hasil Workshop</h4>
                    <p>Setelah mengikuti workshop selama satu hari penuh, peserta diharapkan mampu mengimplementasikan ilmu yang didapat di organisasi OSIS masing-masing. FKO juga menyediakan modul digital yang dapat diunduh sebagai panduan praktis bagi pengurus OSIS.</p>

                    <p>Antusiasme peserta sangat tinggi, terbukti dari banyaknya pertanyaan yang diajukan selama sesi tanya jawab. Beberapa peserta bahkan langsung menyusun rencana aksi untuk diterapkan di sekolah mereka.</p>
                '
            ],
            [
                'slug' => 'baksos-peduli-banjir-semarang',
                'title' => 'Baksos Peduli Banjir Semarang',
                'excerpt' => 'Sebagai bentuk kepedulian terhadap korban banjir, FKO menggalang donasi dan menyalurkan bantuan kepada warga terdampak...',
                'date' => '2026-01-25',
                'author' => 'Divisi Sosial Budaya',
                'category' => 'Sosial',
                'image' => null,
                'content' => '
                    <p class="lead">Sebagai bentuk kepedulian terhadap korban banjir, FKO menggalang donasi dan menyalurkan bantuan kepada warga terdampak banjir di beberapa wilayah Kota Semarang pada 25 Januari 2026.</p>

                    <p>Bencana banjir yang melanda beberapa kecamatan di Kota Semarang pada awal tahun 2026 mendorong FKO untuk segera mengambil langkah nyata membantu warga yang terdampak. Program Baksos Peduli Banjir ini merupakan kolaborasi dari seluruh divisi FKO bersama OSIS se-Kota Semarang.</p>

                    <h4>Penggalangan Dana</h4>
                    <p>Dalam waktu kurang dari satu minggu, FKO berhasil menggalang donasi dari 50 sekolah anggota dengan total bantuan yang cukup signifikan:</p>
                    <ul>
                        <li>Paket sembako sebanyak 300 paket</li>
                        <li>Air mineral dan makanan siap saji</li>
                        <li>Pakaian layak pakai dan selimut</li>
                        <li>Perlengkapan kebersihan dan kesehatan</li>
                    </ul>

                    <h4>Penyaluran Bantuan</h4>
                    <p>Tim relawan FKO yang terdiri dari 100 anggota dari berbagai sekolah secara langsung mendistribusikan bantuan ke titik-titik pengungsian di Kecamatan Semarang Barat dan Semarang Utara. Selain menyalurkan bantuan materiil, para relawan juga mengadakan kegiatan trauma healing untuk anak-anak korban banjir.</p>

                    <p>Kegiatan baksos ini menjadi bukti nyata bahwa pelajar Kota Semarang memiliki kepedulian yang tinggi terhadap sesama dan siap berkontribusi positif bagi masyarakat.</p>
                '
            ],
            [
                'slug' => 'juara-umum-lomba-kreatif-pelajar',
                'title' => 'Juara Umum Lomba Kreatif Pelajar',
                'excerpt' => 'Prestasi membanggakan diraih oleh perwakilan FKO dalam ajang Lomba Kreatif Pelajar tingkat Jawa Tengah...',
                'date' => '2026-01-20',
                'author' => 'Humas FKO',
                'category' => 'Prestasi',
                'image' => null,
                'content' => '
                    <p class="lead">Prestasi membanggakan diraih oleh perwakilan FKO dalam ajang Lomba Kreatif Pelajar tingkat Jawa Tengah yang diselenggarakan pada 20 Januari 2026 di Gedung Kesenian Solo.</p>

                    <p>Delegasi FKO Kota Semarang yang terdiri dari 15 siswa terbaik dari berbagai sekolah berhasil meraih gelar Juara Umum dalam kompetisi yang diikuti oleh lebih dari 500 peserta dari seluruh kabupaten/kota di Jawa Tengah.</p>

                    <h4>Prestasi yang Diraih</h4>
                    <p>Berikut daftar prestasi yang berhasil ditorehkan oleh perwakilan FKO:</p>
                    <ul>
                        <li><strong>Juara 1 Debat Bahasa Indonesia</strong> — Tim dari SMAN 3 Semarang yang mewakili FKO berhasil menyingkirkan 32 tim lainnya.</li>
                        <li><strong>Juara 1 Karya Tulis Ilmiah</strong> — Karya tentang "Implementasi Smart City untuk Pendidikan" meraih penghargaan tertinggi.</li>
                        <li><strong>Juara 2 Video Kreatif</strong> — Video dokumenter tentang gerakan literasi pelajar mendapat apresiasi tinggi dari dewan juri.</li>
                        <li><strong>Juara 3 Poster Digital</strong> — Desain poster bertema lingkungan hidup berhasil menembus final.</li>
                    </ul>

                    <h4>Apresiasi dan Dukungan</h4>
                    <p>Kepala Dinas Pendidikan Kota Semarang memberikan apresiasi tinggi atas prestasi yang diraih oleh perwakilan FKO. Beliau berharap pencapaian ini dapat memotivasi seluruh pelajar Kota Semarang untuk terus berkarya dan berprestasi.</p>

                    <blockquote class="blockquote border-start border-primary border-4 ps-4 my-4">
                        <p class="mb-0 fst-italic">"Prestasi ini membuktikan bahwa pelajar Kota Semarang memiliki kualitas dan daya saing yang tinggi di tingkat provinsi bahkan nasional."</p>
                        <footer class="blockquote-footer mt-2">Kepala Dinas Pendidikan Kota Semarang</footer>
                    </blockquote>

                    <p>FKO akan terus mendukung pengembangan bakat dan kreativitas pelajar melalui program-program pembinaan yang terstruktur dan berkelanjutan.</p>
                '
            ]
        ];
    }

    /**
     * Display a single news article
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $allNews = self::getNews();
        $article = null;
        $relatedNews = [];

        foreach ($allNews as $item) {
            if ($item['slug'] === $slug) {
                $article = $item;
            } else {
                $relatedNews[] = $item;
            }
        }

        if (!$article) {
            abort(404);
        }

        return view('news-detail', compact('article', 'relatedNews'));
    }
}
