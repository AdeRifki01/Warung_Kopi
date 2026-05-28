@extends('layouts.app')

@section('content')

    @include('components.about.hero')
    @include('components.about.stats')
    @include('components.about.story')
    @include('components.about.values')
    @include('components.about.journey')
    @include('components.about.vision')
    @include('components.about.cta')

@endsection

@push('scripts')
<script>
// Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.about-stat-number');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = Math.floor(current).toLocaleString('id-ID');
        }, 16);
    });
}

// Trigger counter when stats section is in view
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            statsObserver.disconnect();
        }
    });
}, { threshold: 0.3 });

const statsSection = document.querySelector('.about-stats-section');
if (statsSection) statsObserver.observe(statsSection);
</script>
@endpush
