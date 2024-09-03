<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Chat App</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="container header"><a class="logo" href="#">Chat App</a>
  <nav class="header-nav container">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="/dashboard">Dashboard</a>
    @if(auth()->user())
    <div class="  sm:flex sm:items-center sm:ms-6">
        <button style="border-radius: 54px;" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
        </button>
        </div>
    @else
    <a href="/login">Login</a>
    <a href="/register">Register</a>
    @endif
  </nav>
</header>
<div class="background">
    <div class="container-backgrounds">
        <div class="cards-container-backgrounds">
        <!--card 1-->
        <div class="card-backgrounds one owned">
        <span class="filter"></span>

        <div class="card-content-backgrounds">Name</div>
        </div>
        <!--card 2-->
        <div class="card-backgrounds two owned">
        <span class="filter"></span>
        <img src="static/images/cover (8).jfif" alt="Card 1" id="cardImage">

        <div class="card-content-backgrounds">Name</div>
        </div>
        <!--card 3-->
        <div class="card-backgrounds three owned">
        <span class="filter"></span>
        <img src="background.url" alt="Card 1" id="cardImage">


        </div>
        <!--card 4-->
        <div class="card-backgrounds four owned">
        <span class="filter"></span>
        <img src="background.url" alt="Card 1" id="cardImage">

        <div class="card-content-backgrounds">Name</div>
        </div>
        <!--card 5-->
        <div class="card-backgrounds five owned">
        <span class="filter"></span>
        <img src="background.url" alt="Card 1" id="cardImage">

        <div class="card-content-backgrounds">Name</div>
        </div>
        <!--card 6-->
        <div class="card-backgrounds six owned">
        <span class="filter"></span>
        <img src="background.url" alt="Card 1" id="cardImage">
        <div class="card-content-backgrounds">Name</div>

        </div>
        </div>
        </div>
</div>


{{-- footer --}}

<footer class="d-flex" style="margin-left: 485px;">
    <p>Author: Hege Refsnes
    <a href="mailto:hege@example.com"> </a></p>
  </footer>

</body>
<script src="{{ asset('js/app.js') }}"> </script>
</html>
