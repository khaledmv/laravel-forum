<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('css/app.css')}} ">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
                
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;">
                <div class="container" >
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    @if (Route::has('login'))
                    <ul class="navbar-nav ms-md-auto">
                       
                        @auth
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Dashboard</a>
                      </li>
                      @else
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" >Log in</a>
                      </li>
                      @if (Route::has('register'))
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                      </li>
                      @endif
                      @endauth
                    </ul>
                    @endif
                  </div>
                </div>
              </nav>

            <main class="container mt-2">
               <h1>Laravel </h1>
            </main>
    
    </body>
</html>
