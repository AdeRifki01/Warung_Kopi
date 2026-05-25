@extends('layouts.app')

@section('content')

{{-- ======================================================
     GALLERY HERO SECTION
====================================================== --}}
<section class="gallery-hero-section">
    <div class="gallery-hero-overlay"></div>
    <div class="container position-relative">
        <div class="gallery-hero-content text-center text-white" data-aos="fade-up">
            <span class="gallery-hero-eyebrow">Momen Terbaik</span>
            <h1 class="gallery-hero-title">Our <span class="gallery-hero-highlight">Gallery</span></h1>
            <p class="gallery-hero-desc">
                Intip suasana hangat dan berbagai sajian premium yang kami hadirkan spesial untuk Anda setiap harinya.
            </p>
        </div>
    </div>
</section>

{{-- ======================================================
     GALLERY MAIN CONTENT (MASONRY GRID)
====================================================== --}}
<section class="gallery-main-section py-5">
    <div class="container">
        
        {{-- Gallery Filter --}}
        <div class="gallery-filter-wrap text-center mb-5" data-aos="fade-up">
            <button class="gallery-filter-btn active" data-filter="all">All</button>
            <button class="gallery-filter-btn" data-filter="ambience">Ambience</button>
            <button class="gallery-filter-btn" data-filter="products">Products</button>
            <button class="gallery-filter-btn" data-filter="events">Events</button>
        </div>

        {{-- Gallery Grid --}}
        <div class="row g-4" id="galleryGrid">
            
            {{-- Item 1 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="ambience" data-aos="fade-up" data-aos-delay="0">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/bgCoffe1.jpg') }}" alt="Coffee Shop Ambience 1" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Cozy Atmosphere</h5>
                            <p>Sudut favorit untuk bersantai</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 2 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="products" data-aos="fade-up" data-aos-delay="50">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/products/coffee1.png') }}" alt="Premium Americano" class="gallery-img bg-light">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Premium Americano</h5>
                            <p>Biji kopi pilihan terbaik</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 3 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="ambience" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/cozyPlace.jpg') }}" alt="Cozy Place" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Ruang Kerja Ideal</h5>
                            <p>Tempat yang pas untuk produktivitas</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 4 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="events" data-aos="fade-up" data-aos-delay="150">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/bgCoffe2.jpg') }}" alt="Barista in Action" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Barista Action</h5>
                            <p>Proses penyeduhan dengan dedikasi</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 5 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="products" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/products/matcha1.png') }}" alt="Matcha Latte" class="gallery-img bg-light">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Matcha Latte</h5>
                            <p>Kesegaran teh hijau Jepang</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 6 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="ambience" data-aos="fade-up" data-aos-delay="250">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/premiumBeans.jpg') }}" alt="Premium Beans" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Biji Kopi Lokal</h5>
                            <p>Kualitas nusantara di setiap cangkir</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 7 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="products" data-aos="fade-up" data-aos-delay="300">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/snack/croissant.png') }}" alt="Fresh Croissant" class="gallery-img bg-light">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Fresh Croissant</h5>
                            <p>Pasangan sempurna untuk kopi Anda</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 8 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="events" data-aos="fade-up" data-aos-delay="350">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/fastService.jpg') }}" alt="Fast Service" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Layanan Prima</h5>
                            <p>Senyum ramah di setiap sapaan</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Item 9 --}}
            <div class="col-sm-6 col-lg-4 gallery-item" data-category="ambience" data-aos="fade-up" data-aos-delay="400">
                <div class="gallery-card">
                    <img src="{{ asset('assets/img/bgCoffe3.jpg') }}" alt="Coffee Shop Outdoor" class="gallery-img">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>Outdoor Area</h5>
                            <p>Nikmati udara segar sambil ngopi</p>
                            <span class="gallery-zoom-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ======================================================
     LIGHTBOX MODAL (For viewing full images)
====================================================== --}}
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0 text-center position-relative">
                <img src="" id="lightboxImg" class="img-fluid rounded-4 shadow-lg w-100" alt="Full Image">
                <div id="lightboxCaption" class="lightbox-caption"></div>
            </div>
        </div>
    </div>
</div>

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
