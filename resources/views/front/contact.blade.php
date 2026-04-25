@extends('index')
@section('title', 'PT Aryantoputra Mitranusantara')
@section('content')
<!-- CONTACT -->
<section id="contact">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="section-label">Kontak</div>
        <h2 class="section-title light">Hubungi Kami</h2>
        <div class="title-line"></div>
         <!-- GOOGLE MAP -->
  <div class="map-inline mb-4">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1060416902374!2d112.6279258!3d-7.9879846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281bf04c2b75%3A0x669a0b963173d51d!2sPT.%20Aryantoputra%20Mitranusantara!5e0!3m2!1sen!2sid!4v1776842056689!5m2!1sen!2sid"
      loading="lazy"
      allowfullscreen=""
      style="border:0;">
    </iframe>
  </div>

        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <h6>Kantor Pusat</h6>
            <p>Jl. Nusakambangan No.34, Kasin<br/>Malang, Jawa Timur 65117</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
          <div>
            <h6>Telepon</h6>
            <p>0341-366043<br/>+62 819-0606-2622</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-envelope"></i></div>
          <div>
            <h6>Email</h6>
            <p>pt_arpmn@yahoo.co.id</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="fas fa-clock"></i></div>
          <div>
            <h6>Jam Operasional</h6>
            <p>Senin – Jumat: 08.00 – 16.00 WIB<br/>Sabtu: 08.00 – 14.00 WIB</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);padding:40px;">
          <h4 style="font-family:'Oswald',sans-serif;color:var(--white);margin-bottom:28px;font-size:1.4rem;">Kirim Pesan</h4>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label-dark">Nama Lengkap</label>
              <input type="text" class="form-control form-control-dark" placeholder="Nama Anda"/>
            </div>
            <div class="col-md-6">
              <label class="form-label-dark">No. Telepon</label>
              <input type="text" class="form-control form-control-dark" placeholder="+62 xxx-xxxx-xxxx"/>
            </div>
            <div class="col-12">
              <label class="form-label-dark">Email</label>
              <input type="email" class="form-control form-control-dark" placeholder="email@domain.com"/>
            </div>
            <div class="col-12">
              <label class="form-label-dark">Jenis Proyek</label>
              <select class="form-control form-control-dark" style="background:rgba(255,255,255,.05);cursor:pointer">
                <option value="" style="background:#1a2733">-- Pilih Jenis Proyek --</option>
                <option style="background:#1a2733">Building Construction</option>
                <option style="background:#1a2733">Interior & Finishing</option>
                <option style="background:#1a2733">General Infrastructure</option>
                <option style="background:#1a2733">Lainnya</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label-dark">Pesan</label>
              <textarea class="form-control form-control-dark" rows="4" placeholder="Deskripsikan kebutuhan proyek Anda..."></textarea>
            </div>
            <div class="col-12">
              <button class="btn-primary-custom w-100 text-center" style="clip-path:none;border-radius:0">
                <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection