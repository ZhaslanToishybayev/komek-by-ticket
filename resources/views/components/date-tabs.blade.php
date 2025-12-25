@props(['dates' => []])

<section class="date-tabs-section">
    <div class="container">
        <div class="date-tabs">
            @foreach($dates as $index => $date)
                <div class="date-tab {{ $index === 0 ? 'active' : '' }}" data-date="{{ $date['value'] ?? '' }}">
                    <span class="date-day">{{ $date['day'] }}</span>
                    @if(isset($date['date']))
                        <span class="date-num">{{ $date['date'] }}</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
