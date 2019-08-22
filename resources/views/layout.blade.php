<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RPG Controle fichas</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
  </head>
  <body class="text-white">
    <div class="container jumbotron jumbotron-fluid bg-transparent">
      <h1 class="display-4"> @yield('cabecalho') </h1>
      <p class="lead"> @yield('texto_cabecalho')</p>
      <hr class="my-4">
      <div class="">
        @yield('lista')
        @yield('navegacao')
      </div>
    </div>
  </body>
</html>
