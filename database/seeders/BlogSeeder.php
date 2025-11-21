<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get first admin or super admin user
        $user = User::whereIn('role', ['admin', 'super_admin'])->first();

        if (!$user) {
            $user = User::first();
        }

        if (!$user) {
            $this->command->warn('No user found. Please create a user first.');
            return;
        }

        $blogs = [
            [
                'judul' => 'Gotong Royong Pembersihan Lingkungan RT 002 RW 017',
                'slug' => 'gotong-royong-pembersihan-lingkungan-rt-002-rw-017',
                'konten' => 'Pada hari Minggu, 15 November 2025, warga RT 002 RW 017 Bukit Damar mengadakan kegiatan gotong royong pembersihan lingkungan. Kegiatan ini diikuti oleh seluruh warga dengan antusias yang tinggi.

Kegiatan dimulai pukul 07:00 WIB dengan pembagian tugas kepada setiap warga. Beberapa warga bertugas membersihkan selokan, memotong rumput liar, dan mengumpulkan sampah yang berserakan di sekitar lingkungan.

Kegiatan gotong royong ini bertujuan untuk:
- Menjaga kebersihan lingkungan RT
- Meningkatkan rasa kebersamaan antar warga
- Menciptakan lingkungan yang sehat dan nyaman
- Mencegah terjadinya banjir saat musim hujan

Setelah kegiatan selesai, warga berkumpul untuk makan bersama yang telah disiapkan oleh ibu-ibu PKK. Kegiatan ini diharapkan dapat menjadi agenda rutin setiap bulan untuk menjaga kebersihan lingkungan RT 002 RW 017.',
                'excerpt' => 'Warga RT 002 RW 017 mengadakan gotong royong pembersihan lingkungan untuk menjaga kebersihan dan meningkatkan kebersamaan antar warga.',
                'kategori' => 'Kegiatan',
                'status' => 'published',
            ],
            [
                'judul' => 'Program Futsal Gratis untuk Anak-Anak Setiap Minggu',
                'slug' => 'program-futsal-gratis-untuk-anak-anak-setiap-minggu',
                'konten' => 'Damar Sport Center kembali mengadakan program futsal gratis untuk anak-anak RT 002 RW 017 setiap hari Minggu pagi.

Program ini dimulai pukul 06:30 WIB dan berakhir pukul 08:30 WIB. Kegiatan ini diikuti oleh puluhan anak-anak dengan antusias yang tinggi.

Manfaat program futsal gratis ini:
- Meningkatkan kesehatan dan kebugaran anak-anak
- Mengembangkan bakat dan minat anak di bidang olahraga
- Menjalin persahabatan antar anak-anak di lingkungan RT
- Mengisi waktu luang dengan kegiatan yang positif

Program ini dipandu oleh pelatih berpengalaman dan menggunakan fasilitas lapangan futsal yang telah disediakan. Orang tua yang ingin mendaftarkan anaknya dapat menghubungi pengurus RT atau datang langsung ke lapangan setiap hari Minggu pagi.

Mari dukung anak-anak kita untuk aktif berolahraga dan hidup sehat!',
                'excerpt' => 'Program futsal gratis untuk anak-anak setiap hari Minggu pagi di Damar Sport Center. Mari dukung anak-anak untuk aktif berolahraga!',
                'kategori' => 'Olahraga',
                'status' => 'published',
            ],
            [
                'judul' => 'Pengajian Rutin Setiap Jumat Malam di Masjid Al Hidayah',
                'slug' => 'pengajian-rutin-setiap-jumat-malam-di-masjid-al-hidayah',
                'konten' => 'Masjid Al Hidayah mengadakan pengajian rutin setiap hari Jumat malam pukul 19:00 WIB. Kegiatan ini diikuti oleh warga RT 002 RW 017 dan sekitarnya.

Pengajian ini membahas berbagai tema keislaman yang relevan dengan kehidupan sehari-hari. Ustadz yang mengisi pengajian adalah ustadz berpengalaman yang dapat memberikan pemahaman yang mudah dipahami.

Kegiatan pengajian rutin ini bertujuan untuk:
- Meningkatkan pemahaman agama warga
- Mempererat silaturahmi antar warga
- Menciptakan lingkungan yang religius
- Memberikan bimbingan spiritual kepada warga

Setelah pengajian, biasanya dilanjutkan dengan diskusi dan tanya jawab. Warga yang ingin mengikuti pengajian dapat datang langsung ke Masjid Al Hidayah setiap hari Jumat malam.

Mari kita tingkatkan keimanan dan ketakwaan kita dengan mengikuti pengajian rutin ini!',
                'excerpt' => 'Pengajian rutin setiap hari Jumat malam di Masjid Al Hidayah untuk meningkatkan pemahaman agama dan mempererat silaturahmi warga.',
                'kategori' => 'Keagamaan',
                'status' => 'published',
            ],
            [
                'judul' => 'Kegiatan Posyandu Bulanan untuk Balita dan Ibu Hamil',
                'slug' => 'kegiatan-posyandu-bulanan-untuk-balita-dan-ibu-hamil',
                'konten' => 'Posyandu RT 002 RW 017 mengadakan kegiatan rutin setiap bulan untuk memantau kesehatan balita dan ibu hamil.

Kegiatan Posyandu ini meliputi:
- Penimbangan berat badan balita
- Pengukuran tinggi badan balita
- Pemberian vitamin dan imunisasi
- Konsultasi kesehatan untuk ibu hamil
- Penyuluhan kesehatan keluarga

Kegiatan ini dilaksanakan di Balai Warga setiap bulan dengan jadwal yang telah ditentukan. Ibu-ibu yang memiliki balita atau sedang hamil sangat dianjurkan untuk mengikuti kegiatan ini.

Manfaat mengikuti Posyandu:
- Memantau pertumbuhan dan perkembangan anak
- Mencegah terjadinya gizi buruk
- Mendapatkan informasi kesehatan terbaru
- Mendapatkan pelayanan kesehatan gratis

Untuk informasi lebih lanjut, dapat menghubungi kader Posyandu atau pengurus RT.',
                'excerpt' => 'Kegiatan Posyandu bulanan untuk memantau kesehatan balita dan ibu hamil. Mari jaga kesehatan keluarga kita!',
                'kategori' => 'Kesehatan',
                'status' => 'published',
            ],
            [
                'judul' => 'Lomba 17 Agustus: Meriahkan HUT RI di Bukit Damar',
                'slug' => 'lomba-17-agustus-meriahkan-hut-ri-di-bukit-damar',
                'konten' => 'Dalam rangka memeriahkan Hari Ulang Tahun Republik Indonesia ke-80, RT 002 RW 017 mengadakan berbagai lomba yang diikuti oleh seluruh warga.

Lomba-lomba yang diadakan antara lain:
- Lomba balap karung untuk anak-anak
- Lomba makan kerupuk
- Lomba tarik tambang
- Lomba estafet kelereng
- Lomba memasukkan paku ke dalam botol

Kegiatan ini diadakan di lapangan Damar Park dan diikuti oleh warga dengan antusias yang tinggi. Hadiah menarik telah disiapkan untuk para pemenang.

Selain lomba, juga diadakan acara:
- Upacara bendera
- Pembagian hadiah
- Makan bersama
- Hiburan musik

Kegiatan ini bertujuan untuk:
- Memeriahkan HUT RI
- Meningkatkan semangat nasionalisme
- Mempererat kebersamaan warga
- Menciptakan suasana yang menyenangkan

Terima kasih kepada seluruh warga yang telah berpartisipasi dalam kegiatan ini. Semoga kegiatan serupa dapat diadakan kembali di tahun-tahun mendatang!',
                'excerpt' => 'Berbagai lomba diadakan untuk memeriahkan HUT RI ke-80. Warga RT 002 RW 017 antusias mengikuti kegiatan ini.',
                'kategori' => 'Kegiatan',
                'status' => 'published',
            ],
            [
                'judul' => 'Pembagian Sembako untuk Warga yang Membutuhkan',
                'slug' => 'pembagian-sembako-untuk-warga-yang-membutuhkan',
                'konten' => 'RT 002 RW 017 mengadakan program pembagian sembako untuk warga yang membutuhkan. Program ini merupakan bentuk kepedulian warga terhadap sesama.

Sembako yang dibagikan meliputi:
- Beras
- Minyak goreng
- Gula
- Telur
- Mie instan
- Bahan makanan pokok lainnya

Program ini diadakan setiap bulan dan diberikan kepada warga yang benar-benar membutuhkan. Pendataan warga yang berhak menerima sembako dilakukan oleh pengurus RT dengan transparan.

Program pembagian sembako ini bertujuan untuk:
- Membantu warga yang mengalami kesulitan ekonomi
- Meningkatkan kesejahteraan warga
- Mempererat rasa kebersamaan dan gotong royong
- Menciptakan lingkungan yang peduli terhadap sesama

Program ini didanai dari iuran warga dan sumbangan dari donatur. Warga yang ingin berkontribusi dapat menghubungi pengurus RT.

Mari kita saling membantu dan peduli terhadap sesama warga!',
                'excerpt' => 'Program pembagian sembako untuk warga yang membutuhkan sebagai bentuk kepedulian warga terhadap sesama.',
                'kategori' => 'Sosial',
                'status' => 'published',
            ],
        ];

        foreach ($blogs as $blogData) {
            Blog::create([
                'judul' => $blogData['judul'],
                'slug' => $blogData['slug'],
                'konten' => $blogData['konten'],
                'excerpt' => $blogData['excerpt'],
                'kategori' => $blogData['kategori'],
                'status' => $blogData['status'],
                'user_id' => $user->id,
                'views' => rand(10, 500),
            ]);
        }

        $this->command->info('Blogs seeded successfully!');
    }
}
