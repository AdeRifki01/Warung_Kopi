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
                    <img src="{{ asset('assets/img/products/americano.png') }}" alt="Premium Americano" class="gallery-img bg-light">
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
            
            {{-- Item 8 --}}
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
