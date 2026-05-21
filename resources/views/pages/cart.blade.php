@extends('layouts.app')

@section('content')

<div class="container page-container" data-aos="fade-up">
    <h2 class="mb-4 fw-bold">Keranjang Belanja 🛒</h2>
    
    @if(session('cart') && count(session('cart')) > 0)
    <div class="row g-4">
        
        <!-- LEFT: Table -->
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table cart-table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach($cart as $id => $item)
                        @php 
                            $subtotal = $item['price'] * $item['qty'];
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>
                                <strong class="text-dark">{{ $item['name'] }}</strong>
                            </td>
                            <td>Rp {{ number_format($item['price']) }}</td>
                            <td>
                                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal">{{ $item['qty'] }}</span>
                            </td>
                            <td class="fw-bold">Rp {{ number_format($subtotal) }}</td>
                            <td>
                                <a href="/cart/remove/{{ $id }}" class="btn-remove">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
        <!-- RIGHT: Summary Box -->
        <div class="col-lg-4">
            <div class="cart-summary-box">
                <h5 class="fw-bold mb-3 border-bottom pb-2">Ringkasan Belanja</h5>
                <div class="d-flex justify-content-between mb-3 fs-5">
                    <span>Total:</span>
                    <span class="fw-bold text-coffee">Rp {{ number_format($total) }}</span>
                </div>
                <a href="/checkout" class="btn btn-coffee w-100 py-3 rounded-pill">
                    Lanjut ke Checkout 💳
                </a>
            </div>
        </div>
    
    </div>
    @else
    <div class="text-center py-5">
        <p class="fs-4 text-muted">Keranjang masih kosong ☕</p>
        <a href="/menu" class="btn btn-coffee px-4 py-3 rounded-pill mt-2">Belanja Sekarang</a>
    </div>
    @endif
</div>

@endsection