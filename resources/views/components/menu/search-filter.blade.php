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
