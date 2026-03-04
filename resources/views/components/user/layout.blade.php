<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      {{ config('app.name') }}
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="/../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    {{--  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>--}}
    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
    @vite('resources/css/app.css')
  </head>



  <body class="">
    <main class="d-flex flex-column min-vh-100 bg-primary bg-img-car">
      <x-user.header/>
      {{ $slot }}
    </main>
    <x-user.footer/>
  </body>

</html>
