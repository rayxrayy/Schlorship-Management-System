<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
         body {
            transition: background-color 0.3s, color 0.3s;
            /* background: url("{{ asset('./Images/images.png') }}"); */
        }

        .dark-mode {
            background-color: #212124; /* Dark background color */
            color: #fff; /* Light text color */
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
            margin-right: 40px;
            font-size: 18px;
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
            margin-top: 100px; /* Adjust this value to control the space between buttons and footer content */
            font-size: 18px;
        }
         /* Style for the dropdown container */
         .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the link */
        .dropdown a {
            text-decoration: none;
            color: #000; /* Adjust the color as needed */
            padding: 10px;
            display: inline-block;
        }

        /* Style for the dropdown content (hidden by default) */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style for the dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9; /* Adjust the background color as needed */
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Style for the dropdown items */
        .dropdown-content a {
            color: #000; /* Adjust the color as needed */
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }

        /* Change color on hover for the dropdown items */
        .dropdown-content a:hover {
            background-color: #ddd; /* Adjust the background color as needed */
        }
          /* Mobile-specific styles */
          @media only screen and (max-width: 600px) {
            .button-container {
                justify-content: center; /* Center buttons on small screens */
                margin-right: 0; /* Remove right margin on small screens */
            }

            .footer-container {
                justify-content: center; /* Center content in the footer on small screens */
                margin-right: 0; /* Remove right margin on small screens */
            }
        }
    </style>
</head>
<body class="antialiased">
    <!-- Logo -->
    <div style="position: absolute; top: 10px; left: 100px;">
        <a href="#">
        <img src="{{ asset('./Images/Logo.png') }}" alt="Logo"  style="width: 100px; height: auto;"/>
        </a>
</div>

    <div class="button-container">
        <a href="#" onclick="toggleDarkMode()"style="margin-left: 10px;">Blog </a>
        <div class="dropdown">
            <a href="#" onclick="toggleDarkMode()"style="margin-left: 50px;">Company</a>
            <div class="dropdown-content">
            <a href="#">About us</a>
            <a href="#">Careers</a>
            </div>
        </div>    
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" style="margin-left: 50px;">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="margin-left: 50px;"> Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#" onclick="toggleDarkMode()"style="margin-left: 50px;">Dark Mode</a>
    </div>
    <div style="display: flex;">
        <img src="{{ asset('./Images/images.png') }}" alt="Description of Image 1" style="width: 50%;">
        <img src="{{ asset('./Images/Images.png') }}" alt="Description of Image 2" style="width: 50%;">
    </div>
    <div style="display: flex;">
        <img src="{{ asset('./Images/images.png') }}" alt="Description of Image 1" style="width: 50%;">
        <img src="{{ asset('./Images/Images.png') }}" alt="Description of Image 2" style="width: 50%;">
    </div>
    <div class="footer-container">
        <div>
            <a href="https://github.com/rayxrayy/Schlorship-Management-System" target="_blank" style="margin-left: 50px;">Sponsor</a>

        </div>
        <div style= "margin-right: 100px; margin-bottom: 50px;">Edu-Hope</div>
    </div>
    <script>
        // Toggle dark mode
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>
