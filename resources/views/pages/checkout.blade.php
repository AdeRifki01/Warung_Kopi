@extends('layouts.app')

@section('content')

<div class="container page-container" data-aos="fade-up">
    <h2 class="fw-bold mb-4">Checkout 💳</h2>
    
    @php
        $cart = session('cart', []);
        $total = 0;
    @endphp
    
    @if(count($cart) > 0)
    
    <div class="row g-4">
    
        <!-- LEFT: FORM -->
        <div class="col-md-7">
    
            <div class="checkout-card">
    
                <h5 class="checkout-title">Data Pemesan</h5>
    
                <form action="#" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control rounded-3" name="name" placeholder="Masukkan nama lengkap" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">No WhatsApp</label>
                        <input type="text" class="form-control rounded-3" name="phone" placeholder="Contoh: 081234567890" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea class="form-control rounded-3" name="address" rows="3" placeholder="Masukkan alamat lengkap pengiriman" required></textarea>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Metode Pembayaran</label>
                        <select class="form-control rounded-3" name="payment">
                            <option>Cash</option>
                            <option>Transfer Bank</option>
                            <option>QRIS</option>
                        </select>
                    </div>
    
                    <button class="btn btn-coffee w-100 rounded-pill py-3 mt-3">
                        Place Order
                    </button>
    
                </form>
    
            </div>
    
        </div>
    
        <!-- RIGHT: ORDER SUMMARY -->
        <div class="col-md-5">
    
            <div class="checkout-card">
    
                <h5 class="checkout-title">Order Summary</h5>
    
                @foreach($cart as $item)
                    @php
                        $subtotal = $item['price'] * $item['qty'];
                        $total += $subtotal;
                    @endphp
    
                    <div class="order-item">
                        <div>
                            <strong class="text-dark">{{ $item['name'] }}</strong><br>
                            <small class="text-muted">
                                {{ $item['qty'] }} x Rp {{ number_format($item['price']) }}
                            </small>
                        </div>
    
                        <div class="fw-bold">
                            Rp {{ number_format($subtotal) }}
                        </div>
                    </div>
    
                @endforeach
    
                <hr class="my-3">
    
                <div class="d-flex justify-content-between fw-bold fs-5 mb-2">
                    <span>Total</span>
                    <span class="text-coffee">Rp {{ number_format($total) }}</span>
                </div>
    
                <p class="text-muted small mt-3 mb-0">
                    * Pastikan pesanan Anda sudah benar sebelum checkout
                </p>
    
            </div>
    
        </div>
    
    </div>
    
    @else
    
    <div class="text-center py-5">
        <h4 class="text-muted mb-3">Cart kamu masih kosong ☕</h4>
        <a href="/menu" class="btn btn-coffee mt-3 rounded-pill px-4 py-3">
            Kembali ke Menu
        </a>
    </div>
    
    @endif
</div>

@endsection