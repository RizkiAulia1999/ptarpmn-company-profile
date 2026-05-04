<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="/asset/img/ARYCON_Logomark_Biru_Flat.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Source+Sans+3:wght@300;400;600&display=swap" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/beranda.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/proyek.css') }}" rel="stylesheet" />


</head>

<body>
    <!-- "Navbar" -->
    <nav class="navbar navbar-custom navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand p-0" href="#hero">
                <div class="navbar-brand-wrap">
                    <div class="brand-text">
                        <img src="{{ asset('/asset/img/ARYCON_Scnd_Outline_White_Tag.png') }}" width="200" height="60"
                            alt="PT Aryantoputra Mitranusantara">
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('tentang') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('proyek') }}">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}#testimonials">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="footer-desc">
                        <img src="{{ asset('/asset/img/ARYCON_Scnd_Outline_White_Tag.png') }}" width="200" height="60"
                            alt="PT Aryantoputra Mitranusantara">
                    </div>
                    <p class="footer-desc">Perusahaan jasa konstruksi berpengalaman yang melayani pekerjaan sipil, mekanikal, kelistrikan, dan perpipaan sejak 1988.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-heading">Navigasi</div>
                    <ul class="footer-links">
                        <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('beranda') }}#services">Layanan</a></li>
                        <li><a href="{{ route('proyek') }}">Proyek</a></li>
                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-heading">Layanan</div>
                    <ul class="footer-links">
                        <li><a href="#">Building Construction</a></li>
                        <li><a href="#">Interior & Finishing</a></li>
                        <li><a href="#">General Infrastructure</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="footer-heading">Kontak</div>
                    <p style="color:rgba(255,255,255,.45);font-size:.82rem;line-height:1.7">
                        Jl. Nusakambangan No.34<br />
                        Malang, Jawa Timur, Indonesia 65117<br /><br />
                        0341-366043<br>
                        0819-0606-2622<br />
                        pt_arpmn@yahoo.co.id
                    </p>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-between flex-wrap gap-2">
                <p>© 2026 PT. Aryantoputra Mitranusantara.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Active nav link on scroll
        const sections = document.querySelectorAll('section[id], #hero');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const backTop = document.getElementById('backTop');

        window.addEventListener('scroll', () => {
            const pos = window.scrollY + 100;
            sections.forEach(sec => {
                if (pos >= sec.offsetTop && pos < sec.offsetTop + sec.offsetHeight) {
                    navLinks.forEach(l => l.classList.remove('active', 'text-white'));
                    const active = document.querySelector(`.navbar-nav .nav-link[href="#${sec.id}"]`);
                    if (active) {
                        active.classList.add('active');
                        active.style.color = '#fff';
                    }
                }
            });
            backTop.classList.toggle('visible', window.scrollY > 400);
        });

        // Smooth close mobile menu on link click
        document.querySelectorAll('.navbar-nav .nav-link').forEach(l => {
            l.addEventListener('click', () => {
                const toggler = document.querySelector('.navbar-toggler');
                const menu = document.getElementById('navMenu');
                if (menu.classList.contains('show')) toggler.click();
            });
        });
    </script>
    <!-- Animasi Counter -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const startYear = 1988;
            const currentYear = new Date().getFullYear();
            const experienceTarget = currentYear - startYear;

            const counters = document.querySelectorAll(".counter");

            counters.forEach(counter => {
                let targetType = counter.getAttribute("data-target");
                let target = 0;

                // Tentukan target
                if (targetType === "experience") {
                    target = experienceTarget;
                } else if (targetType === "project") {
                    target = parseInt(counter.getAttribute("data-value")) || 0;
                }

                let count = 0;
                const speed = 60;

                const update = () => {
                    if (count < target) {
                        count++;
                        counter.innerText = count;
                        setTimeout(update, speed);
                    } else {
                        counter.innerText = target + "+";
                    }
                };

                update();
            });

        });
    </script>

    <!-- Corousel  PORTFOLIO Logic -->
    <script>
        (function() {
            const track = document.getElementById('projTrack');
            const btnPrev = document.getElementById('projPrev');
            const btnNext = document.getElementById('projNext');
            const fill = document.getElementById('projFill');
            const curEl = document.getElementById('projCur');
            const maxEl = document.getElementById('projMax');
            const dotsEl = document.getElementById('projDots');

            const cards = Array.from(track.querySelectorAll('.proj-card'));
            const TOTAL = cards.length;
            let perView = calcPerView();
            let current = 0;
            let autoId = null;

            maxEl.textContent = pad(TOTAL);

            function buildDots() {
                dotsEl.innerHTML = '';
                const pages = TOTAL - perView;
                for (let i = 0; i <= pages; i++) {
                    const d = document.createElement('div');
                    d.className = 'pdot' + (i === current ? ' on' : '');
                    d.addEventListener('click', () => {
                        stopAuto();
                        go(i);
                        startAuto();
                    });
                    dotsEl.appendChild(d);
                }
            }

            function calcPerView() {
                return window.innerWidth >= 992 ? 3 : window.innerWidth >= 576 ? 2 : 1;
            }

            function cardWidth() {
                const gap = 24;
                const vp = track.parentElement.offsetWidth;
                return (vp - gap * (perView - 1)) / perView;
            }

            function pad(n) {
                return String(n).padStart(2, '0');
            }

            function go(idx) {
                const maxIdx = TOTAL - perView;
                current = Math.max(0, Math.min(idx, maxIdx));
                const cw = cardWidth();
                const off = current * (cw + 24);
                track.style.transform = `translateX(-${off}px)`;
                curEl.textContent = pad(current + 1);
                fill.style.width = (maxIdx === 0 ? 100 : (current / maxIdx) * 100) + '%';
                btnPrev.disabled = current === 0;
                btnNext.disabled = current >= maxIdx;
                dotsEl.querySelectorAll('.pdot').forEach((d, i) => d.classList.toggle('on', i === current));
            }

            function startAuto() {
                autoId = setInterval(() => {
                    go(current >= TOTAL - perView ? 0 : current + 1);
                }, 5000);
            }

            function stopAuto() {
                clearInterval(autoId);
            }

            btnPrev.addEventListener('click', () => {
                stopAuto();
                go(current - 1);
                startAuto();
            });
            btnNext.addEventListener('click', () => {
                stopAuto();
                go(current + 1);
                startAuto();
            });

            /* Touch swipe */
            let sx = 0;
            track.addEventListener('touchstart', e => {
                sx = e.touches[0].clientX;
                stopAuto();
            }, {
                passive: true
            });
            track.addEventListener('touchend', e => {
                const d = sx - e.changedTouches[0].clientX;
                if (Math.abs(d) > 44) go(d > 0 ? current + 1 : current - 1);
                startAuto();
            });

            /* Resize */
            let rTimer;
            window.addEventListener('resize', () => {
                clearTimeout(rTimer);
                rTimer = setTimeout(() => {
                    const pv = calcPerView();
                    if (pv !== perView) {
                        perView = pv;
                        buildDots();
                    }
                    go(Math.min(current, TOTAL - perView));
                }, 160);
            });

            buildDots();
            go(0);
            startAuto();
        })();
    </script>
