@php

$menus = [

    [
        'id' => 1,
        'name' => 'Americano',
        'price' => 15000,
        'image' => 'americano.png'
    ],

    [
        'id' => 2,
        'name' => 'Latte',
        'price' => 18000,
        'image' => 'latte.png'
    ],

    [
        'id' => 3,
        'name' => 'Cappucino',
        'price' => 20000,
        'image' => 'cappucino.png'
    ],

    [
        'id' => 4,
        'name' => 'Matcha',
        'price' => 17000,
        'image' => 'matcha1.png'
    ]

];

@endphp

@extends('layouts.app')

@section('content')

<section class="booking-section py-5">
    <div class="container">

        <!-- HEADING -->
        <div class="text-center mb-5">
            <span class="booking-subtitle">
                RESERVATION
            </span>

            <h1 class="booking-title">
                Book Your Table
            </h1>

            <p class="booking-text">
                Reservasi tempat favorit Anda dan nikmati
                pengalaman kopi premium bersama teman maupun keluarga.
            </p>
        </div>

        <div class="row g-4">

            <!-- FORM -->
            <div class="col-lg-7">
                <div class="booking-card">

                    <h4 class="mb-4 fw-bold">
                        Reservation Form
                    </h4>

                    <form>

                        <div class="row g-3">

                            <!-- NAME -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Full Name
                                </label>

                                <input type="text"
                                    class="form-control booking-input"
                                    placeholder="Your Name">
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Phone Number
                                </label>

                                <input type="text"
                                    class="form-control booking-input"
                                    placeholder="+62">
                            </div>

                            <!-- DATE -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Booking Date
                                </label>

                                <input type="date"
                                    class="form-control booking-input">
                            </div>

                            <!-- TIME -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Booking Time
                                </label>

                                <select class="form-select booking-input">
                                    <option>10:00 AM</option>
                                    <option>12:00 PM</option>
                                    <option>02:00 PM</option>
                                    <option>05:00 PM</option>
                                    <option>08:00 PM</option>
                                </select>
                            </div>

                            <!-- TABLE -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Table Type
                                </label>

                                <select class="form-select booking-input">
                                    <option>Indoor</option>
                                    <option>Outdoor</option>
                                    <option>VIP Room</option>
                                </select>
                            </div>

                            <!-- PEOPLE -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Total Person
                                </label>

                                <select class="form-select booking-input">
                                    <option>1 Person</option>
                                    <option>2 Person</option>
                                    <option>4 Person</option>
                                    <option>6 Person</option>
                                </select>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

            <!-- MENU LIST -->
			<div class="booking-menu-list">

    @foreach($menus as $menu)

    <div class="booking-menu-item"
         data-price="{{ $menu['price'] }}">

        <div class="booking-menu-info">

            <img src="{{ asset('assets/img/products/' . $menu['image']) }}">

            <div>
                <h6>{{ $menu['name'] }}</h6>

                <small>
                    Rp {{ number_format($menu['price']) }}
                </small>
            </div>

        </div>

        <div class="booking-menu-action">

            <div class="qty-box">

                <button type="button"
                        class="qty-btn minus">
                    -
                </button>

                <input type="text"
                       value="0"
                       class="qty-input"
                       readonly>

                <button type="button"
                        class="qty-btn plus">
                    +
                </button>

            </div>

        </div>

    </div>

    @endforeach

</div>

			<!-- TOTAL -->
			<div class="booking-total-box">

				<div class="d-flex justify-content-between">
					<span>Total</span>

					<strong id="bookingTotal">
						Rp 0
					</strong>
				</div>

				<button class="btn-booking-checkout">
					Continue Booking
				</button>

			</div>

        </div>

    </div>
</section>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const plusBtns = document.querySelectorAll('.plus');
    const minusBtns = document.querySelectorAll('.minus');

    function updateTotal() {

        let total = 0;

        document.querySelectorAll('.booking-menu-item')
            .forEach(item => {

            const qty =
                parseInt(
                    item.querySelector('.qty-input').value
                );

            const price =
                parseInt(item.dataset.price);

            total += qty * price;
        });

        document.getElementById('bookingTotal')
            .innerText =
            'Rp ' + total.toLocaleString('id-ID');
    }

    plusBtns.forEach(btn => {

        btn.addEventListener('click', function () {

            const input =
                this.parentElement.querySelector('.qty-input');

            input.value =
                parseInt(input.value) + 1;

            updateTotal();
        });

    });

    minusBtns.forEach(btn => {

        btn.addEventListener('click', function () {

            const input =
                this.parentElement.querySelector('.qty-input');

            if(parseInt(input.value) > 0) {

                input.value =
                    parseInt(input.value) - 1;

                updateTotal();
            }

        });

    });

});

</script>

@endsection