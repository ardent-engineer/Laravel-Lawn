<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            @yield('internal_css')
        </style>
    </head>
    <body>
    <header id="header">
      <nav>
        <a href="{{route('home')}}">
        <img
            class="logo"
            src="{{asset('images/logo.png')}}"
            alt="Not Just Lawn Mowing Logo"
          />
      </a>
      <form id="log-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" id="logout">Log Out</button>
      </form>
        <ul>
          <li id="change-text">
            <a onclick="changeTextStyle()">Change Text Style</a>
          </li>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('services')}}">Services</a></li>
          <li><a href="{{route('contact')}}">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    @yield('content')
    <footer>
      <p>
        &copy; 2024 Not Just Lawn Mowing | Multan Cantt | Call: +92 300 1234567
      </p>
      <ul class="social-links">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </footer>
    <script>
        function changeTextStyle() {
          body = document.querySelectorAll(
            "a, h1, h2, h3, h4, h5, p, ul, li, body, div"
          );

          changeBtn = document.getElementById("change-text");

          if (body[0].style.fontStyle == "italic") {
            body.forEach((element) => {
              element.style.fontWeight = "normal";
              element.style.fontStyle = "normal";
            });
            changeBtn.innerHTML =
              '<a onclick="changeTextStyle()">Change Text Style</a>';
          } else {
            body.forEach((element) => {
              element.style.fontWeight = "bold";
              element.style.fontStyle = "italic";
            });
            changeBtn.innerHTML =
              '<a onclick="changeTextStyle()">Reset Text Style</a>';
          }
        }

        function darkBg() {
            const body = document.body;  // Use document.body to select the <body> tag
            const nav = document.getElementById("dark-bg");
            const header = document.getElementById("header"); // Select header directly
            
            if (body.style.backgroundColor === "black") {
                nav.innerHTML = '<li id="dark-bg"><a onclick="darkBg()">Dark Mode</a></li>';
                body.style.backgroundColor = "#e0f9df";  // Light background color
                header.style.backgroundColor = "#338334"; // Greenish header
                body.style.color = "black";  // Dark text for normal mode
            } else {
                nav.innerHTML = '<li id="dark-bg"><a onclick="darkBg()">Normal Mode</a></li>';
                body.style.backgroundColor = "black";  // Dark background
                header.style.backgroundColor = "gray"; // Dark gray header
                body.style.color = "black";  // Light text for dark mode
            }
        }
      @yield('script')
    </script>
    </body>
</html>
