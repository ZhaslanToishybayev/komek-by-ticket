@props(["movie"])
<div class="movie-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
    <div style="position: relative; padding-top: 150%; background: #eee;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; font-weight: bold;">{{ $movie["rating"] }}</div>
    </div>
    <div style="padding: 20px;">
        <h3 style="margin: 0;">{{ $movie["title"] }}</h3>
        <p style="color: #757575; font-size: 13px;">{{ $movie["genre"] }}</p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            @foreach($movie["times"] as $time)
                <div style="border: 1px solid #ddd; padding: 5px; text-align: center; border-radius: 4px;">
                    <strong>{{ $time }}</strong><br><small>1200 тг</small>
                </div>
            @endforeach
        </div>
    </div>
</div>
