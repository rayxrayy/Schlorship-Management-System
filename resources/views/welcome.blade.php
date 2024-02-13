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

        .navbar-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff; /* Set your desired background color */
            padding: 13px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for a subtle effect */
            z-index: 1000; /* Ensure it appears above other content */
        }

        .logo-container {
            margin-left: 100px; /* Adjust as needed */
        }

        .button-container {
            margin-left: 10px; /* Adjust as needed */
        }


        .dark-mode {
            background-color: #212124; /* Dark background color */
            color: #fff; /* Light text color */
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
            margin-right: 40px;
            font-size: 18px;
            margin-left:40px;
        }
        .button-container a {
            margin-left: 10px;
            padding-bottom: 5px; /* Adjust this value to control the underline thickness */
            text-decoration: none;
            border-bottom: 2px solid transparent; /* Adjust this value to control the underline color and thickness */
            color: #c21807;
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
            /* padding: 10px; */
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
            color: #c21807; /* Adjust the color as needed */
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }

        /* Change color on hover for the dropdown items */
        .dropdown-content a:hover {
            background-color: #ddd; /* Adjust the background color as needed */
        }

        .top-section {
            padding: 150px 0 0 0;
            text-align: center;
            /* margin-top: 100px; */
        }
        .image-slider {
            width: 100%;
            max-width: 600px; /* Set a max-width for better responsiveness */
            margin: 0 auto; /* Center the slider horizontally */
            height: 300px; /* Adjust height as needed */
            overflow: hidden;
        }
        .image-slider img {
            width: 100%;
            height: auto;
        }
        .main {
            margin-top: 70px; /* Adjust as needed to create space between header and content */
            padding: 20px;
        }

    </style>
</head>

<header class="antialiased">
    <div class="navbar-container">
    <!-- Logo -->
    <div style="position: absolute; top: 0px; left: 100px;">
        <a href="#">
        <img src="{{ asset('./Images/Logo.png') }}" alt="Logo"  style="width: 80px; height: auto;"/>
        </a>
    </div>
    <div>
    <h3 style="position: absolute; right: 49%; botttom:2%; font-size:150%; color: #280290e8;">Edu-Hope</h3>
    </div>
    <div class="button-container">   
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" style="font-style: lato; margin-left: 80px; color:#c21807;">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="font-style: lato; margin-left: 40px; margin-right: 60px; color:#c21807;"> Register</a>
                    @endif
                @endauth
            </div>
        @endif

    </div>
    <div class="button-container" style="margin-right:400px; font:initial;">   
        <a href="#" onclick="toggleDarkMode()"style="margin-left: 50%;margin-right: 50px">Home</a>
          <a href="#" onclick="toggleDarkMode()"style="margin-left: 50px;margin-right:50px">Blog </a>
            <div class="dropdown">
            <a href="#" onclick="toggleDarkMode()"style="margin-left: 50px;margin-right: 50px; color:#c21807;">Company</a>
            <div class="dropdown-content">
            <a href="#">About us</a>
            <a href="#">Careers</a>
            </div>
            </div> 
            <a href="#" onclick="toggleDarkMode()"style="margin-left: 50px;margin-right: 50px">Review</a>
            <a href="#" onclick="toggleDarkMode()"style="margin-left:50px; margin-right: 50px; white-space: nowrap;">Contact Us</a>

        </div>
    </div>
</header>


<main class="landing-page">
<section class="top-section">
            <div class="image-slider">
                <img src="{{ asset('./Images/slider.png') }}" alt="Image 1">
                <!-- Add more images for the slider -->
            </div>
        </section>
        <section class="three-sections">
            <!-- Section 1 -->
            <div class="section">
                <h2>Section 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum, turpis nec consequat consequat.</p>
            </div>
            <!-- Section 2 -->
            <div class="section">
                <h2>Section 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum, turpis nec consequat consequat.</p>
            </div>
            <!-- Section 3 -->
            <div class="section">
                <h2>Section 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum, turpis nec consequat consequat.</p>
            </div>
        </section>


<footer>
    <div class="footer-content">
    <div>
            <a href="https://github.com/rayxrayy/Schlorship-Management-System" target="_blank" style="margin-left: 560px;">© Copyright 2024 FundMe Inc. | All rights reserved</a>

        </div>
    </div> 
</footer>

</main>

    <script>
      
    </script>
</body>
</html>
