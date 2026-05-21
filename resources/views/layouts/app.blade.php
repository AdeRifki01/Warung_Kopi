<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Kopi</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	@if(session('open_cart'))
		<script>
			window.addEventListener('load', function () {
				let cart = new bootstrap.Offcanvas(document.getElementById('cartSidebar'));
				cart.show();
			});
		</script>
	@endif

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">

	<!-- Animasi AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body{
            font-family: 'Inter', sans-serif;
            background: #fff;
        }
    </style>
</head>
<body>
    <!-- Toast Notification -->
	<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
		<div id="cartToast" class="toast align-items-center text-bg-dark border-0">
			<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2 animate__animated animate__fadeIn">
				<div class="toast-body">
					☕ Added to cart successfully!
				</div>
				<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
			</div>
		</div>
	</div>

@include('components.navbar')

@yield('content')

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>
<script>
function showToast() {
    let toast = new bootstrap.Toast(document.getElementById('cartToast'));
    toast.show();
}
</script>
</body>
</html>