@extends('layouts.app')

@section('content')

<h2 class="fw-bold mb-4">Our Menu 🍽️</h2>

<!-- CATEGORY FILTER (UI ONLY) -->
<div class="mb-4">
    <button class="btn btn-dark btn-sm rounded-pill">All</button>
    <button class="btn btn-outline-dark btn-sm rounded-pill">Coffee</button>
    <button class="btn btn-outline-dark btn-sm rounded-pill">Non Coffee</button>
    <button class="btn btn-outline-dark btn-sm rounded-pill">Snack</button>
</div>

<!-- MENU GRID -->
<div class="row g-4">

    <!-- COFFEE -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="{{ asset('assets/img/coffee1.jpg') }}" class="img-fluid">

            <div class="p-3">
                <span class="badge bg-dark mb-2">Coffee</span>
                <h5>Americano</h5>
                <p class="text-muted small">Strong black coffee with smooth taste</p>

                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Rp 15.000</span>

                    <form action="/cart/add" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Americano">
                        <input type="hidden" name="price" value="15000">
                        <input type="hidden" name="image" value="coffee1.jpg">

                        <button class="btn btn-dark btn-sm rounded-pill">
                            + Add
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- COFFEE -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="{{ asset('assets/img/coffee2.jpg') }}" class="img-fluid">

            <div class="p-3">
                <span class="badge bg-dark mb-2">Coffee</span>
                <h5>Cappuccino</h5>
                <p class="text-muted small">Creamy milk foam coffee</p>

                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Rp 18.000</span>

                    <form action="/cart/add" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value="Cappuccino">
                        <input type="hidden" name="price" value="18000">
                        <input type="hidden" name="image" value="coffee2.jpg">

                        <button class="btn btn-dark btn-sm rounded-pill"
								onclick="showToast()">
							+ Add
						</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- NON COFFEE -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="{{ asset('assets/img/matcha.jpg') }}" class="img-fluid">

            <div class="p-3">
                <span class="badge bg-success mb-2">Non Coffee</span>
                <h5>Matcha Latte</h5>
                <p class="text-muted small">Japanese green tea with milk</p>

                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Rp 20.000</span>

                    <form action="/cart/add" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="name" value="Matcha Latte">
                        <input type="hidden" name="price" value="20000">
                        <input type="hidden" name="image" value="matcha.jpg">

                        <button class="btn btn-dark btn-sm rounded-pill"
								onclick="showToast()">
							+ Add
						</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SNACK -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="{{ asset('assets/img/croissant.jpg') }}" class="img-fluid">

            <div class="p-3">
                <span class="badge bg-warning text-dark mb-2">Snack</span>
                <h5>Croissant</h5>
                <p class="text-muted small">Buttery crispy pastry</p>

                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Rp 12.000</span>

                    <form action="/cart/add" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="name" value="Croissant">
                        <input type="hidden" name="price" value="12000">
                        <input type="hidden" name="image" value="croissant.jpg">

                        <button class="btn btn-dark btn-sm rounded-pill"
								onclick="showToast()">
							+ Add
						</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection