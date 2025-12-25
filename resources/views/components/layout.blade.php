<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Komek By Ticket - Онлайн покупка билетов в кинотеатр. Афиша фильмов, сеансы и покупка билетов.">
    <meta name="keywords" content="кино, билеты, кинотеатр, афиша, сеансы, Komek">
    <title>Komek By Ticket - Кинотеатр</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(["resources/css/app.scss", "resources/js/app.js"])
</head>
<body>
    <div class="page-wrapper">
        <x-header />
        <main>{{ $slot }}</main>
        <x-footer />
    </div>
</body>
</html>
