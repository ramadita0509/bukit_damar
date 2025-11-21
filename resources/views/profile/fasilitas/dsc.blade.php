@extends('layouts.frontend')

@section('title', 'Damar Sport Center - Futsal Anak-Anak - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Damar Sport Center</h1>
            <p class="lead">Program Futsal Anak-Anak RT 002 RW 017 Bukit Damar</p>
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
                <img src="{{ asset('assets/img/features.png') }}" alt="Damar Sport Center" class="img-fluid" style="max-width: 50%; height: auto; border-radius: 10px;">
              </div>

              <h2 class="title">Program Futsal Anak-Anak Gratis Setiap Minggu</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="#">Pengurus RT 002 RW 017</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <time datetime="2024-01-01">Setiap Hari Minggu</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-calendar"></i>
                    <time datetime="2024-01-01">06:30 - 08:30 WIB</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-tag"></i>
                    <a href="#">Olahraga</a>
                  </li>
                </ul>
              </div>

              <div class="content">
                <p class="lead">
                  <strong>Damar Sport Center</strong> dengan bangga mempersembahkan program futsal gratis untuk anak-anak warga RT 002 RW 017 Bukit Damar. Program ini merupakan salah satu bentuk kepedulian pengurus RT dalam mengembangkan minat dan bakat olahraga anak-anak di lingkungan kita.
                </p>

                <h3>Jadwal Kegiatan</h3>
                <p>
                  Program futsal anak-anak dilaksanakan secara rutin setiap <strong>Hari Minggu pagi</strong> mulai pukul <strong>06:30 - 08:30 WIB</strong>. Kegiatan ini diadakan di lapangan futsal Damar Sport Center yang terletak di lingkungan RT 002 RW 017 Bukit Damar.
                </p>

                <div class="alert alert-info" role="alert" style="background-color: #e7f3ff; border-left: 4px solid #0ea2e7; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #0ea2e7; margin-bottom: 0.5rem;">
                    <i class="bi bi-info-circle me-2"></i>Informasi Penting
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    <strong>Program ini GRATIS</strong> untuk semua anak-anak warga RT 002 RW 017 Bukit Damar. Tidak ada biaya pendaftaran atau iuran bulanan. Program ini murni untuk kepentingan pengembangan olahraga dan kesehatan anak-anak di lingkungan kita.
                  </p>
                </div>

                <h3>Manfaat Program</h3>
                <p>
                  Program futsal anak-anak ini memiliki berbagai manfaat positif, antara lain:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Kesehatan Fisik:</strong> Meningkatkan kebugaran tubuh, koordinasi motorik, dan daya tahan anak-anak</li>
                  <li><strong>Keterampilan Sosial:</strong> Mengembangkan kemampuan bekerja sama dalam tim, sportivitas, dan komunikasi</li>
                  <li><strong>Disiplin:</strong> Melatih kedisiplinan melalui jadwal latihan yang teratur</li>
                  <li><strong>Kreativitas:</strong> Mengembangkan kreativitas dalam bermain dan strategi</li>
                  <li><strong>Kebersamaan:</strong> Mempererat tali silaturahmi antar anak-anak warga RT</li>
                </ul>

                <h3>Sasaran Program</h3>
                <p>
                  Program ini ditujukan untuk anak-anak warga RT 002 RW 017 Bukit Damar dengan rentang usia yang disesuaikan dengan kebutuhan. Kegiatan ini terbuka untuk semua anak-anak yang berminat mengikuti program futsal.
                </p>

                <h3>Fasilitas</h3>
                <p>
                  Damar Sport Center menyediakan fasilitas lapangan futsal yang memadai untuk mendukung kegiatan latihan. Lapangan dilengkapi dengan berbagai peralatan yang diperlukan untuk latihan futsal anak-anak.
                </p>

                <h3>Dukungan Pengurus RT</h3>
                <p>
                  Program ini didukung penuh oleh pengurus RT 002 RW 017 Bukit Damar sebagai bagian dari upaya meningkatkan kualitas hidup warga, khususnya dalam bidang olahraga dan kesehatan. Pengurus RT berkomitmen untuk terus mengembangkan program-program positif lainnya untuk kemajuan lingkungan.
                </p>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Ayo Bergabung!
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Bagi orang tua yang ingin mendaftarkan anak-anaknya untuk mengikuti program futsal gratis ini, silakan menghubungi pengurus RT atau datang langsung ke lapangan futsal Damar Sport Center setiap hari Minggu pagi pukul 06:30 WIB.
                  </p>
                </div>

                <h3>Kontak Informasi</h3>
                <p>
                  Untuk informasi lebih lanjut mengenai program futsal anak-anak atau kegiatan lainnya di Damar Sport Center, silakan menghubungi:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pengurus RT 002 RW 017 Bukit Damar</strong></li>
                  <li>Lokasi: Damar Sport Center, RT 002 RW 017 Bukit Damar</li>
                  <li>Jadwal: Setiap Hari Minggu, 06:30 - 08:30 WIB</li>
                </ul>

                <p class="mt-4">
                  Mari bersama-sama kita dukung program positif ini untuk masa depan anak-anak yang lebih sehat, aktif, dan berprestasi!
                </p>
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Olahraga</a></li>
                  <li><a href="#">Futsal</a></li>
                  <li><a href="#">Anak-Anak</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Futsal</a></li>
                  <li><a href="#">Anak-Anak</a></li>
                  <li><a href="#">Gratis</a></li>
                  <li><a href="#">Olahraga</a></li>
                  <li><a href="#">Damar Sport Center</a></li>
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
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Futsal</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Olahraga</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Anak-Anak</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Gratis</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Damar Sport Center</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">RT 002 RW 017</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#0ea2e7'; this.style.color='#fff'; this.style.borderColor='#0ea2e7'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Bukit Damar</a></li>
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

