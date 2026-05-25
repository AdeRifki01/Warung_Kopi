@extends('layouts.app')

@section('content')

{{-- ======================================================
     ABOUT HERO SECTION
====================================================== --}}
<section class="about-hero-section">
    <div class="about-hero-overlay"></div>
    <div class="about-hero-particles">
        <span></span><span></span><span></span><span></span><span></span>
    </div>
    <div class="container position-relative">
        <div class="about-hero-content text-center text-white" data-aos="fade-up">
            <span class="about-hero-eyebrow">Our Story</span>
            <h1 class="about-hero-title">
                Lebih dari Sekedar<br>
                <span class="about-hero-highlight">Secangkir Kopi</span>
            </h1>
            <p class="about-hero-desc">
                Kami percaya setiap tegukan kopi adalah sebuah cerita — tentang dedikasi,<br class="d-none d-md-block">
                kualitas, dan kehangatan yang kami hadirkan untuk Anda.
            </p>
            <div class="about-hero-scroll-indicator">
                <span></span>
            </div>
        </div>
    </div>
</section>

{{-- ======================================================
     ABOUT STATS SECTION
====================================================== --}}
<section class="about-stats-section" data-aos="fade-up">
    <div class="container">
        <div class="about-stats-wrapper">
            <div class="about-stat-item">
                <div class="about-stat-icon"><i class="fa-solid fa-mug-hot"></i></div>
                <div class="about-stat-number" data-count="12000">0</div>
                <div class="about-stat-plus">+</div>
                <div class="about-stat-label">Cangkir Terjual</div>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <div class="about-stat-icon"><i class="fa-solid fa-store"></i></div>
                <div class="about-stat-number" data-count="5">0</div>
                <div class="about-stat-plus">+</div>
                <div class="about-stat-label">Cabang di Indonesia</div>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <div class="about-stat-icon"><i class="fa-solid fa-seedling"></i></div>
                <div class="about-stat-number" data-count="100">0</div>
                <div class="about-stat-plus">%</div>
                <div class="about-stat-label">Biji Kopi Lokal</div>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <div class="about-stat-icon"><i class="fa-solid fa-star"></i></div>
                <div class="about-stat-number" data-count="6">0</div>
                <div class="about-stat-plus">+</div>
                <div class="about-stat-label">Tahun Pengalaman</div>
            </div>
        </div>
    </div>
</section>

{{-- ======================================================
     ABOUT STORY SECTION
====================================================== --}}
<section class="about-story-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left: Image --}}
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-story-image-wrapper">
                    <img src="{{ asset('assets/img/bgCoffe1.jpg') }}"
                         class="about-story-img img-fluid"
                         alt="Warung Kopi Story">
                    <div class="about-story-badge">
                        <div class="badge-inner">
                            <span class="badge-year">2020</span>
                            <span class="badge-label">Berdiri Sejak</span>
                        </div>
                    </div>
                    <div class="about-story-floating-card">
                        <i class="fa-solid fa-award text-coffee"></i>
                        <div>
                            <strong>Best Local Coffee</strong>
                            <small>Award 2024</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Story --}}
            <div class="col-lg-6" data-aos="fade-left">
                <span class="about-section-eyebrow">Kisah Kami</span>
                <h2 class="about-section-title">
                    Berawal dari Passion,<br>Tumbuh dengan <span class="text-coffee">Cinta</span>
                </h2>
                <p class="about-story-text">
                    WarungKopi lahir dari hasrat mendalam untuk menyajikan secangkir kebahagiaan sejati kepada para
                    pecinta kopi. Kami percaya bahwa kopi berkualitas tinggi bukan hanya tentang rasa, melainkan
                    juga tentang cerita, dedikasi, dan momen hangat yang tercipta di setiap tegukan.
                </p>
                <p class="about-story-text">
                    Sejak tahun 2020, kami bekerja sama langsung dengan para petani kopi lokal untuk memilih biji kopi
                    terbaik yang diproses secara alami dan dipanggang secara presisi oleh roaster berpengalaman kami.
                </p>

                <div class="about-story-highlights">
                    <div class="about-highlight-item">
                        <div class="about-highlight-dot"></div>
                        <span>Sourcing langsung dari petani lokal terpercaya</span>
                    </div>
                    <div class="about-highlight-item">
                        <div class="about-highlight-dot"></div>
                        <span>Proses roasting presisi dengan mesin modern</span>
                    </div>
                    <div class="about-highlight-item">
                        <div class="about-highlight-dot"></div>
                        <span>Quality control ketat di setiap tahap produksi</span>
                    </div>
                </div>

                <a href="/menu" class="about-btn-primary mt-4 d-inline-flex align-items-center gap-2">
                    Jelajahi Menu Kami
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ======================================================
     ABOUT VALUES / WHY US SECTION
====================================================== --}}
<section class="about-values-section py-5" data-aos="fade-up">
    <div class="container">
        <div class="text-center mb-5">
            <span class="about-section-eyebrow">Komitmen Kami</span>
            <h2 class="about-section-title">Nilai yang Kami Pegang</h2>
            <p class="about-section-subtitle">
                Setiap langkah yang kami ambil selalu berlandaskan pada nilai-nilai inti yang menjadi DNA WarungKopi.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="about-value-card">
                    <div class="about-value-icon-wrap">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h5 class="about-value-title">Kualitas Premium</h5>
                    <p class="about-value-text">
                        Setiap biji kopi dipilih dengan teliti dari perkebunan terbaik Indonesia untuk memastikan cita rasa yang sempurna.
                    </p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="about-value-card about-value-card--featured">
                    <div class="about-value-icon-wrap">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h5 class="about-value-title">Dibuat dengan Hati</h5>
                    <p class="about-value-text">
                        Setiap cangkir adalah ekspresi cinta dan dedikasi kami untuk menghadirkan pengalaman kopi terbaik bagi Anda.
                    </p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="about-value-card">
                    <div class="about-value-icon-wrap">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h5 class="about-value-title">Berkelanjutan</h5>
                    <p class="about-value-text">
                        Kami berkomitmen mendukung petani lokal dan praktik pertanian berkelanjutan demi masa depan kopi Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ======================================================
     ABOUT JOURNEY / TIMELINE SECTION
