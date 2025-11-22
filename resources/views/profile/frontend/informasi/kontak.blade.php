@extends('layouts.frontend')

@section('title', ' Kontak Kami - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Kontak Kami</h1>
            <p class="lead">Kontak Kami</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Alamat</h3>
                    <p>Cluster Bukit Damar Citra Indah City</p>
                    <p>Desa Singajaya Kecamatan Jonggol Kabupaten Bogor</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>No WhatsApp</h3>
                    <p><a href="https://wa.me/6281234567890" target="_blank" style="color: #25D366; text-decoration: none; font-weight: 500;"><i class="bi bi-whatsapp me-2" style="font-size: 14px;"></i>+62 812-3456-7890</a></p>
                    <p><a href="https://wa.me/1667825444541" target="_blank" style="color: #25D366; text-decoration: none; font-weight: 500;"><i class="bi bi-whatsapp me-2" style="font-size: 14px;"></i>+1 6678 254445 41</a></p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:bukitdamar03@gmail.com" style="color: inherit; text-decoration: none;">bukitdamar03@gmail.com</a></p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="500">
                    <i class="bi bi-clock"></i>
                    <h3>Jam Operasional</h3>
                    <p>Senin - Jumat</p>
                    <p>09:00 - 17:00 WIB</p>
                  </div>
                </div><!-- End Info Item -->
              </div>
            </div>

            <div class="col-lg-6">
              <div class="info-item" data-aos="fade" data-aos-delay="600" style="height: 100%;">
                <h3 class="mb-3"><i class="bi bi-map me-2"></i>Lokasi</h3>
                <div style="width: 100%; height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                  <iframe
                    src="https://www.google.com/maps?q=Cluster+Bukit+Damar+Citra+Indah+City+Jonggol+Bogor&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi Cluster Bukit Damar">
                  </iframe>
                </div>
                <p class="mt-3 mb-0">
                  <a href="https://www.google.com/maps/search/?api=1&query=Cluster+Bukit+Damar+Citra+Indah+City+Jonggol+Bogor"
                    target="_blank"
                    class="btn btn-sm"
                    style="background: transparent; border: none; color: #0d6efd; padding-left: 0;">
                   <i class="bi bi-geo-alt-fill me-2"></i>Buka di Google Maps
                 </a>
                </p>
              </div>
            </div><!-- End Google Maps -->

          </div>

        </div>

      </section><!-- /Contact Section -->

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

      .info-item a:hover {
        text-decoration: underline !important;
      }
    </style>
    @endpush

  @endsection

