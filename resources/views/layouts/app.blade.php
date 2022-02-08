<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/fontawesome.css">

        <title>@yield('title')</title>
    </head>
    <body>
        <!-- Menu -->
        <nav class="navbar navbar-expand-md navbar-dark  bg-dark" id="top">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="/">Página Inicial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about">Sobre</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="services"  >
                      Serviços
                    </a>
                    
                  </li>
                  @auth
                  @if(Auth::user()->level === 1)
                  <li class="nav-item">
                    <a class="nav-link" href="postagem.novo">Postagens</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin">Painel Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger text text-light btn" href="Sair" style="margin-right:15px; width:100%">Sair</a>
                  </li>
                 @else
                  <li class="nav-item">
                    <a class="nav-link" href="postagem.novo">Postagens</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-danger text text-light btn" href="Sair" style="margin-right:15px; width:100%">Sair</a>
                  </li> 
                  @endif
                  @endauth
                  @guest
                    <li class="nav-item">
                      <a class="nav-link bg-primary text text-light btn" href="login" style="margin-right:15px; width:100%">Logar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bg-light text text-dark btn"style="margin-left:2px;" href="usuario.novo">Cadastrar-se</a>
                    </li>
                  @endguest
                  
                </ul>
                
              </div>
            </div>
          </nav>
          <!--End Menu -->

          <!--Main -->
          <main>
              @yield('content')
          </main>
          <!--End Main -->
          
          <!-- Footer -->
          <footer class="blog-footer container">
            <p class="text text-center">
              <a href="#top" class="btn btn-primary mt-4" >topo</a>
            </p>
            <p class="text text-center">&copy; All Rights Reserveds.</p>
          </footer>

          <!--End Footer -->

        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/jquery.js"></script>
    </body>
</html>
