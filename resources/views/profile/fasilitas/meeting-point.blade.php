@extends('layouts.frontend')

@section('title', 'Meeting Point - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Meeting Point</h1>
            <p class="lead">Titik Kumpul dan Koordinasi Warga RT 002 RW 017</p>
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
                <img src="{{ asset('assets/img/features.png') }}" alt="Meeting Point Bukit Damar" class="img-fluid" style="max-width: 50%; height: auto; border-radius: 10px;">
              </div>

              <h2 class="title">Meeting Point: Titik Kumpul dan Koordinasi Kegiatan Warga</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="{{ route('kepengurusan') }}">Pengurus RT 002 RW 017</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <time datetime="2024-01-01">Sesuai Kebutuhan</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-calendar"></i>
                    <time datetime="2024-01-01">Koordinasi & Kumpul</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-tag"></i>
                    <a href="#">Koordinasi</a>
                  </li>
                </ul>
              </div>

              <div class="content">
                <p class="lead">
                  <strong>Meeting Point</strong> merupakan titik kumpul strategis di lingkungan RT 002 RW 017 Bukit Damar yang berfungsi sebagai tempat koordinasi, titik kumpul untuk berbagai kegiatan, dan pusat informasi bagi warga. Lokasi ini memudahkan warga untuk berkumpul dan berkoordinasi sebelum melakukan kegiatan bersama.
                </p>

                <h3>Fungsi Meeting Point</h3>

                <h4>Titik Kumpul Kegiatan</h4>
                <p>
                  Meeting Point digunakan sebagai titik kumpul untuk berbagai kegiatan warga, baik kegiatan rutin maupun kegiatan khusus. Lokasi ini memudahkan koordinasi dan memastikan semua peserta kegiatan dapat berkumpul di tempat yang sama sebelum memulai aktivitas.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Kegiatan Gotong Royong:</strong> Titik kumpul sebelum kerja bakti</li>
                  <li><strong>Kegiatan Olahraga:</strong> Titik kumpul untuk senam bersama atau olahraga komunitas</li>
                  <li><strong>Kegiatan Sosial:</strong> Titik kumpul untuk kegiatan bakti sosial</li>
                </ul>

                <div class="alert alert-info" role="alert" style="background-color: #e7f3ff; border-left: 4px solid #dc3545; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #dc3545; margin-bottom: 0.5rem;">
                    <i class="bi bi-info-circle me-2"></i>Koordinasi yang Efektif
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Meeting Point memudahkan koordinasi kegiatan warga dengan menyediakan lokasi yang jelas dan mudah dijangkau. Semua warga dapat dengan mudah menemukan lokasi kumpul untuk berbagai kegiatan.
                  </p>
                </div>

                <h4>Pusat Informasi</h4>
                <p>
                  Meeting Point juga berfungsi sebagai pusat informasi bagi warga. Informasi penting, pengumuman, dan koordinasi kegiatan biasanya dilakukan di lokasi ini, memudahkan warga untuk mendapatkan informasi terkini.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pengumuman:</strong> Tempat penyampaian pengumuman penting</li>
                  <li><strong>Koordinasi:</strong> Koordinasi kegiatan kemasyarakatan</li>
                  <li><strong>Informasi:</strong> Pusat informasi untuk warga</li>
                </ul>

                <h3>Kegiatan yang Menggunakan Meeting Point</h3>

                <h4>Gotong Royong</h4>
                <p>
                  Meeting Point menjadi titik kumpul utama untuk kegiatan gotong royong. Warga berkumpul di lokasi ini sebelum memulai kerja bakti membersihkan lingkungan atau kegiatan gotong royong lainnya.
                </p>

                <h4>Kegiatan Olahraga Bersama</h4>
                <p>
                  Untuk kegiatan olahraga bersama seperti senam pagi, jalan santai, atau kegiatan olahraga komunitas lainnya, Meeting Point menjadi tempat kumpul sebelum memulai aktivitas.
                </p>

                <h4>Kegiatan Sosial</h4>
                <p>
                  Meeting Point juga digunakan sebagai titik kumpul untuk berbagai kegiatan sosial, seperti bakti sosial, kegiatan amal, atau kegiatan kemasyarakatan lainnya.
                </p>

                <h3>Keunggulan Meeting Point</h3>
                <p>
                  Meeting Point memiliki beberapa keunggulan yang membuatnya efektif sebagai titik kumpul:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Lokasi Strategis:</strong> Terletak di lokasi yang mudah dijangkau dari seluruh area RT</li>
                  <li><strong>Mudah Ditemukan:</strong> Lokasi yang jelas dan mudah diidentifikasi</li>
                  <li><strong>Akses Mudah:</strong> Dapat diakses dengan mudah oleh semua warga</li>
                  <li><strong>Fasilitas Memadai:</strong> Dilengkapi dengan fasilitas pendukung</li>
                </ul>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Manfaat untuk Warga
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Keberadaan Meeting Point memudahkan koordinasi kegiatan warga, meningkatkan efisiensi dalam mengorganisir kegiatan, dan memperkuat kebersamaan antar warga melalui titik kumpul yang jelas.
                  </p>
                </div>

                <h3>Dukungan Pengurus RT</h3>
                <p>
                  Meeting Point didukung penuh oleh pengurus RT 002 RW 017 Bukit Damar sebagai bagian dari upaya meningkatkan koordinasi dan efisiensi kegiatan kemasyarakatan. Pengurus RT terus berupaya memastikan Meeting Point tetap berfungsi dengan baik.
                </p>

                <h3>Kontak Informasi</h3>
                <p>
                  Untuk informasi lebih lanjut mengenai Meeting Point atau koordinasi kegiatan, silakan menghubungi:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pengurus RT 002 RW 017 Bukit Damar</strong></li>
                  <li>Lokasi: Meeting Point, RT 002 RW 017 Bukit Damar</li>
                  <li>Penggunaan: Sesuai kebutuhan koordinasi kegiatan</li>
                </ul>

                <p class="mt-4">
                  Mari kita manfaatkan Meeting Point sebagai sarana untuk meningkatkan koordinasi dan kebersamaan dalam berbagai kegiatan kemasyarakatan!
                </p>
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Koordinasi</a></li>
                  <li><a href="#">Fasilitas</a></li>
                  <li><a href="#">Kegiatan</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Meeting Point</a></li>
                  <li><a href="#">Koordinasi</a></li>
                  <li><a href="#">Titik Kumpul</a></li>
                  <li><a href="#">Kegiatan</a></li>
                  <li><a href="#">Gotong Royong</a></li>
                  <li><a href="#">Informasi</a></li>
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
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#fff'; this.style.borderColor='#dc3545'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Meeting Point</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#fff'; this.style.borderColor='#dc3545'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Koordinasi</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#fff'; this.style.borderColor='#dc3545'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Titik Kumpul</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#fff'; this.style.borderColor='#dc3545'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Kegiatan</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#fff'; this.style.borderColor='#dc3545'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Gotong Royong</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#fff'; this.style.borderColor='#dc3545'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Informasi</a></li>
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

