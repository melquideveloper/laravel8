<!doctype html>
<html lang="pt-br">

<head>
  {{-- Required meta tags --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../resources/css/home.css">
  <link rel="stylesheet" href="../resources/css/telaprodutos.css">
  <title>Hello, world!</title>
</head>

<body>
  
    <nav id="menu">
      <ol>
        <li><a href="{{route('paginaHome')}}">Home</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="{{route('GetProdutos')}}">Produtos</a></li>
        <li><a href="#">Aluno</a></li>
        <li><a href="#">Entrar</a></li>
      </ol>
    </nav>
