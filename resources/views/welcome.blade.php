<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
            margin-right: 20px;
        }
        .button-container a {
            margin-left: 10px;
            padding-bottom: 5px; /* Adjust this value to control the underline thickness */
            text-decoration: none;
            border-bottom: 2px solid transparent; /* Adjust this value to control the underline color and thickness */
            color: #000000;
            font-weight: 600;
            transition: border-bottom 0.3s, color 0.3s;
        }

        .button-container a:hover {
            border-bottom: 2px solid #6f39eb; /* Adjust this value to match the hover underline color and thickness */
            color: #6f39eb;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px; /* Adjust this value to control the space between buttons and footer content */
        }
    </style>
</head>
<body class="antialiased">
    <div class="button-container">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"> Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="footer-container">
        <div>
            <a href="https://github.com/rayxrayy/Schlorship-Management-System">Sponsor</a>
        </div>
        <div>Edu-Hope</div>
    </div>
</body>
</html>
