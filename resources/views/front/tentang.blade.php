@extends('index')
@section('title', 'PT Aryantoputra Mitranusantara')
@section('content')
<!-- PAGE HERO -->
<div class="page-hero">
    <div class="geo-shape geo-1"></div>
    <div class="geo-shape geo-2" style="clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%)"></div>
    <div class="container">
        <div class="page-hero-badge"><i class="fas fa-hard-hat me-2"></i>Profil Perusahaan</div>
        <h1>Tentang <span class="accent">ARYCON</span></h1>
        <div class="breadcrumb-wrap">
            <a href="index.html"><i class="fas fa-home me-1"></i>Beranda</a>
            <span>›</span>
            <span class="current">Tentang Kami</span>
        </div>
    </div>
</div>

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
                <div class="section-label"><i class="fas fa-hard-hat me-2"></i>PROFIL PERUSAHAAN</div>
                <div class="title-line"></div>
                <p class="section-desc mb-4">PT. Aryantoputra Mitranusantara merupakan sebuah perusahaan yang bergerak dalam bidang jasa konstruksi sejak tahun 1988. Pelayanan yang kami sediakan antara lain berbagai macam kebutuhan konstruksi seperti pekerjaan sipil, mekanikal, kelistrikan dan perpipaan di dalam aplikasi bangunan industri, komersil maupun residensi.</p>
                <p class="section-desc mb-4">Sejak pendirian perusahaan, kami telah dipercaya untuk melaksanakan proyek-proyek pembangunan, renovasi dan pemeliharaan dari sektor pemerintahan maupun swasta.</p>
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="about-feature">
                            <div class="about-feature-icon"><i class="fas fa-lightbulb"></i></div>
                            <div>
                                <h6>Problem Solving</h6>
                                <p>Mampu memecahkan masalah berdasarkan analisa yang konkret.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-feature">
                            <div class="about-feature-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <h6>Efisiensi Waktu</h6>
                                <p>Mampu bekerja dalam tekanan untuk dapat memenuhi target klien</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-feature">
                            <div class="about-feature-icon"><i class="fas fa-coins"></i></div>
                            <div>
                                <h6>Efisiensi Biaya</h6>
                                <p>Mampu memberikan solusi yang efisiensi terhadap biaya kepada klien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-feature">
                            <div class="about-feature-icon"><i class="fas fa-puzzle-piece"></i></div>
                            <div>
                                <h6>One Stop Solution</h6>
                                <p>Menghadirkan segalam macam kebutuhan bangunan impian klien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->

<!-- Visi Misi -->
<section id="services">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <div class="section-label">Komitmen Kami</div>
                <h2 class="section-title">Visi &amp; Misi</h2>
                <div class="title-line mx-auto"></div>
            </div>
        </div>

        <!-- Tagline -->
        <div class="text-center mb-5">
            <div style="background:rgb(110, 79, 79, 0.05);border:1px solid rgba(29, 17, 17, 0.1);border-radius:16px;padding:32px;display:inline-block;max-width:700px">
                <p style="font-size:clamp(1.4rem,3vw,2rem);font-weight:800;color:var(--dark);line-height:1.3;margin:0">
                    "Constructing <span style="color:rgb(00, 121, 109);">Quality,</span><br />
                    Building <span style="color:rgb(00, 121, 109);">Trust</span>"
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-eye"></i>
                    </div>
                    <h5>Visi</h5>
                    <p>Menjadi penyedia jasa konstruksi yang dapat memberikan pelayanan yang terpercaya, bermutu dan efektif serta dapat membangun kesejahteraan karyawannya.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-bullseye"></i></div>
                    <h5>Misi</h5>
                    <ul class="svc-sub-list">
                        <li>Memberikan harga yang kompetitif</li>
                        <li>Menyelesaikan pekerjaan sesuai skedul yang direncanakan</li>
                        <li>Menjaga kualitas pekerjaan</li>
                        <li>Mengutamakan efektifitas dalam pekerjaan</li>
                        <li>Mengedepankan inovasi</li>
                        <li>Menumbuhkan kepercayaan dengan menjaga integritas</li>
                        <li>Mendahulukan keselamatan dan kesejahteraan karyawan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Visi Misi -->

