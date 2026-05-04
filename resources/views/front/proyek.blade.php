@extends('index')
@section('title', 'PT Aryantoputra Mitranusantara')
@section('content')
<!-- PAGE HERO -->
<div class="page-hero">
  <div class="geo-shape geo-1"></div>
  <div class="geo-shape geo-2" style="clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%)"></div>
  <div class="container">
    <div class="page-hero-badge"><i class="fas fa-hard-hat me-2"></i>Portofolio</div>
    <h1>Proyek <span class="accent">PT. Aryantoputra Mitranusantara</span></h1>
    <div class="breadcrumb-wrap">
      <a href="index.html"><i class="fas fa-home me-1"></i>Beranda</a>
      <span>›</span>
      <span class="current">Proyek Kami</span>
    </div>
  </div>
</div>

<!-- ══════════ STAT RIBBON ══════════ -->
<div class="stat-ribbon">
  <div class="container">
    <div class="stat-ribbon-inner">
      <div class="sr-item">
        <div class="sr-num">1988</div>
        <div class="sr-lbl">Mulai Berkarya</div>
      </div>
      <div class="sr-divider d-none d-md-block"></div>
      <div class="sr-item">
        <div class="sr-num">300+</div>
        <div class="sr-lbl">Proyek Selesai</div>
      </div>
      <div class="sr-divider d-none d-md-block"></div>
      <div class="sr-item">
        <div class="sr-num">3</div>
        <div class="sr-lbl">Bidang Layanan</div>
      </div>
      <div class="sr-divider d-none d-md-block"></div>
      <div class="sr-item">
        <div class="sr-num">35+</div>
        <div class="sr-lbl">Tahun Pengalaman</div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════ FILTER BAR ══════════ -->
<div class="filter-bar">
  <div class="container">
    <div class="d-flex gap-2 flex-wrap align-items-center">
      <span style="color:var(--text-muted);font-size:.78rem;letter-spacing:1px;text-transform:uppercase;font-family:'Oswald',sans-serif;margin-right:4px;">Filter:</span>
      <button class="filter-btn active" data-filter="all">Semua <span class="filter-count">26</span></button>
      <button class="filter-btn" data-filter="pendidikan">Pendidikan <span class="filter-count">5</span></button>
      <button class="filter-btn" data-filter="pemerintah">Pemerintah <span class="filter-count">6</span></button>
      <button class="filter-btn" data-filter="kesehatan">Kesehatan <span class="filter-count">3</span></button>
      <button class="filter-btn" data-filter="industri">Industri <span class="filter-count">5</span></button>
      <button class="filter-btn" data-filter="perbankan">Perbankan <span class="filter-count">2</span></button>
      <button class="filter-btn" data-filter="infrastruktur">Infrastruktur <span class="filter-count">3</span></button>
      <button class="filter-btn" data-filter="renovasi">Renovasi <span class="filter-count">2</span></button>
    </div>
  </div>
</div>

<!-- ══════════ PROJECTS GRID ══════════ -->
<section id="projects-grid" class="content-section">
  <div class="container">

  </div>
</section>

<!-- ══════════ DOCUMENTATION PHOTOS ══════════ -->
<div class="doc-strip">
  <div class="container">
    <div class="mb-4 pt-2">
      <div class="section-label" style="color:var(--primary)">Dokumentasi Lapangan</div>
      <h3 class="section-title light" style="font-size:1.6rem">Foto Proyek Terpilih</h3>
      <div class="title-line"></div>
    </div>
    <div class="row g-2">
      <div class="col-6 col-md-3">
        <div class="doc-photo">
          <img src="{{ asset('/asset/img/japfa.jpeg') }}" alt="Apotek dan Klinik" loading="lazy" />
          <div class="doc-photo-caption">
            <p>Pembuatan Apotek dan Klinik</p><small>PT. Japfa Comfeed</small>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="doc-photo">
          <img src="{{ asset('/asset/img/ktng1.jpg') }}" alt="Fumigation Chamber Warehouse" loading="lazy" />
          <div class="doc-photo-caption">
            <p>Repair Of Utility Building Secondary</p><small>PT. Tri Sakti Purwosari Makmur</small>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="doc-photo">
          <img src="{{ asset('/asset/img/tempo.jpeg') }}" alt="Tempo" loading="lazy" />
          <div class="doc-photo-caption">
            <p>Pek. Perkuatan Lantai & Pembuatan Platform Ruang Compounding</p><small>PT Tempo Utama Sejahtera</small>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="doc-photo">
          <img src="{{ asset('/asset/img/bentol.png') }}" alt="Pembuatan Taman & Cat e-Liquid" loading="lazy" />
          <div class="doc-photo-caption">
            <p>Pembuatan Taman & Cat e-Liquid</p><small>PT. Bentoel Prima</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection