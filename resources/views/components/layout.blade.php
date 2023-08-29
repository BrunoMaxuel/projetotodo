<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
  <title>{{$pageTitle ?? 'MDM Todo'}}</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div class="container">
  <div class="siderbar">
    <a href="{{route('home')}}">
      <img src="/assets/images/logo2.png" alt="">
    </a>
    <p class="my_name">M</p>
    <p class="my_name">I</p>
    <p class="my_name">Z</p>
    <p class="my_name">A</p>
    <p class="my_name">E</p>
    <p class="my_name">L</p>
    <br>

    <br>

    <p class="my_name">D</p>
    <p class="my_name">O</p>
    <p class="my_name">U</p>
    <p class="my_name">G</p>
    <p class="my_name">L</p>
    <p class="my_name">A</p>
    <p class="my_name">S</p>
  </div>
  <div class="content">
    <nav>
      {{$btn}}
      <div class="name_login">
          <p>🙅‍️</p>
          {{$nameLogin ?? ''}}
      </div>

    </nav>
    <main>
      {{$slot}}
    </main>
  </div>
</div>
</body>

</html>
