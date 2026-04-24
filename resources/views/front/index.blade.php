@extends('index')
@section('title', 'PT Aryantoputra Mitranusantara')
@section('content')
<!-- Hero -->
<section id="hero">
  <div class="geo-shape geo-1"></div>
  <div class="geo-shape geo-2" style="clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%)"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="hero-badge"><i class="fas fa-certificate me-2"></i>ISO 37001:2016 Certified</div>
        <h1 class="hero-title">
          Constructing <span class="accent">Quality , </span><br />
          Building <span class="accent">Trust</span>
        </h1>
        <p class="hero-desc">PT. Aryantoputra Mitranusantara adalah perusahaan jasa konstruksi berpengalaman yang melayani pekerjaan sipil, mekanikal, kelistrikan, dan perpipaan untuk sektor industri, komersial, maupun residensial.</p>
        <div class="d-flex gap-3 flex-wrap" style=".btn-outline-custom:hover {
    border-color: rgb(00, 121, 109);
    color: rgb(00, 121, 109);
}">
          <a href="{{ route('proyek') }}" class="btn-primary-custom">Lihat Proyek <i class="fas fa-arrow-right ms-2"></i></a>
                  <a href="{{ route('contact') }}" class="btn-outline-custom">Hubungi Kami</a>

        </div>
        <div class="hero-stats">
          <div class="stat-item">
            <div class="stat-num counter" data-target="project" data-value="300"></div>
            <div class="stat-lbl">Proyek Selesai</div>
          </div>
          <div class="stat-item">
            <div class="stat-num counter" data-target="experience"></div>
            <div class="stat-lbl">Tahun Pengalaman</div>
          </div>
          <div class="stat-item">
            <div class="stat-num">1988</div>
            <div class="stat-lbl">Tahun Berdiri</div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-flex justify-content-end align-items-center pe-0">
        <!-- decorative panel -->
        <div style="width:340px;height:420px;background:linear-gradient(135deg,#1a2733,#2c3e50);border:1px solid rgba(212,135,10,.2);display:flex;align-items:center;justify-content:center;">
          <i class="fas fa-building" style="font-size:7rem;color:rgba(212,135,10,.15)"></i>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

<!-- About Section -->
<section id="about">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="about-img-wrap me-4">
          <img src="{{ asset('/asset/img/bg-proyek.jpg') }}" width="380" height="380" loading="lazy" class="proj-img">

          <div class="about-badge-box">
            <div class="big-num counter" data-target="experience"></div>
            <div class="small-txt">Tahun Berpengalaman</div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 ps-lg-5 pt-5 pt-lg-0">
        <div class="section-label"><i class="fas fa-hard-hat me-2"></i>Tentang Kami</div>
        <h2 class="section-title">Mitra Kontruksi<br />Terpercaya Anda</h2>
        <div class="title-line"></div>
        <p class="section-desc mb-4">PT. Aryantoputra Mitranusantara merupakan sebuah perusahaan yang bergerak dalam bidang jasa konstruksi sejak tahun 1988. Pelayanan yang kami sediakan antara lain berbagai macam kebutuhan konstruksi seperti pekerjaan sipil, mekanikal, kelistrikan dan perpipaan di dalam aplikasi bangunan industri, komersil maupun residensi.</p>
        <p class="section-desc mb-4">Sejak pendirian perusahaan, kami telah dipercaya untuk melaksanakan proyek-proyek pembangunan, renovasi dan pemeliharaan dari sektor pemerintahan maupun swasta.</p>
        <a href="{{ route('tentang') }}" class="btn-primary-custom">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
<!-- About Section -->

<!-- Layanan -->
<section id="services">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <div class="section-label">Layanan Kami</div>
        <h2 class="section-title">Solusi Konstruksi Lengkap</h2>
        <div class="title-line mx-auto"></div>
        <p class="section-desc">Kami menyediakan layanan konstruksi menyeluruh dari perencanaan hingga serah terima, memastikan setiap proyek berjalan tepat waktu dan anggaran.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-building"></i></div>
          <h5>Building Construction</h5>
          <p>Pembangunan gedung lengkap dari struktur hingga finishing akhir dengan standar kualitas tertinggi.</p>
          <ul class="svc-sub-list">
            <li>Landscape & Structural work</li>
            <li>Mechanical & Electrical work</li>
            <li>Plumbing, Paint & Flooring</li>
            <li>Roof & Wall work</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-drafting-compass"></i></div>
          <h5>Interior &amp; Finishing</h5>
          <p>Desain interior dan pengerjaan finishing premium untuk hunian, kantor, maupun fasilitas komersial.</p>
          <ul class="svc-sub-list">
            <li>Interior Design</li>
            <li>Custom Interior Work</li>
            <li>Custom Furniture</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-industry"></i></div>
          <h5>General Infrastructure</h5>
          <p>Pembangunan infrastruktur umum yang mendukung pertumbuhan kawasan dan konektivitas.</p>
          <ul class="svc-sub-list">
            <li>Bridge & Irrigation</li>
            <li>Fence & Drainage</li>
            <li>Road Work</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Layanan -->

