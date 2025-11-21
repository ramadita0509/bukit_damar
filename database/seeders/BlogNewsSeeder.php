<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogNewsSeeder extends Seeder
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
                'judul' => 'Bazar Murah di Balai Warga - 31 Desember 2025',
                'slug' => 'bazar-murah-di-balai-warga-31-desember-2025',
                'konten' => 'Dalam rangka menyambut Tahun Baru 2026, RT 002 RW 017 Bukit Damar akan mengadakan Bazar Murah di Balai Warga pada tanggal 31 Desember 2025.

📅 **Waktu dan Tempat:**
- Tanggal: Rabu, 31 Desember 2025
- Waktu: 08:00 - 17:00 WIB
- Lokasi: Balai Warga RT 002 RW 017 Bukit Damar

🛍️ **Barang yang Tersedia:**
- Pakaian dan fashion (dewasa & anak-anak)
- Perlengkapan rumah tangga
- Makanan dan minuman
- Aksesoris dan perhiasan
- Mainan anak-anak
- Buku dan alat tulis
- Dan berbagai kebutuhan lainnya

💰 **Keuntungan Bazar Murah:**
- Harga terjangkau dan nego
- Kualitas terjamin
- Berbagai pilihan barang
- Cocok untuk belanja kebutuhan akhir tahun

🎉 **Acara Tambahan:**
- Doorprize menarik setiap jam
- Hiburan musik
- Makanan dan minuman tersedia
- Area bermain untuk anak-anak

Bazar murah ini diadakan untuk memberikan kesempatan kepada warga untuk mendapatkan barang-barang berkualitas dengan harga yang terjangkau. Selain itu, bazar ini juga menjadi ajang silaturahmi antar warga sebelum memasuki tahun baru.

Kami mengundang seluruh warga RT 002 RW 017 dan sekitarnya untuk hadir dan meramaikan acara bazar murah ini. Mari kita sambut tahun baru dengan penuh suka cita!

Untuk informasi lebih lanjut, dapat menghubungi:
- Ketua RT: Fernando Sihombing
- Sekretaris RT: Beben
- Atau melalui WhatsApp grup RT

