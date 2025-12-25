<x-layout>
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <span class="badge">ПРЕМЬЕРА</span>
                <h1>ОКЕАН ЗОВЕТ<br>АКВАМЕН</h1>
                <p>СМОТРИТЕ В 3D И IMAX 3D С 13 ДЕКАБРЯ 12+</p>
                <div class="hero-actions" style="display: flex; gap: 20px; margin-top: 30px;">
                    <button class="btn btn-red">Купить билет</button>
                    <button class="btn btn-red" style="background: transparent; border: 2px solid #E53935; color: #E53935;">Трейлер</button>
                </div>
            </div>
        </div>
    </div>

    <section class="sessions-tabs container">
        <div class="date-tabs" style="display: flex; gap: 15px; margin-bottom: 40px;">
            <div class="tab active" style="background: #E53935; color: white; padding: 12px 25px; border-radius: 8px; text-align: center; cursor: pointer;">
                <span class="day" style="display: block; font-weight: bold;">Сегодня</span>
            </div>
            <div class="tab" style="background: white; padding: 12px 25px; border-radius: 8px; text-align: center; border: 1px solid #ddd; cursor: pointer;">
                <span class="day" style="display: block; font-weight: bold;">Завтра</span>
                <span class="date" style="font-size: 12px; opacity: 0.7;">11 сент.</span>
            </div>
            <div class="tab" style="background: white; padding: 12px 25px; border-radius: 8px; text-align: center; border: 1px solid #ddd; cursor: pointer;">
                <span class="day" style="display: block; font-weight: bold;">Вторник</span>
                <span class="date" style="font-size: 12px; opacity: 0.7;">12 сент.</span>
            </div>
        </div>
    </section>

    <div class="movie-grid container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 30px; padding-bottom: 60px;">
        @php
            $movies = [
                ['title' => 'Аквамен', 'genre' => 'фантастика, экшн', 'rating' => '12+', 'times' => ['10:00', '12:40', '15:20', '18:00']],
                ['title' => 'Мэри Поппинс возвращается', 'genre' => 'мюзикл, семейный', 'rating' => '6+', 'times' => ['11:15', '14:00', '16:45']],
                ['title' => 'Человек-паук: Через вселенные', 'genre' => 'мультфильм, экшн', 'rating' => '6+', 'times' => ['09:30', '12:00', '14:30', '17:00']],
                ['title' => 'Гринч', 'genre' => 'мультфильм, комедия', 'rating' => '6+', 'times' => ['10:30', '13:00', '15:30']],
            ];
        @endphp

        @foreach($movies as $movie)
            <x-movie-card :movie="$movie" />
        @endforeach
    </div>
</x-layout>

<style>
.hero-section {
    height: 600px;
    background-image: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%), url('https://w.forfun.com/fetch/5d/5d985a11c1615c13e0c03426727da7c5.jpeg');
    background-size: cover;
    background-position: center;
    color: white;
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.hero-content {
    max-width: 600px;
}
.hero-content .badge {
    background: #E53935;
    padding: 4px 12px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
}
.hero-content h1 {
    font-size: 64px;
    margin: 20px 0;
    line-height: 1;
}
.hero-content p {
    font-size: 18px;
    margin-bottom: 30px;
    opacity: 0.9;
}
</style>
