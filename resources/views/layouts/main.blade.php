<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
</head>
@yield('content')

<body>

<div class="navbar-principal">
    <div class="container">
        <a class="navbar-brand" href="#">Portifólio</a>
        <div class="navbar-links">
            <a href="#home">Home</a>
            <a href="#perfil">Perfil</a>
            <a href="#contato">Contato</a>
        </div>
    </div>
</div>

<div class="section claro" id="home">
    <!-- Conteúdo da sessão clara -->
    <div class="container">
        <div class="typewriter">
            <h1 id="typed-text">Título</h1>
        </div>
        <p>Desenvolvedor Full-Stack</p>
    </div>
    <img src="/leoweb/leoweb/resources/img/mini-leo.png" alt="Imagem no canto inferior direito" class="imagem-inferior-direito">
</div>

<div class="section escuro"  id="perfil">
    <!-- Conteúdo da sessão escura -->
    <div class="container">
        <h1>Perfil</h1>
        <p>Role para cima para voltar à tela inicial.</p>
    </div>
</div>

<div class="section claro"  id="contato">
<div class="container">
        <h1>Contato</h1>
        <p>Role para cima para voltar à tela inicial.</p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const textElement = document.getElementById('typed-text');
      const text = "Leonardo Reis";

        textElement.innerText = text;

        textElement.classList.add('typing-animation');
    });

        document.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var darkBlueSection = document.querySelector('.escuro');

            if (scrollPosition >= window.innerHeight) {
                darkBlueSection.classList.add('claro');
            } else {
                darkBlueSection.classList.remove('claro');
            }
        });
</script>
</body>

</html>

