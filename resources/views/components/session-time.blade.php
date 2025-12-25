@props(['session'])

<div class="session-card">
    <div class="session-time">{{ $session['time'] ?? '10:00' }}</div>
    <div class="session-price">от {{ $session['price'] ?? '1200' }} ₸</div>
    <div class="session-hall">{{ $session['hall'] ?? 'Зал 1' }}</div>
    <div class="session-format" style="display: none;">{{ $session['format'] ?? '2D' }}</div>
</div>
