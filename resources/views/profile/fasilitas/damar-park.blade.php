@extends('layouts.frontend')

@section('title', 'Damar Park - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Damar Park</h1>
            <p class="lead">Area Rekreasi dan Ruang Terbuka Hijau untuk Keluarga</p>
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
                <img src="{{ asset('assets/img/features.png') }}" alt="Damar Park Bukit Damar" class="img-fluid" style="max-width: 50%; height: auto; border-radius: 10px;">
              </div>

              <h2 class="title">Damar Park: Ruang Rekreasi dan Interaksi Sosial Warga</h2>

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
                    <time datetime="2024-01-01">Akses 24 Jam</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-tag"></i>
                    <a href="#">Rekreasi</a>
                  </li>
                </ul>
              </div>

              <div class="content">
                <p class="lead">
                  <strong>Damar Park</strong> merupakan area rekreasi dan ruang terbuka hijau yang menjadi salah satu fasilitas unggulan di lingkungan RT 002 RW 017 Bukit Damar. Taman ini dirancang sebagai tempat berkumpul, berolahraga ringan, dan berinteraksi sosial bagi seluruh warga, baik anak-anak, remaja, maupun orang dewasa.
                </p>

                <h3>Fasilitas yang Tersedia</h3>

                <h4>Area Bermain Anak</h4>
                <p>
                  Damar Park dilengkapi dengan area bermain yang aman dan nyaman untuk anak-anak. Area ini dilengkapi dengan berbagai permainan yang dapat mengembangkan motorik dan kreativitas anak-anak sambil tetap dalam pengawasan orang tua.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Wahana Permainan:</strong> Ayunan, perosotan, dan permainan edukatif lainnya</li>
                  <li><strong>Keamanan:</strong> Permukaan yang aman dan ramah anak</li>
                  <li><strong>Pengawasan:</strong> Area yang mudah diawasi oleh orang tua</li>
                </ul>

                <div class="alert alert-info" role="alert" style="background-color: #e7f3ff; border-left: 4px solid #17a2b8; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #17a2b8; margin-bottom: 0.5rem;">
                    <i class="bi bi-info-circle me-2"></i>Area Ramah Anak
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Semua peralatan bermain di Damar Park dirancang dengan standar keamanan yang tinggi. Orang tua dapat dengan tenang mengawasi anak-anak mereka bermain sambil menikmati suasana taman yang asri.
                  </p>
                </div>

                <h4>Jogging Track dan Area Olahraga</h4>
                <p>
                  Untuk warga yang gemar berolahraga, Damar Park menyediakan jogging track yang mengelilingi area taman. Track ini dapat digunakan untuk jogging, jalan santai, atau olahraga ringan lainnya di pagi atau sore hari.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Jogging Track:</strong> Jalur lari yang mengelilingi taman</li>
                  <li><strong>Area Olahraga:</strong> Tempat untuk senam pagi atau olahraga ringan</li>
                  <li><strong>Waktu Terbaik:</strong> Pagi hari (06:00-08:00) dan sore hari (16:00-18:00)</li>
                </ul>

                <h3>Kegiatan yang Dapat Dilakukan</h3>

                <h4>Rekreasi Keluarga</h4>
                <p>
                  Damar Park menjadi tempat favorit untuk kegiatan rekreasi keluarga. Warga dapat mengajak keluarga untuk piknik, bermain bersama, atau sekadar menghabiskan waktu berkualitas di akhir pekan.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Piknik Keluarga:</strong> Area yang cocok untuk piknik bersama keluarga</li>
                  <li><strong>Bermain Bersama:</strong> Tempat bermain yang aman untuk anak-anak</li>
                  <li><strong>Foto Bersama:</strong> Spot foto yang menarik dengan pemandangan hijau</li>
                </ul>

                <h4>Kegiatan Komunitas</h4>
                <p>
                  Selain untuk rekreasi pribadi, Damar Park juga sering digunakan untuk berbagai kegiatan komunitas warga, seperti senam bersama, kegiatan outbound, atau festival lingkungan.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Senam Bersama:</strong> Kegiatan senam pagi atau senam lansia</li>
                  <li><strong>Outbound:</strong> Kegiatan team building untuk warga</li>
                  <li><strong>Festival:</strong> Acara festival lingkungan atau hari besar nasional</li>
                </ul>

                <h3>Keunggulan Damar Park</h3>
                <p>
                  Damar Park memiliki beberapa keunggulan yang membuatnya menjadi pilihan utama warga untuk beraktivitas:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Lingkungan Asri:</strong> Taman yang hijau dan sejuk dengan pepohonan yang rindang</li>
                  <li><strong>Akses Mudah:</strong> Lokasi yang strategis dan mudah dijangkau dari seluruh area RT</li>
                  <li><strong>Fasilitas Lengkap:</strong> Dilengkapi dengan berbagai fasilitas pendukung</li>
                  <li><strong>Keamanan:</strong> Area yang aman dan terawat dengan baik</li>
                  <li><strong>Gratis:</strong> Akses gratis untuk semua warga RT 002 RW 017</li>
                </ul>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Manfaat untuk Warga
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Keberadaan Damar Park memberikan banyak manfaat bagi warga, mulai dari meningkatkan kualitas hidup, mempererat hubungan sosial antar warga, hingga menjadi tempat edukasi lingkungan bagi anak-anak.
                  </p>
                </div>

                <h3>Perawatan dan Kebersihan</h3>
                <p>
                  Pengurus RT 002 RW 017 berkomitmen untuk menjaga dan merawat Damar Park agar tetap bersih, aman, dan nyaman untuk digunakan. Perawatan rutin dilakukan untuk memastikan semua fasilitas dalam kondisi baik dan area taman tetap hijau dan asri.
                </p>

                <h3>Dukungan Pengurus RT</h3>
                <p>
                  Damar Park didukung penuh oleh pengurus RT 002 RW 017 Bukit Damar sebagai bagian dari upaya meningkatkan kualitas hidup warga. Pengurus RT terus berupaya mengembangkan dan memperbaiki fasilitas di taman untuk memberikan pengalaman terbaik bagi warga.
                </p>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Ayo Manfaatkan Damar Park!
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Semua warga RT 002 RW 017 Bukit Damar diundang untuk memanfaatkan Damar Park sebagai tempat rekreasi dan interaksi sosial. Mari kita jaga kebersihan dan keamanan taman bersama-sama agar dapat dinikmati oleh semua warga.
                  </p>
                </div>

                <h3>Kontak Informasi</h3>
                <p>
                  Untuk informasi lebih lanjut mengenai Damar Park atau jika ingin mengadakan kegiatan di taman, silakan menghubungi:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pengurus RT 002 RW 017 Bukit Damar</strong></li>
                  <li>Lokasi: Damar Park, RT 002 RW 017 Bukit Damar</li>
                  <li>Akses: 24 Jam (dengan memperhatikan ketertiban umum)</li>
                </ul>

                <p class="mt-4">
                  Mari bersama-sama kita jadikan Damar Park sebagai ruang publik yang nyaman, aman, dan bermanfaat bagi seluruh warga RT 002 RW 017 Bukit Damar!
                </p>
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Rekreasi</a></li>
                  <li><a href="#">Taman</a></li>
                  <li><a href="#">Fasilitas</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Damar Park</a></li>
                  <li><a href="#">Rekreasi</a></li>
                  <li><a href="#">Taman</a></li>
                  <li><a href="#">Olahraga</a></li>
                  <li><a href="#">Keluarga</a></li>
                  <li><a href="#">Komunitas</a></li>
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
                  <a href="{{ route('fasilitas.masjid') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #28a745; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#218838'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#28a745'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-house-door-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Masjid Al Hidayah</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-calendar-event me-1"></i>Kegiatan Keagamaan
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #28a745;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

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
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff'; this.style.borderColor='#17a2b8'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Damar Park</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff'; this.style.borderColor='#17a2b8'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Rekreasi</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff'; this.style.borderColor='#17a2b8'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Taman</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff'; this.style.borderColor='#17a2b8'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Olahraga</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff'; this.style.borderColor='#17a2b8'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Keluarga</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff'; this.style.borderColor='#17a2b8'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Komunitas</a></li>
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