<!-- ═══════════ COMPANY CULTURE ═══════════ -->
<section id="culture">
  <div class="container" style="position:relative;z-index:1">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <div class="section-eyebrow" style="color:rgb(00, 121, 109);justify-content:center">
          Budaya Kerja
        </div>
        <h2 class="section-title light">Company Culture</h2>
         <div class="title-line mx-auto"></div>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="culture-card">
          <div class="culture-img-wrap"><i class="fas fa-user-check"></i></div>
          <div class="culture-label">Disiplin</div>
          <p class="culture-desc">Memiliki tanggung jawab untuk dapat menyelesaikan pekerjaan dengan baik dan tepat waktu, juga untuk dapat mentaati semua ketentuan organisasi.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="culture-card">
          <div class="culture-img-wrap"><i class="fas fa-users"></i></div>
          <div class="culture-label">Teamwork</div>
          <p class="culture-desc">Memiliki kemampuan untuk dapat bekerja sama dengan tim dengan baik dengan mengutamakan komunikasi dan karakter yang baik.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="culture-card">
          <div class="culture-img-wrap"><i class="fas fa-bolt"></i></div>
          <div class="culture-label">Proaktif</div>
          <p class="culture-desc">Memiliki inisiatif untuk bertindak aktif di dalam kegiatan perusahaan demi mencapai tujuan bersama yang lebih baik.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End Culture -->

<!-- ═══════════ SOCIAL COMMITMENT ═══════════ -->
<section id="social">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <div class="section-eyebrow" style="justify-content:center;color:rgb(00, 121, 109)">Tanggung Jawab</div>
        <h2 class="section-title">Social Commitment</h2>
                 <div class="title-line mx-auto"></div>

      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="social-card">
          <div class="social-icon-box"><i class="fas fa-graduation-cap"></i></div>
          <div>
            <h6>Skill Development Program</h6>
            <p>Memberikan kesempatan bagi setiap orang untuk dapat meningkatkan kemampuannya dengan memberikan pelatihan secara teknis dan karakter.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="social-card">
          <div class="social-icon-box"><i class="fas fa-leaf"></i></div>
          <div>
            <h6>Menjaga Lingkungan</h6>
            <p>Menaati peraturan pemerintah soal pengolahan limbah konstruksi dan memastikan setiap site proyek ramah lingkungan.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="social-card">
          <div class="social-icon-box"><i class="fas fa-hard-hat"></i></div>
          <div>
            <h6>Keselamatan Karyawan</h6>
            <p>Mengutamakan keselamatan kerja dan memberikan ruang kerja yang nyaman bagi seluruh karyawan perusahaan dengan penerapan K3 yang ketat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="social-card">
          <div class="social-icon-box"><i class="fas fa-heart"></i></div>
          <div>
            <h6>Kesejahteraan Karyawan</h6>
            <p>Berkomitmen meningkatkan kesejahteraan setiap anggota tim, termasuk jaminan sosial dan program pengembangan karier berkelanjutan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════ LICENSING ═══════════ -->
<section id="licensing" style="background:rgb(14,28,41);padding:72px 0">
  <div class="container" style="position:relative;z-index:1">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <h2 class="section-title light">Lisensi & Sertifikasi</h2>
        <p class="section-desc light">Semua dokumen perizinan resmi terpenuhi, menjamin legalitas dan kepercayaan setiap proyek yang kami tangani.</p>
      </div>
      <div class="col-lg-7">
        <div class="d-flex flex-wrap gap-3">
          <div class="license-chip"><i class="fas fa-file-alt"></i> Akta Pendirian</div>
          <div class="license-chip"><i class="fas fa-file-signature"></i> Akta Perubahan</div>
          <div class="license-chip"><i class="fas fa-id-card"></i> IUJK</div>
          <div class="license-chip"><i class="fas fa-registered"></i> NIB</div>
          <div class="license-chip"><i class="fas fa-certificate"></i> SBU BG 001</div>
          <div class="license-chip"><i class="fas fa-certificate"></i> SBU BG 003</div>
          <div class="license-chip"><i class="fas fa-certificate"></i> SBU BG 005</div>
          <div class="license-chip"><i class="fas fa-certificate"></i> SBU BG 006</div>
          <div class="license-chip"><i class="fas fa-certificate"></i> SBU BG 009</div>
          <div class="license-chip"><i class="fas fa-shield-alt"></i> K3 Kemenaker</div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection