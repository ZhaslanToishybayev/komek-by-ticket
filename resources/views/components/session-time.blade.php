@props(['session'])

<div class="session-card">
    <div class="session-time">{{ $session['time'] ?? '10:00' }}</div>
    <div class="session-format">{{ $session['format'] ?? '2D' }}</div>
    <div class="session-price">{{ $session['price'] ?? '1200' }} ₸</div>
</div>
