@extends('layouts.app')

@section('content')

<h2 class="fw-bold mb-4">Checkout 💳</h2>

@php
    $cart = session('cart', []);
    $total = 0;
@endphp

@if(count($cart) > 0)

<div class="row g-4">

    <!-- LEFT: FORM -->
    <div class="col-md-7">

        <div class="card border-0 shadow-sm rounded-4 p-4">

            <h5 class="mb-3">Data Pemesan</h5>

            <form action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control rounded-3" name="name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No WhatsApp</label>
                    <input type="text" class="form-control rounded-3" name="phone" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control rounded-3" name="address" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Metode Pembayaran</label>
                    <select class="form-control rounded-3" name="payment">
                        <option>Cash</option>
                        <option>Transfer Bank</option>
                        <option>QRIS</option>
                    </select>
                </div>

                <button class="btn btn-dark w-100 rounded-pill py-2 mt-2">
                    Place Order
                </button>

            </form>

        </div>

    </div>

    <!-- RIGHT: ORDER SUMMARY -->
    <div class="col-md-5">

        <div class="card border-0 shadow-sm rounded-4 p-4">

            <h5 class="mb-3">Order Summary</h5>

            @foreach($cart as $item)
                @php
                    $subtotal = $item['price'] * $item['qty'];
                    $total += $subtotal;
                @endphp

                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <strong>{{ $item['name'] }}</strong><br>
                        <small class="text-muted">
                            {{ $item['qty'] }} x Rp {{ number_format($item['price']) }}
                        </small>
                    </div>

                    <div>
                        Rp {{ number_format($subtotal) }}
                    </div>
                </div>

            @endforeach

            <hr>

            <div class="d-flex justify-content-between fw-bold">
                <span>Total</span>
                <span>Rp {{ number_format($total) }}</span>
            </div>

            <p class="text-muted small mt-2">
                * Pastikan pesanan Anda sudah benar sebelum checkout
            </p>

        </div>

    </div>

</div>

@else

<div class="text-center py-5">
    <h4>Cart kamu masih kosong ☕</h4>
    <a href="/menu" class="btn btn-dark mt-3 rounded-pill">
        Kembali ke Menu
    </a>
</div>

@endif

@endsection