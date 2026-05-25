@extends('layouts.app')

@section('content')

{{-- ======================================================
     MENU HERO SECTION
====================================================== --}}
<section class="menu-hero-section">
    <div class="menu-hero-overlay"></div>
    <div class="container position-relative">
        <div class="menu-hero-content text-center text-white" data-aos="fade-up">
            <span class="menu-hero-eyebrow">Pilihan Terbaik Kami</span>
            <h1 class="menu-hero-title">Our <span class="menu-hero-highlight">Menu</span></h1>
            <p class="menu-hero-desc">
                Dari kopi premium hingga camilan lezat — semua hadir untuk menemani hari-hari spesial Anda.
            </p>
        </div>
    </div>
</section>

{{-- ======================================================
     MENU MAIN CONTENT
====================================================== --}}
<section class="menu-main-section py-5">
    <div class="container">

        {{-- SEARCH & FILTER BAR --}}
        <div class="menu-controls-wrapper" data-aos="fade-up">

            {{-- Search Bar --}}
            <div class="menu-search-wrap">
                <i class="fa-solid fa-magnifying-glass menu-search-icon"></i>
                <input type="text" id="menuSearch" class="menu-search-input" placeholder="Cari menu favorit Anda...">
            </div>

            {{-- Category Filter Tabs --}}
            <div class="menu-filter-tabs">
                <button class="menu-filter-btn active" data-filter="all">
                    <i class="fa-solid fa-border-all"></i> Semua
                </button>
                <button class="menu-filter-btn" data-filter="coffee">
                    <i class="fa-solid fa-mug-hot"></i> Coffee
                </button>
                <button class="menu-filter-btn" data-filter="non-coffee">
                    <i class="fa-solid fa-leaf"></i> Non Coffee
                </button>
                <button class="menu-filter-btn" data-filter="snack">
                    <i class="fa-solid fa-cookie-bite"></i> Snack
                </button>
            </div>

        </div>

        {{-- RESULTS COUNT --}}
        <div class="menu-results-info" data-aos="fade-up">
            <span id="menuCount">5</span> menu tersedia
        </div>

        {{-- MENU GRID --}}
        <div class="row g-4" id="menuGrid">

            {{-- ==================== COFFEE ==================== --}}
            <div class="col-sm-6 col-lg-4 menu-item" data-category="coffee" data-name="americano" data-aos="fade-up" data-aos-delay="0">
                <div class="menu-card">
                    <div class="menu-card-image-wrap">
                        <img src="{{ asset('assets/img/products/coffee1.png') }}" alt="Americano" class="menu-card-img">
                        <div class="menu-card-badge badge-coffee">Coffee</div>
                        <div class="menu-card-overlay">
                            <span class="menu-card-view-hint">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="menu-card-body">
                        <div class="menu-card-top">
                            <h5 class="menu-card-name">Americano</h5>
                            <div class="menu-card-rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </div>
                        </div>
                        <p class="menu-card-desc">Strong black coffee with smooth, rich taste — pure and powerful.</p>
                        <div class="menu-card-footer">
                            <div class="menu-card-price">
                                <span class="price-label">Harga</span>
                                <span class="price-value">Rp 15.000</span>
                            </div>
                            <form action="/cart/add" method="POST" class="m-0">
                                @csrf
                                <input type="hidden" name="id" value="1">
                                <input type="hidden" name="name" value="Americano">
                                <input type="hidden" name="price" value="15000">
                                <input type="hidden" name="image" value="coffee1.jpg">
                                <button type="submit" class="menu-add-btn" onclick="showToast()">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==================== COFFEE ==================== --}}
            <div class="col-sm-6 col-lg-4 menu-item" data-category="coffee" data-name="cappuccino" data-aos="fade-up" data-aos-delay="50">
                <div class="menu-card">
                    <div class="menu-card-image-wrap">
                        <img src="{{ asset('assets/img/products/coffee2.png') }}" alt="Cappuccino" class="menu-card-img">
                        <div class="menu-card-badge badge-coffee">Coffee</div>
                        <div class="menu-card-overlay">
                            <span class="menu-card-view-hint">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="menu-card-body">
                        <div class="menu-card-top">
                            <h5 class="menu-card-name">Cappuccino</h5>
                            <div class="menu-card-rating">
                                <i class="fa-solid fa-star"></i> 4.9
                            </div>
                        </div>
                        <p class="menu-card-desc">Creamy milk foam coffee with a perfect balance of espresso and steamed milk.</p>
                        <div class="menu-card-footer">
                            <div class="menu-card-price">
                                <span class="price-label">Harga</span>
                                <span class="price-value">Rp 18.000</span>
                            </div>
                            <form action="/cart/add" method="POST" class="m-0">
                                @csrf
                                <input type="hidden" name="id" value="2">
                                <input type="hidden" name="name" value="Cappuccino">
                                <input type="hidden" name="price" value="18000">
                                <input type="hidden" name="image" value="coffee2.jpg">
                                <button type="submit" class="menu-add-btn" onclick="showToast()">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==================== COFFEE ==================== --}}
            <div class="col-sm-6 col-lg-4 menu-item" data-category="coffee" data-name="latte" data-aos="fade-up" data-aos-delay="100">
                <div class="menu-card">
                    <div class="menu-card-image-wrap">
                        <img src="{{ asset('assets/img/products/coffee3.png') }}" alt="Latte" class="menu-card-img">
                        <div class="menu-card-badge badge-coffee">Coffee</div>
                        <div class="menu-card-overlay">
                            <span class="menu-card-view-hint">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="menu-card-body">
                        <div class="menu-card-top">
                            <h5 class="menu-card-name">Latte</h5>
                            <div class="menu-card-rating">
                                <i class="fa-solid fa-star"></i> 4.7
                            </div>
                        </div>
                        <p class="menu-card-desc">Smooth and silky espresso with steamed milk — mild yet full of character.</p>
                        <div class="menu-card-footer">
                            <div class="menu-card-price">
                                <span class="price-label">Harga</span>
                                <span class="price-value">Rp 18.000</span>
                            </div>
                            <form action="/cart/add" method="POST" class="m-0">
                                @csrf
                                <input type="hidden" name="id" value="5">
                                <input type="hidden" name="name" value="Latte">
                                <input type="hidden" name="price" value="18000">
                                <input type="hidden" name="image" value="coffee3.jpg">
                                <button type="submit" class="menu-add-btn" onclick="showToast()">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==================== NON COFFEE ==================== --}}
            <div class="col-sm-6 col-lg-4 menu-item" data-category="non-coffee" data-name="matcha latte" data-aos="fade-up" data-aos-delay="150">
                <div class="menu-card">
                    <div class="menu-card-image-wrap">
                        <img src="{{ asset('assets/img/products/matcha1.png') }}" alt="Matcha Latte" class="menu-card-img">
                        <div class="menu-card-badge badge-noncoffee">Non Coffee</div>
                        <div class="menu-card-overlay">
                            <span class="menu-card-view-hint">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="menu-card-body">
                        <div class="menu-card-top">
                            <h5 class="menu-card-name">Matcha Latte</h5>
                            <div class="menu-card-rating">
                                <i class="fa-solid fa-star"></i> 4.8
                            </div>
                        </div>
                        <p class="menu-card-desc">Japanese premium green tea with creamy steamed milk — earthy and refreshing.</p>
                        <div class="menu-card-footer">
                            <div class="menu-card-price">
                                <span class="price-label">Harga</span>
                                <span class="price-value">Rp 20.000</span>
                            </div>
                            <form action="/cart/add" method="POST" class="m-0">
                                @csrf
                                <input type="hidden" name="id" value="3">
                                <input type="hidden" name="name" value="Matcha Latte">
                                <input type="hidden" name="price" value="20000">
                                <input type="hidden" name="image" value="matcha1.png">
                                <button type="submit" class="menu-add-btn" onclick="showToast()">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==================== SNACK ==================== --}}
            <div class="col-sm-6 col-lg-4 menu-item" data-category="snack" data-name="croissant" data-aos="fade-up" data-aos-delay="200">
                <div class="menu-card">
                    <div class="menu-card-image-wrap">
                        <img src="{{ asset('assets/img/snack/croissant.png') }}" alt="Croissant" class="menu-card-img">
                        <div class="menu-card-badge badge-snack">Snack</div>
                        <div class="menu-card-overlay">
                            <span class="menu-card-view-hint">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="menu-card-body">
                        <div class="menu-card-top">
                            <h5 class="menu-card-name">Croissant</h5>
                            <div class="menu-card-rating">
                                <i class="fa-solid fa-star"></i> 4.6
                            </div>
                        </div>
                        <p class="menu-card-desc">Buttery, flaky pastry baked fresh every morning — perfect with your coffee.</p>
                        <div class="menu-card-footer">
                            <div class="menu-card-price">
                                <span class="price-label">Harga</span>
                                <span class="price-value">Rp 12.000</span>
                            </div>
                            <form action="/cart/add" method="POST" class="m-0">
                                @csrf
                                <input type="hidden" name="id" value="4">
                                <input type="hidden" name="name" value="Croissant">
                                <input type="hidden" name="price" value="12000">
                                <input type="hidden" name="image" value="croissant.jpg">
                                <button type="submit" class="menu-add-btn" onclick="showToast()">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- EMPTY STATE --}}
        <div class="menu-empty-state d-none" id="menuEmptyState" data-aos="fade-up">
            <div class="menu-empty-icon">
                <i class="fa-solid fa-mug-hot"></i>
            </div>
            <h5>Menu tidak ditemukan</h5>
            <p>Coba kata kunci atau kategori yang berbeda.</p>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
