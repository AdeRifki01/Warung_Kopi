@extends('layouts.app')

@section('content')

<!-- HERO SECTION (FULL BLEED) -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6 text-white" data-aos="fade-right">
                <h1 class="hero-heading">
                    Savour the<br>
                    Perfect Brew
                </h1>
                <p class="hero-text mt-4">
                    Discover the essence of exquisite coffee beans,
                    with every bean naturally dried and processed
                    under the best conditions.
                </p>
                <div class="mt-4 d-flex gap-3">
                    <a href="/about" class="btn btn-outline-light px-4 py-2 rounded">
                        Our Cafe
                    </a>
                    <a href="/menu" class="btn btn-coffee px-4 py-2 rounded shadow-sm">
                        Buy Coffee
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="container-fluid py-5" data-aos="fade-up" style="background-color: #f5e6d3;">
    <div class="container">
        <!-- KEUNGGULAN: HEADING -->
        <div class="text-center mb-5">
            <h2 class="section-title fw-bold" style="font-size: 42px;">Why Choose Us</h2>
            <p class="section-text">
                Nikmati pengalaman ngopi premium dengan kualitas terbaik,
                pelayanan cepat, dan suasana nyaman setiap hari.
            </p>
    </div>
    <!-- KEUNGGULAN: ITEMS -->
    <div class="row g-4">
        <!-- ITEM 1 -->
        <div class="col-md-4">
            <div class="feature-card">
                <img src="{{ asset('assets/img/premiumBeans.jpg') }}" alt="Premium Beans">
                <div class="feature-overlay"></div>
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h5>Premium Beans</h5>
                    <p>
                        Biji kopi pilihan terbaik dari petani lokal
                        dengan kualitas premium terbaik.
                    </p>
                </div>
            </div>
        </div>
        <!-- ITEM 2 -->
        <div class="col-md-4">
            <div class="feature-card">
                <img src="{{ asset('assets/img/fastService.jpg') }}" alt="Fast Service">
                <div class="feature-overlay"></div>
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h5>Fast Service</h5>
                    <p>
                        Proses pemesanan cepat dan efisien
                        tanpa perlu menunggu lama.
                    </p>
                </div>
            </div>
        </div>
        <!-- ITEM 3 -->
        <div class="col-md-4">
            <div class="feature-card">
                <img src="{{ asset('assets/img/cozyPlace.jpg') }}" alt="Cozy Place">
                <div class="feature-overlay"></div>
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="bi bi-tree-fill"></i>
                    </div>
                    <h5>Cozy Place</h5>
                    <p>
                        Tempat nyaman untuk bekerja,
                        nongkrong, dan menikmati kopi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HAPPY HOURS SECTION -->
<section class="happy-section py-5">
    <div class="container">
        <div class="happy-wrapper">

            <!-- LEFT -->
            <div class="happy-left">
                <span class="happy-subtitle">
                    SPECIAL OFFER
                </span>
                <h2>
                    Morning Happy Hours
                </h2>
                <p>
                    Nikmati kopi premium terbaik dengan promo spesial
                    setiap pagi untuk menemani aktivitas harian Anda.
                </p>
                <div class="happy-buttons">
                    <a href="/menu" class="btn-happy-primary">
                        Order Coffee
                    </a>
                    <a href="/about" class="btn-happy-secondary">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- CENTER IMAGE -->
            <div class="happy-center">
                <img src="{{ asset('assets/img/products/coffee2.png') }}" alt="Coffee Cup">
            </div>

            <!-- RIGHT -->
            <div class="happy-right">
                <span class="happy-mini-text">
                    Visit us today
                </span>
                <h2>$200</h2>
                <p>
                    Special discount for
                    premium coffee package.
                </p>
                <a href="/booking" class="btn-happy-primary">
                    Booking
                </a>
            </div>
        </div>
    </div>
</section>

<!-- BEST MENU SECTION -->
<section class="coffee-menu-section py-5" data-aos="fade-up" style="background-color: #ECC9A8;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="coffee-section-title">Best Coffee Menu</h2>
            <p class="coffee-section-text">
                Nikmati pilihan kopi terbaik dengan rasa autentik
                dan tampilan modern premium.
            </p>
        </div>

        <div class="row g-4">
            <!-- ITEM 1 -->
            <div class="col-6 col-md-3">
                <div class="coffee-menu-card">
                    <div class="coffee-menu-image">
                        <img src="{{ asset('assets/img/products/coffee1.png') }}" alt="Espresso">
                    </div>
                    <div class="coffee-menu-content">
                        <h5>Espresso</h5>
                        <p>Strong coffee taste</p>
                        <div class="coffee-menu-footer">
                            <span class="coffee-price">Rp 15K</span>
                            <a href="#" class="coffee-order-btn">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ITEM 2 -->
            <div class="col-6 col-md-3">
                <div class="coffee-menu-card">
                    <div class="coffee-menu-image">
                        <img src="{{ asset('assets/img/products/coffee2.png') }}" alt="Latte">
                    </div>
                    <div class="coffee-menu-content">
                        <h5>Latte</h5>
                        <p>Creamy soft coffee</p>
                        <div class="coffee-menu-footer">
                            <span class="coffee-price">Rp 18K</span>
                            <a href="#" class="coffee-order-btn">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ITEM 3 -->
            <div class="col-6 col-md-3">
                <div class="coffee-menu-card">
                    <div class="coffee-menu-image">
                        <img src="{{ asset('assets/img/products/coffee3.png') }}" alt="Cappuccino">
                    </div>
                    <div class="coffee-menu-content">
                        <h5>Cappuccino</h5>
                        <p>Foam milk texture</p>
                        <div class="coffee-menu-footer">
                            <span class="coffee-price">Rp 20K</span>
                            <a href="#" class="coffee-order-btn">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ITEM 4 -->
            <div class="col-6 col-md-3">
                <div class="coffee-menu-card">
                    <div class="coffee-menu-image">
                        <img src="{{ asset('assets/img/products/matcha1.png') }}" alt="Matcha">
                    </div>
                    <div class="coffee-menu-content">
                        <h5>Matcha</h5>
                        <p>Green tea latte</p>
                        <div class="coffee-menu-footer">
                            <span class="coffee-price">Rp 17K</span>
                            <a href="#" class="coffee-order-btn">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BEST MENU SECTION -->

<!-- CTA SECTION -->
<section class="container py-5" data-aos="fade-up">
    <div class="cta-box text-center">
        <h3>Ready to order your coffee?</h3>
        <p>Nikmati rasa kopi berkualitas terbaik langsung di genggaman Anda hanya dengan beberapa langkah mudah.</p>
        <a href="/menu" class="btn btn-light px-5 py-3 rounded-pill fw-semibold shadow mt-4">Start Order Now ☕</a>
    </div>
</section>
<!-- END CTA SECTION -->

@endsection