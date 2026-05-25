@extends('layouts.app')

@section('content')

{{-- ======================================================
     CART HERO SECTION
====================================================== --}}
<section class="cart-hero-section">
    <div class="cart-hero-overlay"></div>
    <div class="container position-relative">
        <div class="cart-hero-content text-center text-white" data-aos="fade-up">
            <span class="cart-hero-eyebrow">Pesanan Anda</span>
            <h1 class="cart-hero-title">Keranjang <span class="cart-hero-highlight">Belanja</span></h1>
            <p class="cart-hero-desc">Periksa pesanan Anda sebelum melanjutkan ke pembayaran.</p>
        </div>
    </div>
</section>

{{-- ======================================================
     CART MAIN CONTENT
====================================================== --}}
<section class="cart-main-section py-5">
    <div class="container">

        @if(session('cart') && count(session('cart')) > 0)

        {{-- BREADCRUMB --}}
        <div class="cart-breadcrumb" data-aos="fade-up">
            <span class="cart-breadcrumb-step active">
                <i class="fa-solid fa-cart-shopping"></i> Keranjang
            </span>
            <span class="cart-breadcrumb-arrow"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="cart-breadcrumb-step">
                <i class="fa-solid fa-credit-card"></i> Checkout
            </span>
            <span class="cart-breadcrumb-arrow"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="cart-breadcrumb-step">
                <i class="fa-solid fa-circle-check"></i> Selesai
            </span>
        </div>

        <div class="row g-4 align-items-start">

            {{-- ===================== LEFT: CART ITEMS ===================== --}}
            <div class="col-lg-8" data-aos="fade-up">
                <div class="cart-items-panel">

                    {{-- Panel Header --}}
                    <div class="cart-panel-header">
                        <div>
                            <h5 class="cart-panel-title">Item Pesanan</h5>
                            <p class="cart-panel-subtitle">
                                {{ count(session('cart')) }} item dalam keranjang Anda
                            </p>
                        </div>
                        <a href="/menu" class="cart-continue-link">
                            <i class="fa-solid fa-plus"></i> Tambah Item
                        </a>
                    </div>

                    {{-- Cart Items --}}
                    <div class="cart-item-list">
                        @php $total = 0; @endphp
                        @foreach($cart as $id => $item)
                        @php
                            $subtotal = $item['price'] * $item['qty'];
                            $total += $subtotal;
                        @endphp

                        <div class="cart-item-row">
                            {{-- Product Image Placeholder --}}
                            <div class="cart-item-img-wrap">
                                @if(isset($item['image']))
                                    <img src="{{ asset('assets/img/products/' . $item['image']) }}"
                                         alt="{{ $item['name'] }}"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                @endif
                                <div class="cart-item-img-fallback" @if(isset($item['image'])) style="display:none;" @endif>
                                    <i class="fa-solid fa-mug-hot"></i>
                                </div>
                            </div>

                            {{-- Item Details --}}
                            <div class="cart-item-details">
                                <h6 class="cart-item-name">{{ $item['name'] }}</h6>
                                <span class="cart-item-unit-price">Rp {{ number_format($item['price']) }} / item</span>
                            </div>

                            {{-- Qty --}}
                            <div class="cart-item-qty">
                                <span class="cart-qty-badge">× {{ $item['qty'] }}</span>
                            </div>

                            {{-- Subtotal --}}
                            <div class="cart-item-subtotal">
                                <span class="cart-subtotal-label">Subtotal</span>
                                <span class="cart-subtotal-value">Rp {{ number_format($subtotal) }}</span>
                            </div>

                            {{-- Remove --}}
                            <div class="cart-item-action">
                                <a href="/cart/remove/{{ $id }}" class="cart-remove-btn" title="Hapus item">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    {{-- Panel Footer --}}
                    <div class="cart-panel-footer">
                        <a href="/menu" class="cart-back-link">
                            <i class="fa-solid fa-arrow-left"></i> Kembali ke Menu
                        </a>
                    </div>

                </div>
            </div>

            {{-- ===================== RIGHT: ORDER SUMMARY ===================== --}}
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="cart-summary-panel">

                    {{-- Summary Header --}}
                    <div class="cart-summary-header">
                        <h5 class="cart-summary-title">
                            <i class="fa-solid fa-receipt"></i> Ringkasan Pesanan
                        </h5>
                    </div>

                    {{-- Summary Body --}}
                    <div class="cart-summary-body">

                        {{-- Item breakdown --}}
                        @foreach($cart as $id => $item)
                        @php $s = $item['price'] * $item['qty']; @endphp
                        <div class="cart-summary-row">
                            <span class="cart-summary-item-name">
                                {{ $item['name'] }}
                                <small>×{{ $item['qty'] }}</small>
                            </span>
                            <span class="cart-summary-item-price">Rp {{ number_format($s) }}</span>
                        </div>
                        @endforeach

                        <div class="cart-summary-divider"></div>

                        {{-- Promo / Discount placeholder --}}
                        <div class="cart-promo-wrap">
                            <input type="text" class="cart-promo-input" placeholder="Kode promo (opsional)">
                            <button class="cart-promo-btn">Pakai</button>
                        </div>

                        <div class="cart-summary-divider"></div>

                        {{-- Subtotal --}}
                        <div class="cart-summary-row">
                            <span>Subtotal</span>
                            <span>Rp {{ number_format($total) }}</span>
                        </div>
                        <div class="cart-summary-row">
                            <span>Pajak (0%)</span>
                            <span>Rp 0</span>
                        </div>

                        <div class="cart-summary-divider"></div>

                        {{-- Grand Total --}}
                        <div class="cart-summary-total">
                            <span>Total</span>
                            <span class="cart-total-value">Rp {{ number_format($total) }}</span>
                        </div>

                    </div>

                    {{-- Checkout Button --}}
                    <div class="cart-summary-footer">
                        <a href="/checkout" class="cart-checkout-btn">
                            <i class="fa-solid fa-lock me-2"></i>
                            Lanjut ke Checkout
                        </a>
                        <p class="cart-secure-note">
                            <i class="fa-solid fa-shield-halved"></i> Transaksi aman & terenkripsi
                        </p>
                    </div>

                </div>

                {{-- Info Cards --}}
                <div class="cart-info-cards mt-3">
                    <div class="cart-info-card">
                        <i class="fa-solid fa-clock"></i>
                        <div>
                            <strong>Estimasi Siap</strong>
                            <span>10–15 menit</span>
                        </div>
                    </div>
                    <div class="cart-info-card">
                        <i class="fa-solid fa-mug-hot"></i>
                        <div>
                            <strong>Fresh & Hot</strong>
                            <span>Selalu disajikan segar</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        @else

        {{-- ===================== EMPTY CART STATE ===================== --}}
        <div class="cart-empty-state" data-aos="fade-up">
            <div class="cart-empty-icon-wrap">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <h3 class="cart-empty-title">Keranjang Anda Kosong</h3>
            <p class="cart-empty-desc">
                Sepertinya Anda belum menambahkan menu apapun.<br>
                Yuk, temukan kopi favorit Anda!
            </p>
            <a href="/menu" class="cart-empty-btn">
                <i class="fa-solid fa-mug-hot me-2"></i> Lihat Menu Sekarang
            </a>

            {{-- Suggestion chips --}}
            <div class="cart-empty-suggestions">
                <span class="cart-empty-label">Populer :</span>
                <a href="/menu" class="cart-suggestion-chip">☕ Americano</a>
                <a href="/menu" class="cart-suggestion-chip">🍵 Matcha Latte</a>
                <a href="/menu" class="cart-suggestion-chip">🥐 Croissant</a>
            </div>
        </div>

        @endif

    </div>
</section>

@endsection