<!-- Portfolio Corousel -->
<section id="projects">
  <div class="container">

    <!-- Section header -->
    <div class="row align-items-end proj-header">
      <div class="col-lg-8">
        <div class="proj-eyebrow">Portofolio</div>
        <h2 class="section-title light">Proyek </h2>
        <div class="title-line"></div>
        <p style="color:var(--text-muted);font-size:1rem;line-height:1.75;max-width:500px">
          Deretan proyek yang telah kami selesaikan untuk klien pemerintah dan swasta di seluruh Indonesia.
        </p>
      </div>
    </div>

    <!-- Carousel viewport -->
    <div class="proj-viewport">
      <div class="proj-track" id="projTrack">

        <!-- ═══ CARD 1 ═══-->
        <div class="proj-card">
          <img src="{{ asset('/asset/img/perbaikan gedung 29a.jpg') }}" alt="Menara Perkantoran Surabaya" loading="lazy" class="proj-img">

          <div class="proj-gradient"></div>
          <div class="proj-tag">Gedung</div>
          <div class="proj-year-badge"><i class="fas fa-calendar-alt me-1"></i>2023</div>
          <div class="proj-info">
            <div class="proj-name">Perbaikan Gedung 29A</div>
            <div class="proj-loc">PT. Bentoel Prima Malang</div>
            <div class="proj-detail-strip">
              <div class="proj-loc"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur</div>
              <div class="proj-btn-circle"><i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
        </div>

        <!-- ═══ CARD 2 ═══-->
        <div class="proj-card">
          <img src="{{ asset('/asset/img/behaestex.jpg') }}" alt="Menara Perkantoran Surabaya" loading="lazy" class="proj-img">

          <div class="proj-gradient"></div>
          <div class="proj-tag">Flooring</div>
          <div class="proj-year-badge"><i class="fas fa-calendar-alt me-1"></i>2025</div>
          <div class="proj-info">
            <div class="proj-name">Peninggian Lantai dan Pasang Keramik Dept. Preparatory</div>
            <div class="proj-loc">PT.BEHAESTEX</div>
            <div class="proj-detail-strip">
              <div class="proj-loc"><i class="fas fa-map-marker-alt"></i> Pandaan Jawa Timur</div>
              <div class="proj-btn-circle"><i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
        </div>

        ═══ CARD 3 ═══
        <div class="proj-card">
          <img src="{{ asset('/asset/img/ktng1.jpg') }}" alt="PT. Korea Tomorrow & Global" loading="lazy" class="proj-img" >
          <div class="proj-gradient"></div>
          <div class="proj-tag">Gedung</div>
          <div class="proj-year-badge"><i class="fas fa-calendar-alt me-1"></i>2025</div>
          <div class="proj-info">
            <div class="proj-name">Repair Of Utility Building Secondary</div>
            <div class="proj-loc">PT. Tri Sakti Purwosari Makmur</div>
            <div class="proj-detail-strip">
              <div class="proj-loc"><i class="fas fa-map-marker-alt"></i> Purwosari, Jawa Timur</div>
              <div class="proj-btn-circle"><i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="proj-card">
          <img src="{{ asset('/asset/img/perbaikan gedung 29a.jpg') }}" alt="Menara Perkantoran Surabaya" loading="lazy" class="proj-img">

          <div class="proj-gradient"></div>
          <div class="proj-tag">Gedung</div>
          <div class="proj-year-badge"><i class="fas fa-calendar-alt me-1"></i>2023</div>
          <div class="proj-info">
            <div class="proj-name">Perbaikan Gedung 29A</div>
            <div class="proj-loc">PT. Bentoel Prima Malang</div>
            <div class="proj-detail-strip">
              <div class="proj-loc"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur</div>
              <div class="proj-btn-circle"><i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
        </div>
        <!-- ═══ CARD 5 ═══-->
        <div class="proj-card">
          <img src="{{ asset('/asset/img/perbaikan gedung 29a.jpg') }}" alt="Menara Perkantoran Surabaya" loading="lazy" class="proj-img">

          <div class="proj-gradient"></div>
          <div class="proj-tag">Gedung</div>
          <div class="proj-year-badge"><i class="fas fa-calendar-alt me-1"></i>2023</div>
          <div class="proj-info">
            <div class="proj-name">Perbaikan Gedung 29A</div>
            <div class="proj-loc">PT. Bentoel Prima Malang</div>
            <div class="proj-detail-strip">
              <div class="proj-loc"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur</div>
              <div class="proj-btn-circle"><i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
        </div>

        <!-- ═══ CARD 6 ═══ -->
        <div class="proj-card">
          <img src="{{ asset('/asset/img/perbaikan gedung 29a.jpg') }}" alt="Menara Perkantoran Surabaya" loading="lazy" class="proj-img">

          <div class="proj-gradient"></div>
          <div class="proj-tag">Gedung</div>
          <div class="proj-year-badge"><i class="fas fa-calendar-alt me-1"></i>2023</div>
          <div class="proj-info">
            <div class="proj-name">Perbaikan Gedung 29A</div>
            <div class="proj-loc">PT. Bentoel Prima Malang</div>
            <div class="proj-detail-strip">
              <div class="proj-loc"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur</div>
              <div class="proj-btn-circle"><i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
        </div>

      </div><!-- /proj-track -->
    </div><!-- /proj-viewport -->

    <!-- Controls bar -->
    <div class="proj-controls">
      <button class="proj-ctrl-btn" id="projPrev" aria-label="Sebelumnya">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="proj-ctrl-btn" id="projNext" aria-label="Berikutnya">
        <i class="fas fa-chevron-right"></i>
      </button>

      <div class="proj-prog-track">
        <div class="proj-prog-fill" id="projFill"></div>
      </div>

      <div class="proj-slide-count">
        <span class="cur" id="projCur">01</span>
        <span style="opacity:.3"> / </span>
        <span id="projMax">06</span>
      </div>

      <div class="proj-dots" id="projDots"></div>
    </div>

  </div><!-- /container -->
