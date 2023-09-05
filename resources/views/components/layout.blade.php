<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"content="width=device-width,
  user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$pageTitle ?? 'Todo Dia Soft'}}</title>
  <link rel="stylesheet" href="/assets/css/button.css">
  <link rel="stylesheet" href="/assets/css/loginAndRegister.css">
  <link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
  <div class="container">
    <div class="content">
      <nav>
        <div class="div-bar-left">
          <img onclick="menu()"  src="assets/images/menu.png" alt="">
          <a href="/"><img src="assets/images/TodoDiaSoft.png" alt=""></a>
          <div class="name-login">
            {{$nameLogin ?? ''}}
          </div>
        </div>

        <div class="div-bar-right">
          {{$btn}}
        </div>
      </nav>
      <main>
        {{$slot}}
      </main>
    </div>
  </div>
</body>
<script src="/assets/js/home.js"></script>
</html>