Jangan lewatkan kesempatan ini! Sampai jumpa di Bazar Murah Balai Warga! 🎊',
                'excerpt' => 'Bazar Murah di Balai Warga pada tanggal 31 Desember 2025. Berbagai barang dengan harga terjangkau siap untuk dibeli!',
                'kategori' => 'Kegiatan',
                'status' => 'published',
            ],
            [
                'judul' => 'Pertandingan Futsal U-12 Se RW 17 Desa Singajaya',
                'slug' => 'pertandingan-futsal-u-12-se-rw-17-desa-singajaya',
                'konten' => 'RT 002 RW 017 Bukit Damar dengan bangga mengumumkan akan mengikuti Pertandingan Futsal U-12 se RW 17 Desa Singajaya. Acara ini merupakan kompetisi futsal antar RT di wilayah RW 17.

⚽ **Informasi Pertandingan:**
- Kategori: Usia 12 tahun ke bawah (U-12)
- Format: Turnamen antar RT se RW 17
- Lokasi: Lapangan Futsal RW 17 Desa Singajaya
- Waktu: Akan diumumkan lebih lanjut

👦 **Tim RT 002 RW 017:**
Tim futsal U-12 RT 002 RW 017 telah dibentuk dan sedang dalam tahap persiapan. Para pemain yang terpilih adalah anak-anak berbakat dari lingkungan RT yang telah mengikuti seleksi.

📋 **Persiapan Tim:**
- Latihan rutin setiap hari Minggu pagi di Damar Sport Center
- Pelatihan teknik dan strategi permainan
- Peningkatan fisik dan stamina
- Pembentukan kerja sama tim

🏆 **Tujuan:**
- Mengembangkan bakat anak-anak di bidang olahraga
- Meningkatkan prestasi RT 002 RW 017
- Menjalin persahabatan dengan RT lain
- Menumbuhkan semangat sportivitas

💪 **Dukungan Warga:**
Kami mengajak seluruh warga RT 002 RW 017 untuk memberikan dukungan kepada tim futsal U-12 kita. Dukungan warga sangat berarti untuk meningkatkan semangat para pemain.

📢 **Cara Mendukung:**
- Hadir saat pertandingan berlangsung
- Memberikan semangat dan dukungan moral
- Berdoa untuk kesuksesan tim
- Berbagi informasi tentang pertandingan

Mari kita dukung tim futsal U-12 RT 002 RW 017 untuk meraih prestasi terbaik! Semoga tim kita dapat membawa pulang piala kemenangan dan mengharumkan nama RT 002 RW 017 Bukit Damar.

Untuk informasi lebih lanjut tentang jadwal pertandingan dan perkembangan tim, dapat menghubungi:
- Koordinator Olahraga: Danu
- Atau melalui WhatsApp grup RT

Ayo dukung tim kita! Go RT 002 RW 017! ⚽🔥',
                'excerpt' => 'RT 002 RW 017 akan mengikuti Pertandingan Futsal U-12 se RW 17. Mari dukung tim kita untuk meraih prestasi terbaik!',
                'kategori' => 'Olahraga',
                'status' => 'published',
            ],
            [
                'judul' => 'Update Perbaikan Longsor di Blok CF 20',
                'slug' => 'update-perbaikan-longsor-di-blok-cf-20',
                'konten' => 'Kami ingin memberikan update terkini mengenai proses perbaikan longsor yang terjadi di Blok CF 20, RT 002 RW 017 Bukit Damar.

📍 **Lokasi:**
Blok CF 20, RT 002 RW 017 Bukit Damar, Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor.

🔧 **Status Perbaikan:**
Perbaikan longsor di Blok CF 20 saat ini sedang dalam tahap pengerjaan. Tim perbaikan dari pemerintah daerah dan kontraktor yang ditunjuk telah melakukan beberapa langkah perbaikan:

1. **Tahap 1 - Stabilisasi (Selesai):**
   - Pembersihan material longsor
   - Stabilisasi tanah dengan geotextile
   - Pemasangan bronjong untuk mencegah longsor lanjutan

2. **Tahap 2 - Perbaikan Struktur (Sedang Berlangsung):**
   - Perbaikan dinding penahan tanah
   - Pengerasan jalan yang terdampak
   - Perbaikan saluran drainase

3. **Tahap 3 - Finishing (Akan Dilakukan):**
   - Pengecatan dan finishing
   - Penanaman vegetasi untuk stabilisasi
   - Pemasangan rambu peringatan

⚠️ **Peringatan untuk Warga:**
- Warga diharapkan tetap waspada saat melintas di area perbaikan
- Mengikuti rambu-rambu yang telah dipasang
- Tidak membuang sampah sembarangan di area perbaikan
- Melaporkan jika ada kondisi yang mencurigakan

📞 **Kontak Darurat:**
Jika terjadi keadaan darurat atau kondisi yang membahayakan, segera hubungi:
- Ketua RT: Fernando Sihombing
- Koordinator Keamanan: Danu
- Atau hubungi 112 (Emergency Call)

📊 **Progress Perbaikan:**
- Progress saat ini: 60% selesai
- Estimasi selesai: 2 minggu ke depan
- Kondisi jalan: Dapat dilalui dengan hati-hati

Kami akan terus memberikan update perkembangan perbaikan longsor di Blok CF 20. Warga diharapkan untuk tetap sabar dan mengikuti arahan dari tim perbaikan.

Terima kasih atas pengertian dan kerjasama warga selama proses perbaikan berlangsung. Semoga perbaikan dapat segera selesai dan kondisi kembali normal.

Untuk informasi lebih lanjut, dapat menghubungi pengurus RT atau melalui WhatsApp grup RT.',
                'excerpt' => 'Update terkini mengenai proses perbaikan longsor di Blok CF 20. Progress perbaikan saat ini mencapai 60% dan diperkirakan selesai dalam 2 minggu.',
                'kategori' => 'Infrastruktur',
                'status' => 'published',
            ],
            [
                'judul' => 'Family Gathering RT 002 RW 017 - 1 Januari 2026',
                'slug' => 'family-gathering-rt-002-rw-017-1-januari-2026',
                'konten' => 'Menyambut Tahun Baru 2026, RT 002 RW 017 Bukit Damar akan mengadakan acara Family Gathering yang meriah dan penuh kebersamaan.

🎉 **Informasi Acara:**
- Tanggal: Kamis, 1 Januari 2026
- Waktu: 15:00 - 21:00 WIB
- Lokasi: Damar Park, RT 002 RW 017 Bukit Damar
- Dress Code: Bebas, namun diutamakan menggunakan pakaian yang rapi

🎊 **Rangkaian Acara:**
1. **15:00 - 16:00 WIB: Registrasi & Welcome**
   - Registrasi peserta
   - Welcome drink
   - Ice breaking

2. **16:00 - 17:30 WIB: Games & Fun Activities**
   - Lomba keluarga
   - Games interaktif
   - Photo booth

3. **17:30 - 19:00 WIB: Makan Malam Bersama**
   - Buffet dinner
   - Makan bersama seluruh warga
   - Acara ramah tamah

4. **19:00 - 21:00 WIB: Hiburan & Penutup**
   - Live music
   - Penampilan warga
   - Doorprize dan hadiah
   - Kembang api (jika memungkinkan)

🎁 **Hadiah & Doorprize:**
- Hadiah untuk pemenang lomba
- Doorprize menarik setiap sesi
- Goodie bag untuk seluruh peserta
- Sertifikat partisipasi

👨‍👩‍👧‍👦 **Kegiatan untuk Keluarga:**
- Area bermain untuk anak-anak
- Games yang dapat diikuti seluruh keluarga
- Photo session keluarga
- Bazaar kecil makanan dan minuman

💰 **Kontribusi:**
- Kontribusi per keluarga: Rp 50.000
- Kontribusi per orang: Rp 25.000
- Kontribusi dapat dibayarkan kepada:
  - Bendahara RT: Sugeng
  - Atau melalui transfer ke rekening yang akan diinformasikan

📝 **Pendaftaran:**
Pendaftaran dapat dilakukan melalui:
- WhatsApp grup RT
- Menghubungi Sekretaris RT: Beben
- Atau langsung ke pengurus RT

⏰ **Batas Pendaftaran:**
Pendaftaran ditutup pada tanggal 30 Desember 2025 pukul 20:00 WIB.

🎯 **Tujuan Acara:**
- Mempererat silaturahmi antar warga
- Menyambut tahun baru dengan kebersamaan
- Menciptakan kenangan indah bersama keluarga
- Meningkatkan rasa kebersamaan di lingkungan RT

Kami mengundang seluruh warga RT 002 RW 017 untuk hadir dan meramaikan acara Family Gathering ini. Acara ini merupakan momen yang tepat untuk berkumpul bersama keluarga dan tetangga dalam suasana yang hangat dan menyenangkan.

Mari kita sambut Tahun Baru 2026 dengan penuh kebahagiaan dan kebersamaan! Jangan lewatkan acara spesial ini!

Untuk informasi lebih lanjut, dapat menghubungi:
- Ketua RT: Fernando Sihombing
- Sekretaris RT: Beben
- Humas RT: Nelson
- Atau melalui WhatsApp grup RT

Sampai jumpa di Family Gathering! 🎊🎉',
                'excerpt' => 'Family Gathering RT 002 RW 017 pada tanggal 1 Januari 2026 di Damar Park. Acara penuh kebersamaan untuk menyambut tahun baru!',
                'kategori' => 'Kegiatan',
                'status' => 'published',
            ],
            [
                'judul' => 'Pengajian Maulid Nabi di Masjid Al Hidayah - 2 Februari 2026',
                'slug' => 'pengajian-maulid-nabi-di-masjid-al-hidayah-2-februari-2026',
                'konten' => 'Masjid Al Hidayah RT 002 RW 017 Bukit Damar akan mengadakan acara Pengajian Maulid Nabi Muhammad SAW dalam rangka memperingati kelahiran Nabi Muhammad SAW.

🕌 **Informasi Acara:**
- Tanggal: Senin, 2 Februari 2026
- Waktu: 19:00 - 21:30 WIB
- Lokasi: Masjid Al Hidayah, RT 002 RW 017 Bukit Damar
- Tema: "Meneladani Akhlak Mulia Rasulullah SAW"

📖 **Rangkaian Acara:**
1. **19:00 - 19:15 WIB: Pembukaan**
   - Pembacaan Al-Quran
   - Sambutan dari Ketua RT
   - Doa pembuka

2. **19:15 - 20:30 WIB: Pengajian**
   - Ceramah tentang Maulid Nabi
   - Kisah perjalanan hidup Rasulullah SAW
   - Teladan akhlak mulia Nabi Muhammad SAW
   - Tanya jawab

3. **20:30 - 21:00 WIB: Sholawat & Doa**
   - Pembacaan sholawat Nabi
   - Doa bersama
   - Doa untuk keselamatan umat

4. **21:00 - 21:30 WIB: Makan Malam Bersama**
   - Makan malam bersama
   - Silaturahmi
   - Penutup

👨‍🏫 **Pembicara:**
Ustadz yang akan mengisi pengajian adalah ustadz berpengalaman yang akan memberikan pemahaman yang mendalam tentang Maulid Nabi dan teladan Rasulullah SAW.

📚 **Materi Pengajian:**
- Sejarah kelahiran Nabi Muhammad SAW
- Perjalanan hidup Rasulullah SAW
- Akhlak mulia yang dapat diteladani
- Pentingnya mengikuti sunnah Nabi
- Hikmah dari peringatan Maulid Nabi

🎁 **Acara Tambahan:**
- Pembagian takjil untuk berbuka (jika bertepatan dengan waktu berbuka)
- Doorprize untuk peserta
- Buku-buku keislaman (jika tersedia)

👥 **Peserta:**
Acara ini terbuka untuk:
- Seluruh warga RT 002 RW 017
- Warga RW 17 dan sekitarnya
- Semua kalangan (laki-laki, perempuan, anak-anak)

📋 **Persiapan:**
- Peserta diharapkan datang tepat waktu
- Membawa Al-Quran (jika ada)
- Menggunakan pakaian yang sopan dan menutup aurat
- Membawa sajadah untuk sholat

💰 **Kontribusi:**
Kontribusi sukarela untuk acara dapat diberikan kepada:
- Pengurus Masjid Al Hidayah
- Atau melalui kotak infaq yang tersedia

🎯 **Tujuan Acara:**
- Memperingati kelahiran Nabi Muhammad SAW
- Meningkatkan kecintaan kepada Rasulullah SAW
- Meneladani akhlak mulia Nabi
- Mempererat silaturahmi antar warga
- Meningkatkan keimanan dan ketakwaan

Kami mengundang seluruh warga untuk hadir dan mengikuti acara Pengajian Maulid Nabi ini. Acara ini merupakan momen yang tepat untuk meningkatkan pemahaman kita tentang kehidupan dan ajaran Rasulullah SAW.

Mari kita peringati Maulid Nabi dengan penuh khidmat dan semangat untuk meneladani akhlak mulia Rasulullah SAW.

Untuk informasi lebih lanjut, dapat menghubungi:
- Pengurus Masjid Al Hidayah
- Ketua RT: Fernando Sihombing
- Koordinator Kerohanian: Andi M Sadli
- Atau melalui WhatsApp grup RT

Semoga acara ini dapat memberikan manfaat dan barokah bagi kita semua. Aamiin. 🤲',
                'excerpt' => 'Pengajian Maulid Nabi Muhammad SAW di Masjid Al Hidayah pada tanggal 2 Februari 2026. Mari kita peringati dengan penuh khidmat dan meneladani akhlak mulia Rasulullah SAW.',
                'kategori' => 'Keagamaan',
                'status' => 'published',
            ],
        ];

        foreach ($blogs as $blogData) {
            // Check if blog already exists
            $existingBlog = Blog::where('slug', $blogData['slug'])->first();

            if (!$existingBlog) {
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
            } else {
                // Update existing blog
                $existingBlog->update([
                    'judul' => $blogData['judul'],
                    'konten' => $blogData['konten'],
                    'excerpt' => $blogData['excerpt'],
                    'kategori' => $blogData['kategori'],
                    'status' => $blogData['status'],
                ]);
            }
        }

        $this->command->info('Blog news seeded successfully!');
    }
}
