@extends('layouts.app')

@section('content')

    @include('components.menu.hero')

    <section class="menu-main-section py-5">
        <div class="container">
            @include('components.menu.search-filter')
            @include('components.menu.items-grid')
            @include('components.menu.empty-state')
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