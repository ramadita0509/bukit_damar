@extends('layouts.frontend')

@section('title', 'Tentang Bukit Damar - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Tentang Bukit Damar</h1>
            <p class="lead">Mengenal Lebih Dekat Cluster Bukit Damar Citra Indah City</p>
          </div>
        </div>
      </div>
    </section>

    @push('styles')
    <style>
      /* Override hero section untuk halaman - setengah layar dengan background */
      #hero.hero {
        min-height: 50vh !important;
        padding: 60px 0 60px 0 !important;
        display: flex !important;
        align-items: center !important;
      }

      #hero.hero h1 {
        font-size: 36px !important;
        line-height: 44px !important;
        margin-bottom: 15px !important;
      }

      #hero.hero p.lead {
        font-size: 18px !important;
        margin-bottom: 0 !important;
      }
    </style>
    @endpush

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Profil Umum -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="content" data-aos="fade-up">
              <h2 class="mb-4" style="color: #0ea2e7;">
                <i class="bi bi-info-circle me-2"></i>Profil Bukit Damar
              </h2>
              <p class="lead" style="font-size: 1.1rem; line-height: 1.8; color: #2c3e50;">
                <strong>Cluster Bukit Damar Citra Indah City</strong> merupakan kawasan perumahan yang terletak di wilayah strategis dengan lingkungan yang asri dan nyaman. Sebagai bagian dari RT 002 RW 017, Bukit Damar telah berkembang menjadi komunitas yang harmonis dengan berbagai fasilitas dan kegiatan yang mendukung kesejahteraan warga.
              </p>
              <p style="line-height: 1.8; color: #555;">
                Kawasan ini didesain dengan konsep hunian yang modern namun tetap mempertahankan nilai-nilai kekeluargaan dan gotong royong. Warga Bukit Damar dikenal dengan semangat kebersamaan yang tinggi dalam berbagai kegiatan kemasyarakatan, mulai dari kegiatan keagamaan, olahraga, hingga kegiatan sosial lainnya.
              </p>
            </div>
          </div>
        </div>

        <!-- Letak Geografis -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="content" data-aos="fade-up" data-aos-delay="100">
              <h2 class="mb-4" style="color: #0ea2e7;">
                <i class="bi bi-geo-alt-fill me-2"></i>Letak Geografis
              </h2>
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="info-box p-4" style="background: #f8f9fa; border-radius: 10px; border-left: 4px solid #0ea2e7; height: 100%;">
                    <h4 style="color: #2c3e50; margin-bottom: 1rem;">
                      <i class="bi bi-building me-2" style="color: #0ea2e7;"></i>Alamat Lengkap
                    </h4>
                    <ul style="list-style: none; padding: 0; line-height: 2;">
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>Cluster:</strong> Bukit Damar Citra Indah City</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>RT/RW:</strong> RT 002 RW 017</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>Desa:</strong> Singajaya</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>Kecamatan:</strong> Jonggol</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>Kabupaten:</strong> Bogor</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>Provinsi:</strong> Jawa Barat</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i><strong>Kode Pos:</strong> 16830</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="info-box p-4" style="background: #f8f9fa; border-radius: 10px; border-left: 4px solid #28a745; height: 100%;">
                    <h4 style="color: #2c3e50; margin-bottom: 1rem;">
                      <i class="bi bi-geo me-2" style="color: #28a745;"></i>Karakteristik Wilayah
                    </h4>
                    <p style="line-height: 1.8; color: #555; margin-bottom: 1rem;">
                      Bukit Damar terletak di kawasan yang memiliki aksesibilitas yang baik dengan lingkungan yang asri dan udara yang sejuk. Kawasan ini dikelilingi oleh pemandangan alam yang indah, menjadikannya tempat tinggal yang nyaman dan ideal untuk keluarga.
                    </p>
                    <ul style="list-style: none; padding: 0; line-height: 2;">
                      <li><i class="bi bi-tree me-2" style="color: #28a745;"></i>Lingkungan asri dan hijau</li>
                      <li><i class="bi bi-wind me-2" style="color: #28a745;"></i>Udara sejuk dan segar</li>
                      <li><i class="bi bi-geo-alt me-2" style="color: #28a745;"></i>Aksesibilitas yang mudah</li>
                      <li><i class="bi bi-shield-check me-2" style="color: #28a745;"></i>Kawasan aman dan tertib</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Kegiatan -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="content" data-aos="fade-up" data-aos-delay="100">
              <h2 class="mb-4" style="color: #0ea2e7;">
                <i class="bi bi-calendar-event me-2"></i>Kegiatan Masyarakat
              </h2>
              <p style="line-height: 1.8; color: #555; margin-bottom: 2rem;">
                Bukit Damar memiliki berbagai kegiatan rutin yang diadakan untuk mempererat tali silaturahmi antar warga dan meningkatkan kualitas hidup masyarakat. Berikut adalah beberapa kegiatan yang rutin dilaksanakan:
              </p>

              <div class="row gy-4">
                <!-- Kegiatan Keagamaan -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="activity-card p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #28a745; height: 100%; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div class="d-flex align-items-start mb-3">
                      <div class="flex-shrink-0 me-3">
                        <div style="width: 50px; height: 50px; background: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                          <i class="bi bi-house-door-fill text-white" style="font-size: 1.5rem;"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Kegiatan Keagamaan</h4>
                        <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Masjid Al Hidayah</p>
                      </div>
                    </div>
                    <ul style="list-style: none; padding: 0; line-height: 2; color: #555;">
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i>Shalat Wajib Berjamaah (5 waktu)</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i>Shalat Jumat</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i>Pengajian Majelis Ta'lim</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i>TPQ (Taman Pendidikan Al-Quran)</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i>Shalat Tarawih (Ramadhan)</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #28a745;"></i>Kegiatan Idul Adha & Kurban</li>
                    </ul>
                    <a href="{{ route('fasilitas.masjid') }}" class="btn btn-sm mt-3" style="background: #28a745; color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px; text-decoration: none;">
                      Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                  </div>
                </div>

                <!-- Kegiatan Olahraga -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="activity-card p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #0ea2e7; height: 100%; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div class="d-flex align-items-start mb-3">
                      <div class="flex-shrink-0 me-3">
                        <div style="width: 50px; height: 50px; background: #0ea2e7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                          <i class="bi bi-trophy text-white" style="font-size: 1.5rem;"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Kegiatan Olahraga</h4>
                        <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Damar Sport Center</p>
                      </div>
                    </div>
                    <ul style="list-style: none; padding: 0; line-height: 2; color: #555;">
                      <li><i class="bi bi-check-circle me-2" style="color: #0ea2e7;"></i>Program Futsal Anak-Anak (Gratis)</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #0ea2e7;"></i>Jadwal: Setiap Minggu, 06:30-08:30 WIB</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #0ea2e7;"></i>Pengembangan minat dan bakat olahraga</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #0ea2e7;"></i>Meningkatkan kebugaran dan kesehatan</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #0ea2e7;"></i>Membangun sportivitas dan kerja sama tim</li>
                    </ul>
                    <a href="{{ route('fasilitas.dsc') }}" class="btn btn-sm mt-3" style="background: #0ea2e7; color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px; text-decoration: none;">
                      Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                  </div>
                </div>

                <!-- Kegiatan Sosial -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="activity-card p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #ffc107; height: 100%; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div class="d-flex align-items-start mb-3">
                      <div class="flex-shrink-0 me-3">
                        <div style="width: 50px; height: 50px; background: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                          <i class="bi bi-people-fill text-white" style="font-size: 1.5rem;"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Kegiatan Sosial</h4>
                        <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Komunitas Warga</p>
                      </div>
                    </div>
                    <ul style="list-style: none; padding: 0; line-height: 2; color: #555;">
                      <li><i class="bi bi-check-circle me-2" style="color: #ffc107;"></i>Gotong Royong Lingkungan</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #ffc107;"></i>Kegiatan Pemberdayaan Masyarakat</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #ffc107;"></i>Kegiatan Hari Besar Nasional</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #ffc107;"></i>Kegiatan Kesehatan Masyarakat</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #ffc107;"></i>Kegiatan Pendidikan dan Pelatihan</li>
                    </ul>
                  </div>
                </div>

                <!-- Kegiatan Rekreasi -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="activity-card p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #17a2b8; height: 100%; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div class="d-flex align-items-start mb-3">
                      <div class="flex-shrink-0 me-3">
                        <div style="width: 50px; height: 50px; background: #17a2b8; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                          <i class="bi bi-tree-fill text-white" style="font-size: 1.5rem;"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Kegiatan Rekreasi</h4>
                        <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Damar Park</p>
                      </div>
                    </div>
                    <ul style="list-style: none; padding: 0; line-height: 2; color: #555;">
                      <li><i class="bi bi-check-circle me-2" style="color: #17a2b8;"></i>Area Rekreasi Keluarga</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #17a2b8;"></i>Kegiatan Outbound</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #17a2b8;"></i>Kegiatan Piknik Bersama</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #17a2b8;"></i>Kegiatan Seni dan Budaya</li>
                      <li><i class="bi bi-check-circle me-2" style="color: #17a2b8;"></i>Kegiatan Festival Lingkungan</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Fasilitas -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="content" data-aos="fade-up" data-aos-delay="100">
              <h2 class="mb-4" style="color: #0ea2e7;">
                <i class="bi bi-building me-2"></i>Fasilitas yang Tersedia
              </h2>
              <p style="line-height: 1.8; color: #555; margin-bottom: 2rem;">
                Bukit Damar dilengkapi dengan berbagai fasilitas yang mendukung aktivitas dan kesejahteraan warga. Fasilitas-fasilitas ini dikelola dengan baik untuk memberikan kenyamanan maksimal bagi seluruh warga.
              </p>

              <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <a href="{{ route('fasilitas.masjid') }}" style="text-decoration: none; color: inherit;">
                    <div class="facility-card p-4 text-center" style="background: #f8f9fa; border-radius: 10px; height: 100%; transition: all 0.3s; border: 2px solid transparent;" onmouseover="this.style.borderColor='#28a745'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <div style="width: 70px; height: 70px; background: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="bi bi-house-door-fill text-white" style="font-size: 2rem;"></i>
                      </div>
                      <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Masjid Al Hidayah</h4>
                      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Pusat kegiatan keagamaan dan pendidikan Islam untuk warga RT 002 RW 017.</p>
                    </div>
                  </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <a href="{{ route('fasilitas.dsc') }}" style="text-decoration: none; color: inherit;">
                    <div class="facility-card p-4 text-center" style="background: #f8f9fa; border-radius: 10px; height: 100%; transition: all 0.3s; border: 2px solid transparent;" onmouseover="this.style.borderColor='#0ea2e7'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <div style="width: 70px; height: 70px; background: #0ea2e7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="bi bi-trophy text-white" style="font-size: 2rem;"></i>
                      </div>
                      <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Damar Sport Center</h4>
                      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Lapangan futsal untuk kegiatan olahraga, khususnya program futsal anak-anak gratis.</p>
                    </div>
                  </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <a href="{{ route('fasilitas.damar-park') }}" style="text-decoration: none; color: inherit;">
                    <div class="facility-card p-4 text-center" style="background: #f8f9fa; border-radius: 10px; height: 100%; transition: all 0.3s; border: 2px solid transparent;" onmouseover="this.style.borderColor='#17a2b8'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <div style="width: 70px; height: 70px; background: #17a2b8; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="bi bi-tree-fill text-white" style="font-size: 2rem;"></i>
                      </div>
                      <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Damar Park</h4>
                      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Area rekreasi dan ruang terbuka hijau untuk kegiatan keluarga dan masyarakat.</p>
                    </div>
                  </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <a href="{{ route('fasilitas.balai-warga') }}" style="text-decoration: none; color: inherit;">
                    <div class="facility-card p-4 text-center" style="background: #f8f9fa; border-radius: 10px; height: 100%; transition: all 0.3s; border: 2px solid transparent;" onmouseover="this.style.borderColor='#6f42c1'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <div style="width: 70px; height: 70px; background: #6f42c1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="bi bi-building-fill text-white" style="font-size: 2rem;"></i>
                      </div>
                      <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Balai Warga</h4>
                      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Tempat pertemuan dan kegiatan kemasyarakatan untuk warga RT 002 RW 017.</p>
                    </div>
                  </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <a href="{{ route('fasilitas.meeting-point') }}" style="text-decoration: none; color: inherit;">
                    <div class="facility-card p-4 text-center" style="background: #f8f9fa; border-radius: 10px; height: 100%; transition: all 0.3s; border: 2px solid transparent;" onmouseover="this.style.borderColor='#dc3545'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <div style="width: 70px; height: 70px; background: #dc3545; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="bi bi-geo-alt-fill text-white" style="font-size: 2rem;"></i>
                      </div>
                      <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Meeting Point</h4>
                      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Titik kumpul untuk berbagai kegiatan dan koordinasi warga.</p>
                    </div>
                  </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                  <a href="{{ route('fasilitas.keamanan') }}" style="text-decoration: none; color: inherit;">
                    <div class="facility-card p-4 text-center" style="background: #f8f9fa; border-radius: 10px; height: 100%; transition: all 0.3s; border: 2px solid transparent;" onmouseover="this.style.borderColor='#ffc107'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <div style="width: 70px; height: 70px; background: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="bi bi-shield-check text-white" style="font-size: 2rem;"></i>
                      </div>
                      <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Keamanan</h4>
                      <p style="color: #6c757d; font-size: 0.9rem; margin-bottom: 0;">Sistem keamanan yang terintegrasi untuk kenyamanan dan keamanan warga.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Visi Misi -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="content" data-aos="fade-up" data-aos-delay="100">
              <h2 class="mb-4" style="color: #0ea2e7;">
                <i class="bi bi-bullseye me-2"></i>Visi & Misi RT 002 RW 017
              </h2>

              <div class="row mb-4">
                <div class="col-lg-12">
                  <div class="visi-box p-4 mb-4" style="background: linear-gradient(135deg, #e7f3ff 0%, #d0e7ff 100%); border-radius: 10px; border-left: 4px solid #0ea2e7;">
                    <h3 style="color: #0ea2e7; margin-bottom: 1rem;">
                      <i class="bi bi-bullseye me-2"></i>Visi
                    </h3>
                    <p class="lead mb-2" style="font-weight: 600; color: #2c3e50; font-size: 1.1rem;">
                      Terwujudnya lingkungan RT yang rukun, aman, tertib, dan sejahtera.
                    </p>
                    <p style="color: #555; margin-bottom: 0;">
                      Mewujudkan lingkungan RT yang harmonis dan nyaman bagi seluruh warga.
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <h3 style="color: #2c3e50; margin-bottom: 1.5rem;">
                    <i class="bi bi-list-check me-2" style="color: #0ea2e7;"></i>Misi
                  </h3>
                  <div class="row gy-3">
                    <div class="col-md-6">
                      <div class="misi-item d-flex align-items-start p-3" style="background: #f8f9fa; border-radius: 8px; border-left: 3px solid #0ea2e7;">
                        <i class="bi bi-people-fill me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                        <div>
                          <h5 style="color: #2c3e50; margin-bottom: 0.25rem;">Menjaga Kerukunan</h5>
                          <p style="color: #666; font-size: 0.9rem; margin-bottom: 0;">Menjalin kerukunan antarwarga, umat beragama, dan bernegara.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="misi-item d-flex align-items-start p-3" style="background: #f8f9fa; border-radius: 8px; border-left: 3px solid #28a745;">
                        <i class="bi bi-shield-check me-3" style="color: #28a745; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                        <div>
                          <h5 style="color: #2c3e50; margin-bottom: 0.25rem;">Menjaga Keamanan</h5>
                          <p style="color: #666; font-size: 0.9rem; margin-bottom: 0;">Menjaga keamanan dan ketertiban lingkungan RT.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="misi-item d-flex align-items-start p-3" style="background: #f8f9fa; border-radius: 8px; border-left: 3px solid #ffc107;">
                        <i class="bi bi-hand-thumbs-up-fill me-3" style="color: #ffc107; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                        <div>
                          <h5 style="color: #2c3e50; margin-bottom: 0.25rem;">Pelayanan Publik</h5>
                          <p style="color: #666; font-size: 0.9rem; margin-bottom: 0;">Mewujudkan pelayanan kepada masyarakat yang jujur dan transparan.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="misi-item d-flex align-items-start p-3" style="background: #f8f9fa; border-radius: 8px; border-left: 3px solid #17a2b8;">
                        <i class="bi bi-graph-up-arrow me-3" style="color: #17a2b8; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                        <div>
                          <h5 style="color: #2c3e50; margin-bottom: 0.25rem;">Peningkatan Kesejahteraan</h5>
                          <p style="color: #666; font-size: 0.9rem; margin-bottom: 0;">Berupaya meningkatkan kesejahteraan warga melalui program-program yang relevan.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Informasi Kontak -->
        <div class="row">
          <div class="col-lg-12">
            <div class="content" data-aos="fade-up" data-aos-delay="100">
              <div class="alert alert-info" role="alert" style="background: linear-gradient(135deg, #e7f3ff 0%, #d0e7ff 100%); border-left: 4px solid #0ea2e7; padding: 2rem; border-radius: 10px;">
                <h4 style="color: #0ea2e7; margin-bottom: 1rem;">
                  <i class="bi bi-info-circle me-2"></i>Informasi Kontak
                </h4>
                <p style="color: #2c3e50; margin-bottom: 1rem;">
                  Untuk informasi lebih lanjut tentang Bukit Damar atau jika Anda ingin berpartisipasi dalam berbagai kegiatan, silakan menghubungi:
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <p style="color: #555; margin-bottom: 0.5rem;">
                      <i class="bi bi-people-fill me-2" style="color: #0ea2e7;"></i><strong>Pengurus RT 002 RW 017 Bukit Damar</strong>
                    </p>
                    <p style="color: #555; margin-bottom: 0.5rem;">
                      <i class="bi bi-geo-alt me-2" style="color: #0ea2e7;"></i>Cluster Bukit Damar Citra Indah City
                    </p>
                    <p style="color: #555; margin-bottom: 0;">
                      <i class="bi bi-geo me-2" style="color: #0ea2e7;"></i>Desa Singajaya, Kec. Jonggol, Kab. Bogor
                    </p>
                  </div>
                  <div class="col-md-6 text-md-end">
                    <a href="{{ url('/kontak') }}" class="btn" style="background: #0ea2e7; color: white; border: none; padding: 0.75rem 2rem; border-radius: 5px; text-decoration: none; display: inline-block;">
                      <i class="bi bi-telephone me-2"></i>Hubungi Kami
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

