@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="row align-items-center py-5" data-aos="fade-up">
    <div class="col-md-6">
        <h1 class="display-4 fw-bold">
            Experience Coffee<br>Like Never Before ☕
        </h1>
        <p class="text-muted mt-3">
            Kami menyajikan kopi berkualitas premium dengan rasa autentik
            dan suasana modern yang nyaman untuk semua orang.
        </p>
        <div class="mt-4">
            <a href="/menu" class="btn btn-dark px-4 py-2 rounded-pill">
                Order Now
            </a>
            <a href="/menu" class="btn btn-outline-dark px-4 py-2 rounded-pill ms-2">
                View Menu
            </a>
        </div>
    </div>
    <div class="col-md-6 text-center">
        <img src="{{ asset('assets/img/logo.png') }}"
            class="img-fluid"
            style="max-height:420px;">
    </div>
</div>

<!-- FEATURES SECTION -->
<div class="row text-center mt-5" data-aos="fade-up">
    <div class="col-md-4 mb-3">
        <div class="p-4 shadow-sm rounded-4 bg-white">
            <h5>☕ Premium Beans</h5>
            <p class="text-muted small">
                Biji kopi pilihan terbaik dari petani lokal.
            </p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="p-4 shadow-sm rounded-4 bg-white">
            <h5>⚡ Fast Service</h5>
            <p class="text-muted small">
                Pesanan cepat, tanpa antri lama.
            </p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="p-4 shadow-sm rounded-4 bg-white">
            <h5>🌿 Cozy Place</h5>
            <p class="text-muted small">
                Suasana nyaman untuk kerja & santai.
            </p>
        </div>
    </div>
</div>

<!-- BEST MENU PREVIEW -->
<div class="mt-5" data-aos="fade-up">
    <h3 class="fw-bold mb-4 text-center">
        Best Coffee Selection
    </h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/img/coffee1.jpg') }}" class="img-fluid">
                <div class="p-3">
                    <h5>Americano</h5>
                    <p class="text-muted small">Strong & clean taste</p>
                    <span class="fw-bold">Rp 15.000</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/img/coffee2.jpg') }}" class="img-fluid">
                <div class="p-3">
                    <h5>Cappuccino</h5>
                    <p class="text-muted small">Creamy & smooth texture</p>
                    <span class="fw-bold">Rp 18.000</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/img/coffee3.jpg') }}" class="img-fluid">
                <div class="p-3">
                    <h5>Latte</h5>
                    <p class="text-muted small">Soft milk coffee</p>
                    <span class="fw-bold">Rp 20.000</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA SECTION -->
<div class="text-center mt-5 py-5 bg-dark text-white rounded-4">
    <h3 class="fw-bold">Ready to order your coffee?</h3>
    <p class="text-light">Nikmati kopi terbaik hanya dalam beberapa klik</p>
    <a href="/menu" class="btn btn-light px-4 py-2 rounded-pill mt-2">
        Start Order
    </a>
</div>

@endsection