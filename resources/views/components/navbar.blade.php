@php
    $cartCount = session('cart')
        ? array_sum(array_column(session('cart'), 'qty'))
        : 0;
@endphp

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">
        <div class="navbar-wrapper">

            <!-- LOGO -->
            <a class="navbar-brand" href="/">
                <span class="brand-icon">
                    <i class="fa-solid fa-mug-hot"></i>
                </span>
                <span class="brand-text">
                    CoffeeShop
                </span>
            </a>
			
			<!-- MOBILE TOGGLER -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
				<i class="bi bi-list"></i>
			</button>

            <!-- MENU -->
            <div class="collapse navbar-collapse mobile-menu" id="navMenu">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" href="/">
							Home
                        </a>
                    </li>
					<li class="nav-item">
						<a class="nav-link" href="/about">
							About
						</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="/menu">
							Menu
                        </a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="/gallery">
							Gallery
                        </a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="/contact">
							Contact
                        </a>
                    </li>
                </ul>
            </div>
			
            
        </div>
    </div>
</nav>