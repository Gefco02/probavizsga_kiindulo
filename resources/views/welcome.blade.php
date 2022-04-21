<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token; ?>>

    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        table tr:first-child th {
            background: black;
            color:yellow;
}
        main{
            margin: auto;
            text-align:center;

        }
        .urlap{
            width:400px;
            margin:auto;
        }
        .tablazat{
            padding: 20px;
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
            margin:auto;
        }
        td, th{
            border: 1px solid black;
            padding: 5px;
        }
table tr:nth-child(even)
{
  background: lightblue;
}
        @media screen and (max-width:1200px){
            body{
                max-width: 80%;

            }
            table{
                max-width: 100%;
                font-size: 17px;
            }

        }
        @media screen and (max-width:1000px){
            body{
                max-width: 70%;

            }
            table{
                max-width: 100%;
                font-size: 15px;
            }
            
        }
        @media screen and (max-width:800px){
            body{
                max-width: 60%;
                
            }
            table{
                max-width: 100%;
                font-size: 10px;
            }
            
        }
        @media screen and (max-width:600px){
            body{
                max-width: 50%;
                font-size: 10px;
            }
            table{
                max-width: 35%;
                font-size: 10px;
            }
            
        }

    </style>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/ajax.js"></script>
    <script src="js/script.js"></script>

</head>

<body class="antialiased">


    <main>

        <header>
            <h1 class="kozepre">Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai</h1>
        </header>
        <section class="bejelentkezes kozepre">
            <h2>A szakdolgozatokat bejelentkezés után tudja megnézni!</h2>
            @if (Route::has('login'))
            <div class=" px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Szakdolgozatok</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                @endif
                @endauth
            </div>

            @endif
        </section>
        <article>
        <div class="szakdolgozatoklistazasa">
        <table class="tablazat"></table>

        </div>
                        Admin oldal
                        <div class="listaadmin">
                        <fieldset class="urlap">
  <label for="szakdogaNev">Szakdolgozat neve</label>
  <input type="text" id="szakdogaNev" name="szakdogaNev"><br><br>
  <label for="gitLink">Github link</label>
  <input type="text" id="gitLink" name="gitLink"><br><br>
  <label for="oldalLink">Oldal link</label>
  <input type="text" id="oldalLink" name="oldalLink"><br><br>
  <label for="keszitokNeve">Készítők neve</label>
  <input type="text" id="keszitokNeve" name="keszitokNeve"><br><br>
  <button id="kuld" name="kuld">Küld</button>
    </fieldset>
        </article>

        
        <footer class="kozepre">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </main>
    </div>
    </div>
</body>

</html>
