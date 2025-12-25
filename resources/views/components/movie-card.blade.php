@props(['movie'])

<div class="movie-card">
    <div class="movie-poster">
        @if(isset($movie['image']))
            <img src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" loading="lazy">
        @else
            <img src="/images/spiderman.png" alt="{{ $movie['title'] }}" loading="lazy">
        @endif
        <span class="movie-rating">{{ $movie['rating'] ?? '12+' }}</span>
    </div>
    <div class="movie-info">
        <h3 class="movie-title">{{ $movie['title'] }}</h3>
        <div class="movie-tags">
            @if(isset($movie['tags']))
                @foreach($movie['tags'] as $tag)
                    <span class="movie-tag">{{ $tag }}</span>
                @endforeach
            @else
                <span class="movie-tag">экшен</span>
                <span class="movie-tag">приключения</span>
            @endif
        </div>
        <div class="movie-sessions">
            @if(isset($movie['sessions']))
                @foreach($movie['sessions'] as $session)
                    <x-session-time :session="$session" />
                @endforeach
            @else
                @foreach($movie['times'] ?? ['10:00', '12:40', '15:20'] as $time)
                    <x-session-time :session="['time' => $time, 'price' => '1200', 'hall' => 'Зал 1']" />
                @endforeach
            @endif
        </div>
    </div>
</div>
