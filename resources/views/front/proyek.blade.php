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

<!-- ══════════ NOTABLE PROJECTS ══════════ -->
<section id="notable-projects">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7">
        <h2 class="section-title">Notable <span style="color:var(--primary)">Projects</span></h2>
        <div class="title-line mx-auto"></div>
        <p class="np-subtitle">Dipercaya oleh instansi pemerintah, BUMN, dan perusahaan swasta nasional selama 35+ tahun</p>
      </div>
    </div>
    <!-- CLIENT LOGO GRID -->
    <div class="row g-3 mb-5 justify-content-center">
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#1a3a6e">UB</div><div class="np-client-info"><strong>Universitas Brawijaya</strong><span>1992 – 1995</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#1d6b31">PLN</div><div class="np-client-info"><strong>PLN Sektor Malang</strong><span>1992</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#e05c1a">BNI</div><div class="np-client-info"><strong>Bank BNI Kediri</strong><span>1990</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#1e4a8a">BAT</div><div class="np-client-info"><strong>British American Tobacco</strong><span>2007 – 2023</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#7b2d8b">UM</div><div class="np-client-info"><strong>Universitas Malang</strong><span>1995</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#c0392b">RSP</div><div class="np-client-info"><strong>RS Panti Nirmala</strong><span>2000</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#1a7a50">DPRD</div><div class="np-client-info"><strong>DPRD Kab. Nganjuk</strong><span>1995</span></div></div></div>
      <div class="col-6 col-md-3"><div class="np-client-card"><div class="np-avatar" style="background:#555e6a">IAP</div><div class="np-client-info"><strong>PT. Indonusa Algaemas</strong><span>2023</span></div></div></div>
    </div>
    <!-- TIMELINE 2 KOLOM -->
    <div class="row g-0 np-timeline-wrap">
      <div class="col-lg-6 pe-lg-5">
        <div class="np-col-title"><i class="fas fa-landmark me-2"></i>Proyek Pilihan — Pemerintah &amp; BUMN</div>
        <div class="np-timeline">
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">1990</span><h6>Pembangunan Gedung Kantor BNI Kediri</h6><p>BNI 1946 Kanwil 06 Surabaya &middot; SPK: UMM13/0198</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">1992 – 1995</span><h6>Gedung Kuliah FAPERTA &amp; Lab. Aquaculture</h6><p>Universitas Brawijaya Malang (4 Tahap)</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">1993</span><h6>Pembangunan Gedung KIBC Kediri</h6><p>Ditjen Bea Cukai Wilayah VII Kediri</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">1995 – 1996</span><h6>Gedung DPRD Nganjuk &amp; RSU Haji Surabaya</h6><p>Pemerintah Kab. Nganjuk &amp; Dinas Kesehatan Jatim</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">1997 – 1999</span><h6>Asrama Haji Sukolilo &amp; Sarana Sosial PSBD</h6><p>Depag Ditjen Bimas Islam &amp; Kanwil Depsos Jatim</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">1999</span><h6>Gedung BAPPEDA Nganjuk &amp; Pelebaran Jalan</h6><p>Pemerintah Kabupaten Nganjuk</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot"></div><div class="np-tl-body"><span class="np-tl-year">2008</span><h6>Pagar TK/SD Bertaraf Internasional Tlogowaru</h6><p>Dinas Pendidikan Kota Malang</p></div></div>
        </div>
      </div>
      <div class="col-lg-6 ps-lg-5 np-col-right">
        <div class="np-col-title"><i class="fas fa-industry me-2"></i>Proyek Pilihan — Swasta &amp; Industri</div>
        <div class="np-timeline">
          <div class="np-tl-item"><div class="np-tl-dot np-tl-dot-alt"></div><div class="np-tl-body"><span class="np-tl-year">2000</span><h6>Pembangunan RS Panti Nirmala Malang (Tahap 2)</h6><p>Yayasan Rumah Sakit Panti Nirmala Malang</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot np-tl-dot-alt"></div><div class="np-tl-body"><span class="np-tl-year">2002</span><h6>Pembangunan Gudang PT. Sidobangun Plastic</h6><p>5 paket gudang &amp; jalan &middot; Malang</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot np-tl-dot-alt"></div><div class="np-tl-body"><span class="np-tl-year">2007 – 2022</span><h6>British American Tobacco (BAT) Indonesia</h6><p>6 paket proyek renovasi &amp; pembangunan fasilitas</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot np-tl-dot-alt"></div><div class="np-tl-body"><span class="np-tl-year">2013</span><h6>DRF, Vacuum &amp; Compressor Plant</h6><p>PT. Perusahaan Dagang dan Industri TRESNO</p></div></div>
          <div class="np-tl-item"><div class="np-tl-dot np-tl-dot-alt"></div><div class="np-tl-body"><span class="np-tl-year">2023</span><h6>Renovasi Lantai Area Milling &amp; BAT Projects</h6><p>PT. Indonusa Algaemas Prima &amp; PT. Bentoel Prima</p></div></div>
        </div>
      </div>
    </div>
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