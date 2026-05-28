{{-- MENU GRID --}}
<div class="row g-3 g-md-4" id="menuGrid">

    {{-- ==================== COFFEE AMERICANO ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="coffee" data-name="americano" data-aos="fade-up" data-aos-delay="0">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle">
                    <img src="{{ asset('assets/img/products/americano.png') }}" alt="Americano" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-coffee">Coffee</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Americano</h5>
                <p class="menu-card-subtitle">Classic Black Coffee</p>
                <div class="menu-card-price">Rp 15.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Americano">
                    <input type="hidden" name="price" value="15000">
                    <input type="hidden" name="image" value="coffee1.jpg">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== COFFEE CAPPUCCINO ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="coffee" data-name="cappuccino" data-aos="fade-up" data-aos-delay="50">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle">
                    <img src="{{ asset('assets/img/products/latte.png') }}" alt="Latte" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-coffee">Coffee</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Latte</h5>
                <p class="menu-card-subtitle">Creamy Milk Coffee</p>
                <div class="menu-card-price">Rp 18.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="name" value="Latte">
                    <input type="hidden" name="price" value="18000">
                    <input type="hidden" name="image" value="coffee2.jpg">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== COFFEE MOCHACCINO ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="coffee" data-name="mochaccino" data-aos="fade-up" data-aos-delay="100">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle">
                    <img src="{{ asset('assets/img/products/mochaccino.png') }}" alt="Mochaccino" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-coffee">Coffee</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Mochaccino</h5>
                <p class="menu-card-subtitle">Chocolate Espresso</p>
                <div class="menu-card-price">Rp 18.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="5">
                    <input type="hidden" name="name" value="Mochaccino">
                    <input type="hidden" name="price" value="18000">
                    <input type="hidden" name="image" value="coffee3.jpg">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== NON COFFEE MATCHA LATTE ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="non-coffee" data-name="matcha latte" data-aos="fade-up" data-aos-delay="150">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-green">
                    <img src="{{ asset('assets/img/products/matcha1.png') }}" alt="Matcha Latte" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-noncoffee">Non Coffee</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Matcha Latte</h5>
                <p class="menu-card-subtitle">Japanese Green Tea</p>
                <div class="menu-card-price">Rp 20.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="name" value="Matcha Latte">
                    <input type="hidden" name="price" value="20000">
                    <input type="hidden" name="image" value="matcha1.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK CROISSANT ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="croissant" data-aos="fade-up" data-aos-delay="200">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/croissant.png') }}" alt="Croissant" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Croissant</h5>
                <p class="menu-card-subtitle">Buttery Pastry</p>
                <div class="menu-card-price">Rp 12.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="4">
                    <input type="hidden" name="name" value="Croissant">
                    <input type="hidden" name="price" value="12000">
                    <input type="hidden" name="image" value="croissant.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK CAPCAKE ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="capcake" data-aos="fade-up" data-aos-delay="250">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/capcake.png') }}" alt="Cupcake" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Cupcake</h5>
                <p class="menu-card-subtitle">Sweet Mini Cake</p>
                <div class="menu-card-price">Rp 12.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="6">
                    <input type="hidden" name="name" value="Cupcake">
                    <input type="hidden" name="price" value="12000">
                    <input type="hidden" name="image" value="capcake.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK BROWNIES ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="brownies" data-aos="fade-up" data-aos-delay="300">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/brownies.png') }}" alt="Brownies" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Brownies</h5>
                <p class="menu-card-subtitle">Chocolate Fudge</p>
                <div class="menu-card-price">Rp 12.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="7">
                    <input type="hidden" name="name" value="Brownies">
                    <input type="hidden" name="price" value="12000">
                    <input type="hidden" name="image" value="brownies.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK SANDWICH ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="sandwich" data-aos="fade-up" data-aos-delay="350">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/sandwich.png') }}" alt="Sandwich" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Sandwich</h5>
                <p class="menu-card-subtitle">Fresh Deli Bread</p>
                <div class="menu-card-price">Rp 15.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="8">
                    <input type="hidden" name="name" value="Sandwich">
                    <input type="hidden" name="price" value="15000">
                    <input type="hidden" name="image" value="sandwich.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK KENTANG GORENG ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="kentang goreng" data-aos="fade-up" data-aos-delay="400">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/kentang-goreng.png') }}" alt="Kentang Goreng" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Kentang Goreng</h5>
                <p class="menu-card-subtitle">Crispy French Fries</p>
                <div class="menu-card-price">Rp 12.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="9">
                    <input type="hidden" name="name" value="Kentang Goreng">
                    <input type="hidden" name="price" value="12000">
                    <input type="hidden" name="image" value="kentang-goreng.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK CINNAMON ROLL ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="cinnamon roll" data-aos="fade-up" data-aos-delay="450">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/cinnamon-roll.png') }}" alt="Cinnamon Roll" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Cinnamon Roll</h5>
                <p class="menu-card-subtitle">Spiced Sweet Roll</p>
                <div class="menu-card-price">Rp 14.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="10">
                    <input type="hidden" name="name" value="Cinnamon Roll">
                    <input type="hidden" name="price" value="14000">
                    <input type="hidden" name="image" value="cinnamon-roll.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK PASTRY ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="pastry" data-aos="fade-up" data-aos-delay="500">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/pastry.png') }}" alt="Pastry" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Pastry</h5>
                <p class="menu-card-subtitle">Flaky Golden Pastry</p>
                <div class="menu-card-price">Rp 10.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="11">
                    <input type="hidden" name="name" value="Pastry">
                    <input type="hidden" name="price" value="10000">
                    <input type="hidden" name="image" value="pastry.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ==================== SNACK ONION RINGS ==================== --}}
    <div class="col-6 col-md-4 col-lg-3 menu-item" data-category="snack" data-name="onion rings" data-aos="fade-up" data-aos-delay="550">
        <div class="menu-card">
            <div class="menu-card-image-wrap">
                <div class="menu-card-image-circle circle-warm">
                    <img src="{{ asset('assets/img/snack/onion-ring.png') }}" alt="Onion Rings" class="menu-card-img">
                </div>
                <span class="menu-card-badge badge-snack">Snack</span>
            </div>
            <div class="menu-card-body">
                <h5 class="menu-card-name">Onion Rings</h5>
                <p class="menu-card-subtitle">Crispy Fried Rings</p>
                <div class="menu-card-price">Rp 12.000</div>
                <form action="/cart/add" method="POST" class="m-0">
                    @csrf
                    <input type="hidden" name="id" value="12">
                    <input type="hidden" name="name" value="Onion Rings">
                    <input type="hidden" name="price" value="12000">
                    <input type="hidden" name="image" value="onion-ring.png">
                    <button type="submit" class="menu-add-btn" onclick="showToast()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