====================================================== --}}
<section class="about-journey-section py-5" data-aos="fade-up">
    <div class="container">
        <div class="text-center mb-5">
            <span class="about-section-eyebrow">Perjalanan Kami</span>
            <h2 class="about-section-title">Setiap Langkah, Penuh Makna</h2>
        </div>

        <div class="about-timeline">
            <div class="about-timeline-item" data-aos="fade-right" data-aos-delay="0">
                <div class="about-timeline-year">2020</div>
                <div class="about-timeline-dot"></div>
                <div class="about-timeline-content">
                    <h5>WarungKopi Berdiri</h5>
                    <p>Dengan satu gerai kecil di Bandung, kami memulai perjalanan untuk menghadirkan kopi lokal berkualitas dunia.</p>
                </div>
            </div>
            <div class="about-timeline-item about-timeline-item--right" data-aos="fade-left" data-aos-delay="100">
                <div class="about-timeline-year">2021</div>
                <div class="about-timeline-dot"></div>
                <div class="about-timeline-content">
                    <h5>Ekspansi Pertama</h5>
                    <p>Membuka 2 cabang baru di Jakarta dan Yogyakarta, membuktikan bahwa cita rasa kami dicintai lebih banyak orang.</p>
                </div>
            </div>
            <div class="about-timeline-item" data-aos="fade-right" data-aos-delay="200">
                <div class="about-timeline-year">2022</div>
                <div class="about-timeline-dot"></div>
                <div class="about-timeline-content">
                    <h5>Kemitraan Petani</h5>
                    <p>Membangun program kemitraan langsung dengan 20+ petani kopi lokal di Aceh, Toraja, dan Flores.</p>
                </div>
            </div>
            <div class="about-timeline-item about-timeline-item--right" data-aos="fade-left" data-aos-delay="300">
                <div class="about-timeline-year">2024</div>
                <div class="about-timeline-dot"></div>
                <div class="about-timeline-content">
                    <h5>Penghargaan Best Local Coffee</h5>
                    <p>Meraih penghargaan bergengsi sebagai kafe kopi lokal terbaik dan membuka cabang ke-5 di Surabaya.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ======================================================
     ABOUT SECOND IMAGE + VISION SECTION
====================================================== --}}
<section class="about-vision-section py-5" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="about-vision-image-wrapper">
                    <img src="{{ asset('assets/img/bgCoffe2.jpg') }}"
                         class="img-fluid rounded-4 shadow-lg w-100"
                         style="object-fit: cover; height: 460px;"
                         alt="Our Vision">
                    <div class="about-vision-tag">
                        <i class="fa-solid fa-mug-hot"></i>
                        <span>Fresh Every Day</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <span class="about-section-eyebrow">Visi & Misi</span>
                <h2 class="about-section-title">
                    Membangun Budaya Kopi<br>yang <span class="text-coffee">Autentik</span>
                </h2>
                <p class="about-story-text">
                    Visi kami adalah menjadi jembatan antara petani kopi lokal dengan para pecinta kopi di seluruh Indonesia.
                    Kami percaya bahwa dengan mengangkat kopi lokal ke standar internasional, kita bisa bersama-sama
                    membangun ekosistem kopi yang lebih baik dan berkelanjutan.
                </p>

                <div class="about-mission-list">
                    <div class="about-mission-item">
                        <div class="about-mission-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <strong>Misi Kualitas</strong>
                            <span>Menyajikan kopi dengan standar kualitas tertinggi setiap hari</span>
                        </div>
                    </div>
                    <div class="about-mission-item">
                        <div class="about-mission-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <strong>Misi Komunitas</strong>
                            <span>Membangun komunitas kopi yang inklusif dan menginspirasi</span>
                        </div>
                    </div>
                    <div class="about-mission-item">
                        <div class="about-mission-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <strong>Misi Keberlanjutan</strong>
                            <span>Mendukung pertanian kopi yang ramah lingkungan dan adil</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ======================================================
     ABOUT CTA SECTION
====================================================== --}}
<section class="about-cta-section" data-aos="fade-up">
    <div class="container">
        <div class="about-cta-wrapper text-center">
            <div class="about-cta-icon">
                <i class="fa-solid fa-mug-hot"></i>
            </div>
            <h2 class="about-cta-title">Siap Merasakan Pengalaman WarungKopi?</h2>
            <p class="about-cta-text">
                Kunjungi kami sekarang dan temukan mengapa ribuan pelanggan jatuh cinta<br class="d-none d-md-block">
                dengan setiap tegukan kopi kami.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/menu" class="about-btn-primary">
                    <i class="fa-solid fa-mug-hot me-2"></i>Lihat Menu
                </a>
                <a href="/contact" class="about-btn-secondary">
                    <i class="fa-solid fa-location-dot me-2"></i>Temukan Lokasi
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
// Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.about-stat-number');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = Math.floor(current).toLocaleString('id-ID');
        }, 16);
    });
}

// Trigger counter when stats section is in view
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            statsObserver.disconnect();
        }
    });
}, { threshold: 0.3 });

const statsSection = document.querySelector('.about-stats-section');
if (statsSection) statsObserver.observe(statsSection);
</script>
@endpush
