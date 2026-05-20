@php
    $cartCount = session('cart') ? array_sum(array_column(session('cart'), 'qty')) : 0;
@endphp

<nav class="navbar navbar-expand-lg fixed-top"
    style="backdrop-filter: blur(10px); background: rgba(255,255,255,0.7); border-bottom: 1px solid #eee;">

	<div class="container">
		<a class="navbar-brand fw-bold" href="/" style="letter-spacing:1px;">
		☕ WarungKopi
		</a>

		<a href="#" class="nav-link position-relative" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
			🛒 Cart

			@if($cartCount > 0)
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					{{ $cartCount }}
				</span>
			@endif
		</a>
		
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="nav">
			<ul class="navbar-nav ms-auto gap-3">
				<li><a class="nav-link" href="/">Home</a></li>
				<li><a class="nav-link" href="/menu">Menu</a></li>
				<li><a class="nav-link" href="/cart">Cart</a></li>
			</ul>
		</div>
	</div>
</nav>

<div style="height:70px"></div>

<!-- CART SIDEBAR -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar">

	<div class="offcanvas-header">
		<h5 class="offcanvas-title">Your Cart 🛒</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
	</div>

	<div class="offcanvas-body">

		@php
			$cart = session('cart', []);
			$total = 0;
		@endphp

		@if(count($cart) > 0)

			@foreach($cart as $id => $item)
				@php
					$subtotal = $item['price'] * $item['qty'];
					$total += $subtotal;
				@endphp

				<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">

					<div>
						<strong>{{ $item['name'] }}</strong><br>
						<small>{{ $item['qty'] }} x Rp {{ number_format($item['price']) }}</small>
					</div>

					<div>
						<a href="/cart/remove/{{ $id }}" class="btn btn-sm btn-danger">x</a>
					</div>

				</div>
			@endforeach

			<hr>

			<h6>Total: Rp {{ number_format($total) }}</h6>

			<a href="/checkout" class="btn btn-dark w-100 mt-3 rounded-pill">
				Checkout
			</a>

		@else
			<p class="text-muted">Cart masih kosong ☕</p>
		@endif

	</div>

</div>