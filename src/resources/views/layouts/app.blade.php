<!DOCTYPE html>
<html lang="la">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('index.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1>FashionablyLate</h1>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>