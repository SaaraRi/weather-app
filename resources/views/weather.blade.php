<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('icons8-sun-color-32.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Coiny&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Weather App</title>

</head>

<body>
    <div class="container input-container">
        <h1>Weather App</h1>
        <form method="get" action="{{ route('weather') }}">
            <input type="text" name="city" class="input" placeholder="Enter city name, e.g. London"
                id="city" autocomplete="off" value="{{ empty($weatherData) ? $city : '' }}" />
            <button type="submit" class="btn btn-default">Get Weather</button>
        </form>
        @if ($error)
            <div class="error-message">
                {{ $error }}
            </div>
        @endif
    </div>
    @if (!empty($weatherData))
        <div class="container result-container">
            <h2>Weather in <span style="color: rgb(230,29,118	)">{{ $weatherData['name'] }}</span></h2>
            <div class="date-div">
                <div class="date">
                    <img width="20" height="20" src="https://img.icons8.com/windows/32/clock--v1.png"
                        alt="clock--v1" />
                    <p>{{ date('H:i') }}</p>
                </div>
                <div class="date">
                    <img width="16" height="16" src="https://img.icons8.com/android/24/calendar.png"
                        alt="calendar" />
                    <p>{{ date('d/m/Y') }}</p>
                </div>
            </div>
            <table class="table" border="1">
                <tr>
                    <th>Temperature</th>
                    <td>{{ $weatherData['main']['temp'] }} °C</td>
                </tr>
                <tr>
                    <th>Weather</th>
                    <td>{{ $weatherData['weather'][0]['description'] }}</td>
                </tr>
                <tr>
                    <th>Humidity</th>
                    <td>{{ $weatherData['main']['humidity'] }} %</td>
                </tr>
                <tr>
                    <th>Wind speed</th>
                    <td>{{ $weatherData['wind']['speed'] }} m/s</td>
                </tr>
            </table>
    @endif
    </div>
    <footer>Copyright&copy; Saara Rikama/React25K</footer>
</body>

</html>
