<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    {{ config('app.name') }}
  </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

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

{{--  @vite('resources/css/app.css')--}}
</head>

  <x-aside_admin/>

  <body class="bg-blue-50 font-mono">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <x-header_admin/>
      {{ $slot }}
      <x-footer_admin/>
    </main>
  </body>
</html>