</section>

<!-- End Portfolio -->

<!-- Testimoni -->
<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <div class="section-label">Testimoni</div>
        <h2 class="section-title">Apa Kata Klien Kami</h2>
        <div class="title-line mx-auto"></div>
      </div>
    </div>
    <div class="row g-6">
      <div class="col-md-6 col-lg-6">
        <div class="testi-card">
          <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="testi-text">PT Aryanto exceeds our expectation at doing their field of work. We as a client considers PT Aryanto as reliable partner of doing their job as contractor.</p>
          <div class="testi-author">
            <div style="width:48px;height:48px;background:var(--primary);border-radius:50%;display:grid;place-items:center;color:#fff;font-family:'Oswald',sans-serif;font-weight:700;">JT</div>
            <div class="testi-author-info"><strong>Jeremiah T</strong><small>CEO · PT. Fajar Indah Knalpot</small></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="testi-card">
          <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p class="testi-text">PT. Aryanto is able to deliver project works as expectation and done on time. Their team is highly professional and responsive throughout every project phase.</p>
          <div class="testi-author">
            <div style="width:48px;height:48px;background:var(--mid);border-radius:50%;display:grid;place-items:center;color:#fff;font-family:'Oswald',sans-serif;font-weight:700;">JH</div>
            <div class="testi-author-info"><strong>Juan Howard Wibowo</strong><small>Building Officer · British American Tobacco Indonesia</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Testimoni -->

<!-- CTA -->
<section id="cta">
  <div class="container">
    <h2>Siap Memulai Proyek Anda?</h2>
    <p>Konsultasikan kebutuhan konstruksi Anda dengan tim ahli kami secara gratis. Kami siap memberikan estimasi biaya dan solusi terbaik.</p>
    <div class="cta-buttons">
      <a href="{{ route('contact') }}" class="btn-white">
        <i class="fas fa-phone me-2"></i>Hubungi Sekarang
      </a>

      <a href="https://api.whatsapp.com/send?phone=6281906062622&text=Halo%20saya%20ingin%20konsultasi"
        target="_blank"
        class="btn-wa">
        <i class="fab fa-whatsapp me-2"></i>WhatsApp Kami
      </a>
    </div>
  </div>
</section>
@endsection