// ============================================================
// MENU FILTER & SEARCH FUNCTIONALITY
// ============================================================

const filterBtns = document.querySelectorAll('.menu-filter-btn');
const menuItems  = document.querySelectorAll('.menu-item');
const searchInput = document.getElementById('menuSearch');
const countEl = document.getElementById('menuCount');
const emptyState = document.getElementById('menuEmptyState');

let activeFilter = 'all';
let activeSearch = '';

function filterMenu() {
    let visible = 0;

    menuItems.forEach(item => {
        const cat  = item.getAttribute('data-category');
        const name = item.getAttribute('data-name');

        const matchFilter = activeFilter === 'all' || cat === activeFilter;
        const matchSearch = name.includes(activeSearch.toLowerCase());

        if (matchFilter && matchSearch) {
            item.style.display = '';
            item.style.animation = 'menuFadeIn 0.35s ease forwards';
            visible++;
        } else {
            item.style.display = 'none';
        }
    });

    countEl.textContent = visible;
    emptyState.classList.toggle('d-none', visible > 0);
}

// Filter button click
filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        activeFilter = btn.getAttribute('data-filter');
        filterMenu();
    });
});

// Search input
searchInput.addEventListener('input', () => {
    activeSearch = searchInput.value.trim();
    filterMenu();
});
</script>
@endpush