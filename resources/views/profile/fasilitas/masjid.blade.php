@extends('layouts.frontend')

@section('title', 'Masjid RT 002 RW 017 Bukit Damar - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Masjid Al Hidayah Bukit Damar</h1>
            <p class="lead">Pusat Kegiatan Keagamaan dan Pendidikan Islam</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <article class="article">
              <div class="post-img text-center mb-4">
                <img src="{{ asset('assets/img/features.png') }}" alt="Masjid RT 002 RW 017 Bukit Damar" class="img-fluid" style="max-width: 50%; height: auto; border-radius: 10px;">
              </div>

              <h2 class="title">Kegiatan Keagamaan dan Pendidikan di Masjid Al Hidayah Bukit Damar</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="{{ route('kepengurusan') }}">Pengurus RT 002 RW 017</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <time datetime="2024-01-01">Setiap Hari</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-calendar"></i>
                    <time datetime="2024-01-01">Kegiatan Rutin & Tahunan</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-tag"></i>
                    <a href="#">Keagamaan</a>
                  </li>
                </ul>
              </div>

              <div class="content">
                <p class="lead">
                  <strong>Masjid Al Hidayah Bukit Damar</strong> merupakan pusat kegiatan keagamaan dan pendidikan Islam bagi warga RT 002 RW 017. Masjid ini tidak hanya sebagai tempat ibadah, tetapi juga sebagai sarana untuk memperkuat ukhuwah islamiyah dan meningkatkan kualitas keimanan serta keilmuan warga.
                </p>

                <h3>Kegiatan Rutin Harian</h3>

                <h4>Shalat Wajib Berjamaah</h4>
                <p>
                  Masjid Al Hidayah Bukit Damar menyelenggarakan shalat wajib berjamaah setiap hari untuk lima waktu shalat (Subuh, Dzuhur, Ashar, Maghrib, dan Isya). Kegiatan ini diharapkan dapat meningkatkan kualitas ibadah warga dan mempererat tali silaturahmi antar jamaah.
                </p>

                <div class="alert alert-info" role="alert" style="background-color: #e7f3ff; border-left: 4px solid #0ea2e7; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #0ea2e7; margin-bottom: 0.5rem;">
                    <i class="bi bi-info-circle me-2"></i>Informasi Shalat Berjamaah
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Semua warga RT 002 RW 017 Bukit Damar diundang untuk berpartisipasi dalam shalat berjamaah di masjid. Shalat berjamaah memiliki keutamaan yang besar dalam Islam dan dapat memperkuat persaudaraan antar warga.
                  </p>
                </div>

                <h4>Shalat Jumat</h4>
                <p>
                  Setiap hari Jumat, masjid menyelenggarakan shalat Jumat dengan khotbah yang disampaikan oleh khatib. Kegiatan ini merupakan kewajiban bagi laki-laki muslim dan menjadi momen penting untuk memperkuat ukhuwah islamiyah serta mendapatkan nasihat dan bimbingan keagamaan.
                </p>

                <h3>Kegiatan Pendidikan</h3>

                <h4>Pengajian Majelis Ta'lim</h4>
                <p>
                  Majelis Ta'lim merupakan kegiatan pengajian rutin yang diadakan di masjid untuk meningkatkan pemahaman keagamaan warga. Kegiatan ini biasanya diadakan secara berkala dengan materi yang bervariasi, mulai dari kajian Al-Quran, Hadits, Fiqih, Akhlak, hingga tafsir Al-Quran.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Peserta:</strong> Terbuka untuk semua warga RT 002 RW 017</li>
                  <li><strong>Materi:</strong> Kajian keislaman yang disesuaikan dengan kebutuhan jamaah</li>
                  <li><strong>Manfaat:</strong> Meningkatkan pemahaman agama dan memperkuat keimanan</li>
                </ul>

                <h4>TPQ (Taman Pendidikan Al-Quran)</h4>
                <p>
                  TPQ merupakan program pendidikan Al-Quran untuk anak-anak di lingkungan RT 002 RW 017. Program ini bertujuan untuk mengajarkan membaca Al-Quran, menghafal surat-surat pendek, dan memahami dasar-dasar agama Islam sejak dini.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Sasaran:</strong> Anak-anak usia sekolah dasar dan menengah</li>
                  <li><strong>Materi:</strong> Membaca Al-Quran, menghafal surat pendek, doa-doa harian, dan dasar-dasar akhlak</li>
                  <li><strong>Tujuan:</strong> Menanamkan kecintaan terhadap Al-Quran dan agama Islam sejak dini</li>
                </ul>

                <h3>Kegiatan Bulan Ramadhan</h3>

                <h4>Shalat Tarawih</h4>
                <p>
                  Setiap bulan Ramadhan, masjid menyelenggarakan shalat tarawih berjamaah. Kegiatan ini menjadi momen penting untuk memperkuat ibadah di bulan suci dan mempererat kebersamaan antar warga. Shalat tarawih biasanya dilaksanakan setelah shalat Isya dengan jumlah rakaat yang sesuai dengan sunnah.
                </p>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Ramadhan di Masjid
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Selain shalat tarawih, masjid juga menyelenggarakan berbagai kegiatan lainnya di bulan Ramadhan seperti tadarus Al-Quran, buka puasa bersama, dan kajian keislaman yang lebih intensif.
                  </p>
                </div>

                <h3>Kegiatan Tahunan</h3>

                <h4>Idul Adha dan Kurban</h4>
                <p>
                  Setiap tahun, masjid al hidayah bukit damar menyelenggarakan perayaan Idul Adha dengan shalat Id berjamaah dan penyembelihan hewan kurban. Kegiatan kurban ini merupakan bentuk kepedulian sosial dan solidaritas antar warga, di mana daging kurban dibagikan kepada warga yang membutuhkan.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Shalat Idul Adha:</strong> Dilaksanakan di pagi hari dengan khotbah khusus</li>
                  <li><strong>Penyembelihan Kurban:</strong> Dikoordinir oleh panitia masjid</li>
                  <li><strong>Pembagian Daging:</strong> Daging kurban dibagikan secara merata kepada warga</li>
                  <li><strong>Manfaat:</strong> Memperkuat solidaritas sosial dan membantu warga yang membutuhkan</li>
                </ul>

                <h3>Fasilitas Masjid</h3>
                <p>
                  Masjid RT 002 RW 017 dilengkapi dengan berbagai fasilitas yang mendukung kegiatan keagamaan, antara lain:
                </p>
                <ul style="line-height: 2;">
                  <li>Ruang shalat yang luas dan nyaman</li>
                  <li>Tempat wudhu yang memadai</li>
                  <li>Ruang untuk kegiatan pengajian dan TPQ</li>
                  <li>Sound system untuk khotbah dan pengajian</li>
                  <li>Perpustakaan kecil untuk referensi keislaman</li>
                </ul>

                <h3>Dukungan Pengurus RT</h3>
                <p>
                  Semua kegiatan di masjid didukung penuh oleh pengurus RT 002 RW 017 Bukit Damar. Pengurus RT berkomitmen untuk terus mengembangkan dan meningkatkan kualitas kegiatan keagamaan di masjid sebagai bagian dari upaya meningkatkan kualitas spiritual warga.
                </p>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Ayo Berpartisipasi!
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Semua warga RT 002 RW 017 Bukit Damar diundang untuk aktif berpartisipasi dalam berbagai kegiatan di masjid. Mari bersama-sama kita jadikan masjid sebagai pusat kegiatan keagamaan yang dapat memperkuat ukhuwah islamiyah dan meningkatkan kualitas keimanan kita.
                  </p>
                </div>

                <h3>Kontak Informasi</h3>
                <p>
                  Untuk informasi lebih lanjut mengenai kegiatan di masjid atau jika ingin berpartisipasi dalam berbagai program, silakan menghubungi:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pengurus RT 002 RW 017 Bukit Damar</strong></li>
                  <li><strong>Takmir Masjid Al Hidayah Bukit Damar</strong></li>
                  <li>Lokasi: Masjid Al Hidayah Bukit Damar</li>
                </ul>

                <p class="mt-4">
                  Mari bersama-sama kita jadikan masjid sebagai tempat yang selalu ramai dengan kegiatan keagamaan dan pendidikan, sehingga dapat menjadi sumber berkah bagi seluruh warga RT 002 RW 017 Bukit Damar.
                </p>
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Keagamaan</a></li>
                  <li><a href="#">Masjid</a></li>
                  <li><a href="#">Pendidikan</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Masjid</a></li>
                  <li><a href="#">Shalat</a></li>
                  <li><a href="#">Pengajian</a></li>
                  <li><a href="#">TPQ</a></li>
                  <li><a href="#">Idul Adha</a></li>
                  <li><a href="#">Kurban</a></li>
                </ul>
              </div>

            </article>

          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-item recent-posts mb-4" data-aos="fade-up" data-aos-delay="100">
                <h3 class="sidebar-title mb-4" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #0ea2e7;">
                  <i class="bi bi-info-circle me-2" style="color: #0ea2e7;"></i>Informasi Terkait
                </h3>
                <div class="mt-3">
                  <a href="{{ url('/') }}#team" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #0ea2e7; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#0d6efd'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#0ea2e7'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #0ea2e7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-people-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Kepengurusan RT</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-building me-1"></i>Struktur Organisasi
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #0ea2e7;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ url('/') }}#visi-misi" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #28a745; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#218838'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#28a745'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-bullseye text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Visi & Misi RT</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-target me-1"></i>Tujuan Organisasi
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #28a745;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ url('/kontak') }}" style="text-decoration: none; display: block;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #ffc107; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#e0a800'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#ffc107'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-telephone-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Kontak Kami</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-chat-dots me-1"></i>Hubungi Pengurus
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #ffc107;"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="sidebar-item recent-posts mb-4" data-aos="fade-up" data-aos-delay="150">
                <h3 class="sidebar-title mb-4" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #28a745;">
                  <i class="bi bi-building me-2" style="color: #28a745;"></i>Fasilitas Lainnya
                </h3>
                <div class="mt-3">
                  <a href="{{ route('fasilitas.dsc') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #0ea2e7; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#0d6efd'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#0ea2e7'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #0ea2e7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-trophy text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Damar Sport Center</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-activity me-1"></i>Kegiatan Olahraga
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #0ea2e7;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ route('fasilitas.damar-park') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #17a2b8; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#138496'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#17a2b8'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #17a2b8; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-tree-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Damar Park</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-flower1 me-1"></i>Area Rekreasi
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #17a2b8;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ route('fasilitas.balai-warga') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #6f42c1; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#5a32a3'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#6f42c1'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #6f42c1; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-building-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Balai Warga</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-people me-1"></i>Kegiatan Masyarakat
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #6f42c1;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ route('fasilitas.meeting-point') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #dc3545; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#c82333'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#dc3545'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #dc3545; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-geo-alt-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Meeting Point</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-pin-map me-1"></i>Titik Kumpul
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #dc3545;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ route('fasilitas.keamanan') }}" style="text-decoration: none; display: block;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #ffc107; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#e0a800'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#ffc107'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-shield-check text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Keamanan</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-shield-fill me-1"></i>Sistem Keamanan
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #ffc107;"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="sidebar-item tags" data-aos="fade-up" data-aos-delay="200">
                <h3 class="sidebar-title mb-3" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #e9ecef;">Tags</h3>
                <ul class="mt-3" style="list-style: none; padding: 0; display: flex; flex-wrap: wrap; gap: 0.5rem;">
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Masjid</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Shalat</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Pengajian</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">TPQ</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Idul Adha</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Kurban</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Keagamaan</a></li>
                </ul>
              </div>
            </div>
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

@endsection

