@extends('layouts.frontend')

@section('title', 'Sistem Keamanan - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Sistem Keamanan</h1>
            <p class="lead">Keamanan dan Ketertiban Lingkungan RT 002 RW 017</p>
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
                <img src="{{ asset('assets/img/features.png') }}" alt="Sistem Keamanan Bukit Damar" class="img-fluid" style="max-width: 50%; height: auto; border-radius: 10px;">
              </div>

              <h2 class="title">Sistem Keamanan: Menjaga Keamanan dan Ketertiban Lingkungan</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="{{ route('kepengurusan') }}">Pengurus RT 002 RW 017</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <time datetime="2024-01-01">24 Jam</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-calendar"></i>
                    <time datetime="2024-01-01">Pengawasan Terpadu</time>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-tag"></i>
                    <a href="#">Keamanan</a>
                  </li>
                </ul>
              </div>

              <div class="content">
                <p class="lead">
                  <strong>Sistem Keamanan</strong> di lingkungan RT 002 RW 017 Bukit Damar dirancang untuk memberikan perlindungan dan rasa aman bagi seluruh warga. Sistem keamanan yang terintegrasi ini melibatkan berbagai komponen, mulai dari pengawasan, patroli, hingga koordinasi dengan pihak terkait untuk memastikan lingkungan tetap aman dan tertib.
                </p>

                <h3>Komponen Sistem Keamanan</h3>

                <h4>Pengawasan 24 Jam</h4>
                <p>
                  Sistem keamanan di RT 002 RW 017 dilengkapi dengan pengawasan yang berjalan 24 jam untuk memastikan keamanan lingkungan. Pengawasan ini dilakukan secara terpadu dengan melibatkan berbagai elemen keamanan.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Patroli Rutin:</strong> Patroli keamanan secara berkala di seluruh area RT</li>
                  <li><strong>Pengawasan:</strong> Pengawasan terhadap aktivitas mencurigakan</li>
                  <li><strong>Koordinasi:</strong> Koordinasi dengan warga dan pihak terkait</li>
                </ul>

                <div class="alert alert-info" role="alert" style="background-color: #e7f3ff; border-left: 4px solid #ffc107; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #ffc107; margin-bottom: 0.5rem;">
                    <i class="bi bi-info-circle me-2"></i>Keamanan Terpadu
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Sistem keamanan di RT 002 RW 017 dirancang secara terpadu dengan melibatkan seluruh elemen, mulai dari pengurus RT, satpam, hingga partisipasi aktif warga dalam menjaga keamanan lingkungan.
                  </p>
                </div>

                <h4>Satpam dan Petugas Keamanan</h4>
                <p>
                  RT 002 RW 017 dilengkapi dengan satpam dan petugas keamanan yang bertugas menjaga keamanan lingkungan. Petugas keamanan ini bekerja secara profesional untuk memastikan lingkungan tetap aman dan tertib.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Satpam:</strong> Petugas keamanan yang bertugas menjaga lingkungan</li>
                  <li><strong>Patroli:</strong> Patroli rutin di seluruh area RT</li>
                  <li><strong>Respon Cepat:</strong> Respon cepat terhadap insiden keamanan</li>
                </ul>

                <h3>Program Keamanan</h3>

                <h4>Siskamling (Sistem Keamanan Lingkungan)</h4>
                <p>
                  RT 002 RW 017 mengimplementasikan program Siskamling yang melibatkan partisipasi aktif warga dalam menjaga keamanan lingkungan. Program ini bertujuan untuk menciptakan lingkungan yang aman melalui gotong royong warga.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Ronda:</strong> Kegiatan ronda warga secara bergiliran</li>
                  <li><strong>Koordinasi:</strong> Koordinasi antar warga dalam menjaga keamanan</li>
                  <li><strong>Komunikasi:</strong> Komunikasi cepat untuk informasi keamanan</li>
                </ul>

                <h4>Pengawasan Akses Masuk</h4>
                <p>
                  Sistem keamanan juga mencakup pengawasan terhadap akses masuk ke lingkungan RT. Pengawasan ini dilakukan untuk memastikan hanya warga dan tamu yang sah yang dapat masuk ke lingkungan.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pos Jaga:</strong> Pos jaga di pintu masuk utama</li>
                  <li><strong>Pencatatan:</strong> Pencatatan tamu yang masuk ke lingkungan</li>
                  <li><strong>Pengawasan:</strong> Pengawasan terhadap kendaraan masuk dan keluar</li>
                </ul>

                <h3>Fasilitas Keamanan</h3>
                <p>
                  Sistem keamanan dilengkapi dengan berbagai fasilitas pendukung:
                </p>
                <ul style="line-height: 2;">
                  <li>Pos jaga keamanan di lokasi strategis</li>
                  <li>Peralatan komunikasi untuk koordinasi</li>
                  <li>Sistem pencahayaan yang memadai</li>
                  <li>Fasilitas pendukung lainnya</li>
                </ul>

                <h3>Peran Warga dalam Keamanan</h3>
                <p>
                  Keamanan lingkungan tidak hanya menjadi tanggung jawab petugas keamanan, tetapi juga menjadi tanggung jawab bersama seluruh warga. Partisipasi aktif warga sangat penting untuk menciptakan lingkungan yang aman dan tertib.
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Kewaspadaan:</strong> Warga diharapkan selalu waspada terhadap aktivitas mencurigakan</li>
                  <li><strong>Pelaporan:</strong> Segera melaporkan kejadian mencurigakan kepada petugas keamanan</li>
                  <li><strong>Partisipasi:</strong> Aktif berpartisipasi dalam program keamanan lingkungan</li>
                  <li><strong>Kepatuhan:</strong> Mematuhi peraturan keamanan yang berlaku</li>
                </ul>

                <div class="alert alert-success" role="alert" style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 1rem; margin: 1.5rem 0;">
                  <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                    <i class="bi bi-check-circle me-2"></i>Keamanan Bersama
                  </h5>
                  <p class="mb-0" style="color: #2c3e50;">
                    Keamanan lingkungan adalah tanggung jawab bersama. Mari kita semua berpartisipasi aktif dalam menjaga keamanan dan ketertiban lingkungan RT 002 RW 017 Bukit Damar.
                  </p>
                </div>

                <h3>Koordinasi dengan Pihak Terkait</h3>
                <p>
                  Sistem keamanan di RT 002 RW 017 juga melakukan koordinasi dengan pihak-pihak terkait, seperti kepolisian setempat, untuk memastikan keamanan lingkungan dapat terjaga dengan baik. Koordinasi ini dilakukan secara rutin dan berkelanjutan.
                </p>

                <h3>Dukungan Pengurus RT</h3>
                <p>
                  Pengurus RT 002 RW 017 berkomitmen untuk terus meningkatkan dan mengembangkan sistem keamanan lingkungan. Pengurus RT terus berupaya memastikan semua komponen keamanan berfungsi dengan baik dan dapat memberikan perlindungan maksimal bagi warga.
                </p>

                <h3>Kontak Informasi</h3>
                <p>
                  Untuk informasi lebih lanjut mengenai sistem keamanan atau jika ada hal yang perlu dilaporkan, silakan menghubungi:
                </p>
                <ul style="line-height: 2;">
                  <li><strong>Pengurus RT 002 RW 017 Bukit Damar</strong></li>
                  <li><strong>Petugas Keamanan RT 002 RW 017</strong></li>
                  <li>Pos Jaga: Pintu Masuk Utama RT 002 RW 017</li>
                </ul>

                <p class="mt-4">
                  Mari bersama-sama kita jaga keamanan dan ketertiban lingkungan RT 002 RW 017 Bukit Damar untuk menciptakan lingkungan yang aman, nyaman, dan sejahtera bagi seluruh warga!
                </p>
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Keamanan</a></li>
                  <li><a href="#">Fasilitas</a></li>
                  <li><a href="#">Pengawasan</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Keamanan</a></li>
                  <li><a href="#">Siskamling</a></li>
                  <li><a href="#">Patroli</a></li>
                  <li><a href="#">Pengawasan</a></li>
                  <li><a href="#">Ketertiban</a></li>
                  <li><a href="#">Perlindungan</a></li>
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
                  <a href="{{ route('blog.masjid') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
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

                  <a href="{{ route('blog.dsc') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
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

                  <a href="{{ route('blog.damar-park') }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
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

                  <a href="{{ route('blog.balai-warga') }}" style="text-decoration: none; display: block;">
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
                </div>
              </div>

              <div class="sidebar-item tags" data-aos="fade-up" data-aos-delay="200">
                <h3 class="sidebar-title mb-3" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #e9ecef;">Tags</h3>
                <ul class="mt-3" style="list-style: none; padding: 0; display: flex; flex-wrap: wrap; gap: 0.5rem;">
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#ffc107'; this.style.color='#fff'; this.style.borderColor='#ffc107'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Keamanan</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#ffc107'; this.style.color='#fff'; this.style.borderColor='#ffc107'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Siskamling</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#ffc107'; this.style.color='#fff'; this.style.borderColor='#ffc107'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Patroli</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#ffc107'; this.style.color='#fff'; this.style.borderColor='#ffc107'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Pengawasan</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#ffc107'; this.style.color='#fff'; this.style.borderColor='#ffc107'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Ketertiban</a></li>
                  <li><a href="#" style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 4px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.backgroundColor='#ffc107'; this.style.color='#fff'; this.style.borderColor='#ffc107'" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'">Perlindungan</a></li>
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

