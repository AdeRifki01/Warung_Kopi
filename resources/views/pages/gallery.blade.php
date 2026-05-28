@extends('layouts.app')

@section('content')

    @include('components.gallery.hero')
    @include('components.gallery.grid')
    @include('components.gallery.modal')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Filtering
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                    // Trigger reflow for animation
                    void item.offsetWidth;
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300); // Matches CSS transition duration
                }
            });
        });
    });

    // Lightbox Functionality
    const galleryCards = document.querySelectorAll('.gallery-card');
    const lightboxModal = new bootstrap.Modal(document.getElementById('galleryModal'));
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');

    galleryCards.forEach(card => {
        card.addEventListener('click', () => {
            const img = card.querySelector('.gallery-img');
            const title = card.querySelector('h5').textContent;
            const desc = card.querySelector('p').textContent;

            lightboxImg.src = img.src;
            // Check if it's a product image with light background to add a class to modal body if needed, 
            // but for simplicity we just set the src.
            if(img.classList.contains('bg-light')) {
                lightboxImg.classList.add('bg-white');
            } else {
                lightboxImg.classList.remove('bg-white');
            }
            
            lightboxCaption.innerHTML = `<strong>${title}</strong><br>${desc}`;
            lightboxModal.show();
        });
    });
});
</script>
@endpush
