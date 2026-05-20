@extends('layouts.app')

@section('content')

<h2 class="mb-4 fw-bold">Keranjang Belanja 🛒</h2>

@if(session('cart'))
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Total</th>
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
            <td>{{ $item['name'] }}</td>
            <td>Rp {{ number_format($item['price']) }}</td>
            <td>{{ $item['qty'] }}</td>
            <td>Rp {{ number_format($subtotal) }}</td>
            <td>
                <a href="/cart/remove/{{ $id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<h4>Total: Rp {{ number_format($total) }}</h4>

<a href="/checkout" class="btn btn-dark mt-3">
    Lanjut Checkout
</a>
@else
<p>Keranjang masih kosong ☕</p>
@endif

@endsection