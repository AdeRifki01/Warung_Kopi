@extends('layouts.app')

@section('content')

<div class="container page-container">
    <div class="about-container" data-aos="fade-up">
        <div class="row align-items-center g-5">
            
            <!-- Left: Story & Values -->
            <div class="col-lg-6">
                <h6 class="text-uppercase fw-bold text-coffee mb-2">Our Story</h6>
                <h2 class="fw-bold mb-4">Tentang WarungKopi</h2>
                <p class="text-muted leading-relaxed mb-3">
                    WarungKopi lahir dari hasrat mendalam untuk menyajikan secangkir kebahagiaan sejati kepada para pecinta kopi. Kami percaya bahwa kopi berkualitas tinggi bukan hanya tentang rasa, melainkan juga tentang cerita, dedikasi, dan momen hangat yang tercipta di setiap tegukan.
                </p>
                <p class="text-muted leading-relaxed mb-4">
                    Sejak tahun 2020, kami bekerja sama langsung dengan para petani kopi lokal untuk memilih biji kopi terbaik yang diproses secara alami dan dipanggang secara presisi oleh roaster berpengalaman kami.
                </p>
                
                <div class="row g-4 mt-2">
                    <div class="col-6">
                        <h3 class="fw-bold text-coffee mb-1">100%</h3>
                        <p class="text-muted small mb-0">Biji Kopi Lokal Premium</p>
                    </div>
                    <div class="col-6">
                        <h3 class="fw-bold text-coffee mb-1">5+</h3>
                        <p class="text-muted small mb-0">Cabang di Indonesia</p>
                    </div>
                </div>
            </div>
            
            <!-- Right: Image with Badge -->
            <div class="col-lg-6">
                <div class="about-image-wrapper position-relative">
                    <img src="{{ asset('assets/img/bgCoffe1.jpg') }}" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; height: 420px;" alt="Warung Kopi Story">
                    <div class="experience-badge bg-dark text-white p-3 rounded-3 position-absolute bottom-0 start-0 m-4 shadow">
                        <span class="fw-bold d-block h5 mb-0 text-coffee">6+ Tahun</span>
                        <small class="text-light">Menyajikan Kualitas</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
