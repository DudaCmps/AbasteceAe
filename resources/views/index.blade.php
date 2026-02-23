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
<body>
  <h1 class="text-pink-400">
    {{ config('app.name') }}
  </h1>
</body>
</html>
