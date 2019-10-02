<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Places</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
      <header>
        <h1>Header</h1>
      </header>

      @yield('content')

      <footer>
        <h3>Footer</h3>
      </footer>
    </body>
</html>
