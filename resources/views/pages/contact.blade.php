@extends('layouts.app')

@section('content')

{{-- ======================================================
     CONTACT HERO SECTION
====================================================== --}}
<section class="contact-hero-section">
    <div class="contact-hero-overlay"></div>
    <div class="container position-relative">
        <div class="contact-hero-content text-center text-white" data-aos="fade-up">
            <span class="contact-hero-eyebrow">Hubungi Kami</span>
            <h1 class="contact-hero-title">Get in <span class="contact-hero-highlight">Touch</span></h1>
            <p class="contact-hero-desc">
                Punya pertanyaan, saran, atau sekadar ingin menyapa? Kami selalu siap mendengar dan menyajikan yang terbaik untuk Anda.
            </p>
        </div>
    </div>
</section>

{{-- ======================================================
     CONTACT MAIN CONTENT
====================================================== --}}
<section class="contact-main-section py-5">
    <div class="container">
        <div class="row g-5 align-items-stretch">
            
            {{-- LEFT: Contact Info --}}
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contact-info-panel h-100">
                    <h3 class="contact-info-title">Informasi Kontak</h3>
                    <p class="contact-info-desc">
                        Kunjungi kedai kami untuk menikmati suasana yang nyaman atau hubungi kami secara online.
                    </p>
                    
                    <div class="contact-info-list">
                        {{-- Address --}}
                        <div class="contact-info-item">
                            <div class="contact-icon-wrap">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-text-wrap">
                                <strong>Lokasi Kedai</strong>
                                <span>Jl. Kopi Nusantara No. 123,<br>Jakarta Selatan, 12345</span>
                            </div>
                        </div>
                        
                        {{-- Phone --}}
                        <div class="contact-info-item">
                            <div class="contact-icon-wrap">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-text-wrap">
                                <strong>Telepon / WA</strong>
                                <span>+62 812 3456 7890</span>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="contact-info-item">
                            <div class="contact-icon-wrap">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-text-wrap">
                                <strong>Email</strong>
                                <span>hello@warungkopi.test</span>
                            </div>
                        </div>
                        
                        {{-- Hours --}}
                        <div class="contact-info-item">
                            <div class="contact-icon-wrap">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="contact-text-wrap">
                                <strong>Jam Operasional</strong>
                                <span>Senin - Jumat: 08.00 - 22.00<br>Sabtu - Minggu: 07.00 - 23.00</span>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Social Media --}}
                    <div class="contact-social-wrap mt-5">
                        <h6 class="contact-social-title">Ikuti Kami</h6>
                        <div class="contact-social-links">
                            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- RIGHT: Contact Form --}}
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form-panel">
                    <h3 class="contact-form-title">Kirim Pesan</h3>
                    <p class="contact-form-desc">Isi form di bawah ini dan tim kami akan segera menghubungi Anda.</p>
                    
                    <form action="#" method="POST" class="contact-form">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control premium-input" id="name" placeholder="Nama Lengkap" required>
                                    <label for="name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control premium-input" id="email" placeholder="Alamat Email" required>
                                    <label for="email">Alamat Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control premium-input" id="subject" placeholder="Subjek Pesan" required>
                                    <label for="subject">Subjek Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control premium-input" id="message" placeholder="Tulis pesan Anda disini..." style="height: 150px" required></textarea>
                                    <label for="message">Pesan Anda</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn contact-submit-btn w-100">
                                    Kirim Pesan Sekarang <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

{{-- ======================================================
     MAP SECTION
====================================================== --}}
<section class="contact-map-section" data-aos="fade-up">
    <div class="container-fluid p-0">
        <div class="map-wrapper">
            {{-- Placeholder for actual embedded map --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126917.84272115162!2d106.73295988358485!3d-6.240507323675091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x100c5e82dd4b820!2sJakarta%20Selatan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1689258273059!5m2!1sid!2sid" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            <div class="map-overlay-card d-none d-md-flex">
                <div class="map-icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h5>WarungKopi Pusat</h5>
                    <p>Mampir dan nikmati kopi kami hari ini!</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
