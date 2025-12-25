<x-layout>
    {{-- Hero Section --}}
    <section class="hero-section" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%), url('/images/hero-banner.jpg');">
        <div class="container">
            <div class="hero-content">
                <span class="badge">ПРЕМЬЕРА</span>
                <h1 class="hero-title">
                    <span>ОКЕАН ЗОВЕТ</span>
                    <span>АКВАМЕН</span>
                </h1>
                <p class="hero-subtitle">СМОТРИТЕ В 3D И IMAX 3D С 13 ДЕКАБРЯ 12+</p>
                <div class="hero-actions">
                    <button class="btn btn-red">Купить билет</button>
                    <button class="btn btn-trailer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Трейлер
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Date Tabs --}}
    @php
        $ruDays = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
        $ruMonths = ['', 'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
        
        $dates = [];
        for ($i = 0; $i < 7; $i++) {
            $current = now()->addDays($i);
            $dayName = '';
            
            if ($i === 0) $dayName = 'Сегодня';
            elseif ($i === 1) $dayName = 'Завтра';
            else {
                $dayOfWeek = $current->dayOfWeek;
                $dayName = [
                    0 => 'Воскресенье',
                    1 => 'Понедельник',
                    2 => 'Вторник',
                    3 => 'Среда',
                    4 => 'Четверг',
                    5 => 'Пятница',
                    6 => 'Суббота'
                ][$dayOfWeek];
            }
            
            $dates[] = [
                'day' => $dayName,
                'date' => $current->format('d') . ' ' . $ruMonths[$current->month],
                'value' => $current->format('Y-m-d')
            ];
        }
    @endphp
    <x-date-tabs :dates="$dates" />

    {{-- Movies Grid --}}
    <section class="movies-section">
        <div class="container">
            @php
                $movies = [
                    [
                        'title' => 'Аквамен и потерянное царство',
                        'image' => '/images/aquaman.jpg',
                        'rating' => '12+',
                        'tags' => ['экшен', 'приключения', 'фантастика'],
                        'sessions' => [
                            ['time' => '10:00', 'format' => '2D', 'price' => '1200', 'hall' => 'Зал 1'],
                            ['time' => '12:40', 'format' => '3D', 'price' => '1600', 'hall' => 'Зал 2'],
                            ['time' => '15:20', 'format' => 'IMAX', 'price' => '2400', 'hall' => 'IMAX Зал'],
                            ['time' => '17:40', 'format' => '2D', 'price' => '1400', 'hall' => 'Зал 1'],
                            ['time' => '20:00', 'format' => '3D', 'price' => '1800', 'hall' => 'Зал 2'],
                            ['time' => '22:30', 'format' => '2D', 'price' => '1200', 'hall' => 'Зал 3'],
                        ]
                    ],
                    [
                        'title' => 'Мэри Поппинс возвращается',
                        'image' => '/images/spiderman.png',
                        'rating' => '6+',
                        'tags' => ['мюзикл', 'семейный', 'фэнтези'],
                        'sessions' => [
                            ['time' => '11:00', 'format' => '2D', 'price' => '1000', 'hall' => 'Зал 1'],
                            ['time' => '14:00', 'format' => '2D', 'price' => '1200', 'hall' => 'Зал 1'],
                            ['time' => '17:00', 'format' => '2D', 'price' => '1400', 'hall' => 'Зал 2'],
                        ]
                    ],
                    [
                        'title' => 'Человек-паук: Через вселенные',
                        'image' => '/images/spiderman.png',
                        'rating' => '6+',
                        'tags' => ['мультфильм', 'экшен', 'приключения'],
                        'sessions' => [
                            ['time' => '09:30', 'format' => '2D', 'price' => '900', 'hall' => 'Зал 3'],
                            ['time' => '12:00', 'format' => '3D', 'price' => '1400', 'hall' => 'Зал 2'],
                            ['time' => '14:30', 'format' => '2D', 'price' => '1200', 'hall' => 'Зал 1'],
                            ['time' => '17:00', 'format' => 'IMAX', 'price' => '2200', 'hall' => 'IMAX Зал'],
                            ['time' => '19:30', 'format' => '3D', 'price' => '1600', 'hall' => 'Зал 2'],
                        ]
                    ],
                    [
                        'title' => 'Гринч',
                        'image' => '/images/grinch.jpg',
                        'rating' => '6+',
                        'tags' => ['мультфильм', 'комедия', 'семейный'],
                        'sessions' => [
                            ['time' => '10:30', 'format' => '2D', 'price' => '800', 'hall' => 'Зал 3'],
                            ['time' => '13:00', 'format' => '2D', 'price' => '1000', 'hall' => 'Зал 2'],
                            ['time' => '15:30', 'format' => '3D', 'price' => '1400', 'hall' => 'Зал 1'],
                        ]
                    ],
                ];
            @endphp

            <div class="movie-grid">
                @foreach($movies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
