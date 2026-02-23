<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      {{ config('app.name') }}
    </title>

    @vite('resources/css/app.css')
  </head>

  <x-header/>

  <body class="bg-blue-50">
   {{ $slot }}
  </body>

  <x-footer/>

</html>
