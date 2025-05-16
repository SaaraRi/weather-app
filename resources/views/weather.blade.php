<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Bagel+Fat+One&family=Bungee+Hairline&family=Chango&family=Coiny&family=Dangrek&family=Darker+Grotesque:wght@300..900&family=Darumadrop+One&family=Edu+SA+Beginner:wght@400..700&family=Genos:ital,wght@0,100..900;1,100..900&family=Gruppo&family=Homenaje&family=Honk&family=Jockey+One&family=Kalnia+Glaze:wght@100..700&family=Khand:wght@300;400;500;600;700&family=Lilita+One&family=Megrim&family=Mina:wght@400;700&family=Modak&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poiret+One&family=Rajdhani:wght@300;400;500;600;700&family=Rowdies:wght@300;400;700&family=Rubik+Spray+Paint&family=Skranji:wght@400;700&family=Squada+One&family=Tauri&family=Turret+Road:wght@200;300;400;500;700;800&family=Zen+Tokyo+Zoo&display=swap"
        rel="stylesheet">

    <title>Weather App</title>

</head>

<body>
    <div class="container input-container">
        <h1>Weather App</h1>
        <form method="get" action="{{ route('weather') }}">
            <input type="text" name="city" class="input" placeholder="Enter city name, e.g. London"
                id="city" autocomplete="off" value="{{ $city }}" />
            <button type="submit" class="btn btn-default">Get Weather</button>
        </form>
    </div>
    @if (!empty($weatherData))
        <div class="container result-container">
            <h2>Weather in <span style="color: rgb(230,29,118	)">{{ $weatherData['name'] }}</span></h2>
            <table class="table" border="1">
                <tr>
                    <th>Temperature</th>
                    <td>{{ $weatherData['main']['temp'] }}</td>
                </tr>
                <tr>
                    <th>Weather</th>
                    <td>{{ $weatherData['weather'][0]['description'] }}</td>
                </tr>
                <tr>
                    <th>Humidity</th>
                    <td>{{ $weatherData['main']['humidity'] }}</td>
                </tr>
                <tr>
                    <th>Wind speed</th>
                    <td>{{ $weatherData['wind']['speed'] }}</td>
                </tr>
            </table>
    @endif
    </div>
    <footer>Copyright&copy; Saara Rikama/React25K</footer>
</body>

</html>
