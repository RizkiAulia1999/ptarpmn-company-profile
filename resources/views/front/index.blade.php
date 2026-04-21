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
                    Constucting <span class="accent">Quality , </span><br />
                    Building <span class="accent">Trust</span>
                </h1>
                <p class="hero-desc">PT. Aryantoputra Mitranusantara adalah perusahaan jasa konstruksi berpengalaman yang melayani pekerjaan sipil, mekanikal, kelistrikan, dan perpipaan untuk sektor industri, komersial, maupun residensial.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#projects" class="btn-primary-custom">Lihat Proyek <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="#contact" class="btn-outline-custom">Hubungi Kami</a>
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
                    <div class="img-placeholder about-img-main">
                        <i class="fas fa-city"></i>
                    </div>
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
                <p class="section-desc mb-4">Sejak pendirian perusahaan, kami telah dipercaya untuk melaksanakan proyek-proyek pembangunan, renovasi dan pemeliharaan dari sektor pemerintahan maupun swasta. Klien kami mencakup instansi nasional seperti PLN, BNI, BAT Indonesia, Universitas Brawijaya, Dinas Kesehatan, hingga perusahaan industri swasta.</p>
                <!-- <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-award"></i></div>
              <div>
                <h6>Berlisensi Lengkap</h6>
                <p>IUJK, NIB, Akta Pendirian & SBU BG resmi</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-clock"></i></div>
              <div>
                <h6>Tepat Waktu</h6>
                <p>Komitmen menyelesaikan sesuai jadwal</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-shield-alt"></i></div>
              <div>
                <h6>Standar Keselamatan</h6>
                <p>Mengutamakan K3 di seluruh site proyek</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="about-feature">
              <div class="about-feature-icon"><i class="fas fa-handshake"></i></div>
              <div>
                <h6>One Stop Solution</h6>
                <p>Semua kebutuhan konstruksi dalam satu mitra</p>
              </div>
            </div>
          </div>
        </div> -->
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

    <!-- Header -->
    <div class="projects-header row align-items-end">
      <div class="col-lg-7">
        <div class="section-label" style="color:var(--primary)">Portofolio</div>
        <h2 class="section-title light">Proyek Unggulan Kami</h2>
        <div class="title-line"></div>
        <p style="color:var(--text-muted);font-size:1rem;line-height:1.75;max-width:520px">
          Deretan proyek prestisius yang telah kami selesaikan untuk klien pemerintah
          dan swasta di seluruh Indonesia.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
        <span style="color:var(--text-muted);font-size:.82rem;letter-spacing:1px">
          <span id="slideCounter" style="font-family:'Oswald',sans-serif;font-size:2rem;color:var(--primary);font-weight:700">01</span>
          <span style="font-family:'Oswald',sans-serif;font-size:1.2rem;color:rgba(255,255,255,.2)"> / 06</span>
        </span>
      </div>
    </div>

    <!-- Carousel viewport -->
    <div class="carousel-viewport">
      <div class="carousel-track" id="projTrack">

        <!-- Card 1 -->
        <div class="proj-card">
          <div class="proj-img-placeholder">
            <i class="fas fa-city"></i>
          </div>
          <span class="proj-tag">Gedung</span>
          <div class="proj-body">
            <div class="proj-year">2023</div>
            <div class="proj-name">Menara Perkantoran Surabaya</div>
            <div class="proj-location"><i class="fas fa-map-marker-alt"></i> Surabaya, Jawa Timur</div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="proj-card">
          <div class="proj-img-placeholder">
            <i class="fas fa-road"></i>
          </div>
          <span class="proj-tag">Infrastruktur</span>
          <div class="proj-body">
            <div class="proj-year">2022</div>
            <div class="proj-name">Jembatan Tol Malang–Pandaan</div>
            <div class="proj-location"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur</div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="proj-card">
          <div class="proj-img-placeholder">
            <i class="fas fa-industry"></i>
          </div>
          <span class="proj-tag">Industri</span>
          <div class="proj-body">
            <div class="proj-year">2022</div>
            <div class="proj-name">Kawasan Industri JIIPE Gresik</div>
            <div class="proj-location"><i class="fas fa-map-marker-alt"></i> Gresik, Jawa Timur</div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="proj-card">
          <div class="proj-img-placeholder">
            <i class="fas fa-hospital"></i>
          </div>
          <span class="proj-tag">Fasilitas Umum</span>
          <div class="proj-body">
            <div class="proj-year">2023</div>
            <div class="proj-name">RS Regional Jember</div>
            <div class="proj-location"><i class="fas fa-map-marker-alt"></i> Jember, Jawa Timur</div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="proj-card">
          <div class="proj-img-placeholder">
            <i class="fas fa-home"></i>
          </div>
          <span class="proj-tag">Residensial</span>
          <div class="proj-body">
            <div class="proj-year">2021</div>
            <div class="proj-name">Perumahan Grand Araya Malang</div>
            <div class="proj-location"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur</div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="proj-card">
          <div class="proj-img-placeholder">
            <i class="fas fa-water"></i>
          </div>
          <span class="proj-tag">Infrastruktur Air</span>
          <div class="proj-body">
            <div class="proj-year">2021</div>
            <div class="proj-name">Instalasi SPAM Banyuwangi</div>
            <div class="proj-location"><i class="fas fa-map-marker-alt"></i> Banyuwangi, Jawa Timur</div>
          </div>
        </div>

      </div><!-- /track -->
    </div><!-- /viewport -->

    <!-- Progress bar -->
    <div class="carousel-progress-wrap">
      <div class="carousel-progress-bar" id="projProgress" style="width:16.67%"></div>
    </div>

    <!-- Nav -->
    <div class="carousel-nav">
      <button class="carousel-btn" id="projPrev" aria-label="Previous">
        <i class="fas fa-arrow-left"></i>
      </button>
      <div class="carousel-dots" id="projDots"></div>
      <button class="carousel-btn" id="projNext" aria-label="Next">
        <i class="fas fa-arrow-right"></i>
      </button>
    </div>

    <div class="text-center mt-5">
      <a href="#contact" class="btn-primary-custom">Diskusikan Proyek Anda <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>

<!-- End Portfolio -->
@endsection