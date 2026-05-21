@php
    $cartCount = session('cart') ? array_sum(array_column(session('cart'), 'qty')) : 0;
@endphp

<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand fw-bold" href="/">
			<i class="bi bi-cup-hot-fill"></i> Coffee Shop
		</a>
		<a href="#" class="nav-link position-relative" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
			<i class="bi bi-cart4"></i> Cart

			<!-- @if($cartCount > 0)
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					{{ $cartCount }}
				</span>
			@endif -->
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="nav">
			<ul class="navbar-nav ms-auto gap-3">
				<li><a class="nav-link" href="/">Home</a></li>
				<li><a class="nav-link" href="/menu">Menu</a></li>
				<li><a class="nav-link" href="/about">About</a></li>
				<li><a class="nav-link" href="/cart">Cart</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- CART SIDEBAR -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title fw-bold">
			<i class="bi bi-bag-check-fill me-2"></i>
			Order Cart
		</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
	</div>
	<div class="offcanvas-body cart-body">
		@php
			$cart = session('cart', []);
			$total = 0;
		@endphp

		@if(count($cart) > 0)
			<div class="cart-items">
				@foreach($cart as $id => $item)
					@php
						$subtotal = $item['price'] * $item['qty'];
						$total += $subtotal;
					@endphp
					<div class="cart-item-card">
						<div class="d-flex justify-content-between align-items-start">
							<div>
								<h6 class="fw-bold mb-1">
									{{ $item['name'] }}
								</h6>
								<small class="text-muted">
									Qty {{ $item['qty'] }}
								</small>
							</div>
							<a href="/cart/remove/{{ $id }}" class="cart-remove-btn">
								<i class="bi bi-x-lg"></i>
							</a>
						</div>
						<div class="mt-3 d-flex justify-content-between align-items-center">
							<span class="text-muted small">
								Rp {{ number_format($item['price']) }}
							</span>
							<strong>
								Rp {{ number_format($subtotal) }}
							</strong>
						</div>
					</div>
				@endforeach
			</div>

			<!-- TOTAL -->
			<div class="cart-total-box">
				<div class="d-flex justify-content-between mb-2">
					<span>Total</span>
					<strong>Rp {{ number_format($total) }}</strong>
				</div>
				<a href="/checkout" class="btn btn-dark w-100 rounded-pill py-3 mt-3">
					Proceed to Checkout
				</a>
			</div>
		@else
			<div class="empty-cart-state">
				<div class="empty-cart-icon">
					<i class="bi bi-bag-x"></i>
				</div>
				<h5 class="mt-3 fw-bold">
					Cart is Empty
				</h5>
				<p class="text-muted small">
					Looks like you haven't added
					your favorite coffee yet.
				</p>
				<a href="/menu" class="btn btn-dark rounded-pill px-4 mt-2">
					Explore Menu
				</a>
			</div>
		@endif
	</div>
</div>