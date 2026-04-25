@extends('index')
@section('title', 'PT Aryantoputra Mitranusantara')
@section('content')
<!-- PAGE HERO -->
<div class="page-hero">
    <div class="geo-shape geo-1"></div>
    <div class="geo-shape geo-2" style="clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%)"></div>
    <div class="container">
        <div class="page-hero-badge"><i class="fas fa-hard-hat me-2"></i>Portofolio</div>
        <h1>Proyek <span class="accent">ARYCON</span></h1>
        <div class="breadcrumb-wrap">
            <a href="index.html"><i class="fas fa-home me-1"></i>Beranda</a>
            <span>›</span>
            <span class="current">Proyek Kami</span>
        </div>
    </div>
</div>

<!-- ══════════ STAT RIBBON ══════════ -->
<!-- <div class="stat-ribbon">
  <div class="container">
    <div class="stat-ribbon-inner">
      <div class="sr-item"><div class="sr-num">1988</div><div class="sr-lbl">Mulai Berkarya</div></div>
      <div class="sr-divider d-none d-md-block"></div>
      <div class="sr-item"><div class="sr-num">300+</div><div class="sr-lbl">Proyek Selesai</div></div>
      <div class="sr-divider d-none d-md-block"></div>
      <div class="sr-item"><div class="sr-num">3</div><div class="sr-lbl">Bidang Layanan</div></div>
      <div class="sr-divider d-none d-md-block"></div>
      <div class="sr-item"><div class="sr-num">35+</div><div class="sr-lbl">Tahun Pengalaman</div></div>
    </div>
  </div>
</div> -->

<!-- FILTER -->
<section id="filter-section">
  <div class="container">
    <div class="filter-bar" id="filterBar">
      <button class="filter-btn active" data-filter="all">Semua Proyek</button>
      <button class="filter-btn" data-filter="gedung">Gedung &amp; Komersial</button>
      <button class="filter-btn" data-filter="industri">Kawasan Industri</button>
      <button class="filter-btn" data-filter="residensial">Residensial</button>
      <button class="filter-btn" data-filter="air">Pekerjaan Sipil</button>
    </div>
  </div>
</section>
@endsection