<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Komek By Ticket</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(["resources/css/app.scss", "resources/js/app.js"])
</head>
<body>
    <div class="collage-bg"></div>
    <div class="page-wrapper">
        <x-header />
        <main>{{ $slot }}</main>
        <x-footer />
    </div>
</body>
</html>
