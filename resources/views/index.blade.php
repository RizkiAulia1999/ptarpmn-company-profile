<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Source+Sans+3:wght@300;400;600&display=swap" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('/asset/css/style.css') }}" rel="stylesheet" />

</head>

<body>
    <!-- "Navbar" -->
    <nav class="navbar navbar-custom navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand p-0" href="#hero">
                <div class="navbar-brand-wrap">
                    <div class="brand-text">
                        <img src="{{ asset('/asset/img/ARYCON_Scnd_White_Tag.png') }}" width="200" height="60"
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

                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
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
                        <img src="{{ asset('/asset/img/ARYCON_Scnd_White_Tag.png') }}" width="200" height="60"
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
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#projects">Proyek</a></li>
                        <li><a href="#contact">Kontak</a></li>
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
                    <div class="footer-heading">Sertifikasi</div>
                    <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:4px">
                        <span style="border:1px solid rgba(212,135,10,.3);color:var(--primary);font-size:.72rem;padding:4px 10px;letter-spacing:1px">ISO 9001</span>
                        <span style="border:1px solid rgba(212,135,10,.3);color:var(--primary);font-size:.72rem;padding:4px 10px;letter-spacing:1px">ISO 14001</span>
                        <span style="border:1px solid rgba(212,135,10,.3);color:var(--primary);font-size:.72rem;padding:4px 10px;letter-spacing:1px">K3 OHSAS</span>
                        <span style="border:1px solid rgba(212,135,10,.3);color:var(--primary);font-size:.72rem;padding:4px 10px;letter-spacing:1px">LPJK Kelas A</span>
                        <span style="border:1px solid rgba(212,135,10,.3);color:var(--primary);font-size:.72rem;padding:4px 10px;letter-spacing:1px">SNI</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-between flex-wrap gap-2">
                <p>© 2026 PT. Aryantoputra Mitranusantara.</p>
                <p>Dibuat dengan <i class="fas fa-heart" style="color:var(--primary)"></i> menggunakan Laravel &amp; Bootstrap</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

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

    <!-- Corousel Logic -->
    <script>
        (function() {
            const track = document.getElementById('projTrack');
            const cards = Array.from(track.querySelectorAll('.proj-card'));
            const btnPrev = document.getElementById('projPrev');
            const btnNext = document.getElementById('projNext');
            const dotsWrap = document.getElementById('projDots');
            const progress = document.getElementById('projProgress');
            const counter = document.getElementById('slideCounter');
            const total = cards.length;
            let current = 0;
            let autoTimer = null;

            /* ── responsive: how many cards visible? ── */
            function visibleCount() {
                const w = window.innerWidth;
                if (w >= 1200) return 3;
                if (w >= 768) return 2;
                return 1;
            }

            /* ── card width including gap ── */
            function cardStep() {
                const gap = 24;
                return cards[0].offsetWidth + gap;
            }

            /* ── max index ── */
            function maxIndex() {
                return Math.max(0, total - visibleCount());
            }

            /* ── render ── */
            function render() {
                const idx = Math.min(current, maxIndex());
                track.style.transform = `translateX(-${idx * cardStep()}px)`;

                // counter
                counter.textContent = String(idx + 1).padStart(2, '0');

                // progress bar
                progress.style.width = ((idx + visibleCount()) / total * 100).toFixed(1) + '%';

                // dots
                Array.from(dotsWrap.querySelectorAll('.carousel-dot')).forEach((d, i) => {
                    d.classList.toggle('active', i === idx);
                });

                // buttons
                btnPrev.disabled = idx === 0;
                btnNext.disabled = idx >= maxIndex();
            }

            /* ── build dots ── */
            function buildDots() {
                dotsWrap.innerHTML = '';
                const count = maxIndex() + 1;
                for (let i = 0; i < count; i++) {
                    const d = document.createElement('button');
                    d.className = 'carousel-dot' + (i === 0 ? ' active' : '');
                    d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                    d.addEventListener('click', () => {
                        current = i;
                        render();
                        resetAuto();
                    });
                    dotsWrap.appendChild(d);
                }
            }

            /* ── nav buttons ── */
            btnNext.addEventListener('click', () => {
                if (current < maxIndex()) {
                    current++;
                    render();
                    resetAuto();
                }
            });
            btnPrev.addEventListener('click', () => {
                if (current > 0) {
                    current--;
                    render();
                    resetAuto();
                }
            });

            /* ── auto-play every 4 s ── */
            function startAuto() {
                autoTimer = setInterval(() => {
                    current = current >= maxIndex() ? 0 : current + 1;
                    render();
                }, 4000);
            }

            function resetAuto() {
                clearInterval(autoTimer);
                startAuto();
            }

            /* ── touch/swipe ── */
            let touchStartX = 0;
            track.addEventListener('touchstart', e => {
                touchStartX = e.touches[0].clientX;
            }, {
                passive: true
            });
            track.addEventListener('touchend', e => {
                const dx = e.changedTouches[0].clientX - touchStartX;
                if (Math.abs(dx) > 50) {
                    if (dx < 0 && current < maxIndex()) current++;
                    else if (dx > 0 && current > 0) current--;
                    render();
                    resetAuto();
                }
            });

            /* ── keyboard ── */
            document.addEventListener('keydown', e => {
                if (e.key === 'ArrowRight' && current < maxIndex()) {
                    current++;
                    render();
                    resetAuto();
                }
                if (e.key === 'ArrowLeft' && current > 0) {
                    current--;
                    render();
                    resetAuto();
                }
            });

            /* ── resize ── */
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    current = Math.min(current, maxIndex());
                    buildDots();
                    render();
                }, 150);
            });

            /* ── init ── */
            buildDots();
            render();
            startAuto();
        })();
    </script>
</body>

</html>