<script>
  /* ── FILTER ── */
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const f = btn.dataset.filter;
      document.querySelectorAll('.proj-item').forEach(item => {
        const cat = (item.dataset.cat || 'all');
        if (f === 'all' || cat.split(' ').includes(f)) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });
    });
  });

  /* ── MODAL ── */
  function openModal(card) {
    const img   = card.querySelector('.p-img');
    const d     = card.closest('.proj-item') || card.parentElement.closest('.proj-item') || card.parentElement;

    document.getElementById('modalTitle').textContent  = card.closest('.proj-item').dataset.title || card.querySelector('h5').textContent;
    document.getElementById('modalImg').src            = img.src;
    document.getElementById('modalImg').alt            = img.alt;
    document.getElementById('modalClient').textContent = card.closest('.proj-item').dataset.client || '–';
    document.getElementById('modalYear').textContent   = card.closest('.proj-item').dataset.tahun  || '–';
    document.getElementById('modalSpk').textContent    = 'No. ' + (card.closest('.proj-item').dataset.spk || '–');
    document.getElementById('modalDesc').textContent   = card.closest('.proj-item').dataset.desc   || '–';
    new bootstrap.Modal(document.getElementById('projectModal')).show();
  }

  /* ── BACK TO TOP ── */
  window.addEventListener('scroll', () => {
    document.getElementById('backTop').classList.toggle('visible', window.scrollY > 400);
  });

  /* ── NAVBAR CLOSE ON MOBILE ── */
  document.querySelectorAll('.navbar-nav .nav-link').forEach(l => {
    l.addEventListener('click', () => {
      const menu = document.getElementById('navMenu');
      if (menu.classList.contains('show')) document.querySelector('.navbar-toggler').click();
    });
  });
</script>

    
</body>

</html>