<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pombo e Filhos Lda.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary .bg-primary-">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">Informação</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Fornecedores
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('provider.add') }}">Adicionar Fornecedor</a></li>
                      <li><a class="dropdown-item" href="{{ route('provider.all') }}">Todos os Fornecedores</a></li>
                    </ul>
                  </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('product.add') }}">Adicionar Producto</a></li>
                    <li><a class="dropdown-item" href="{{ route('product.all') }}">Todos os Productos</a></li>
                </ul>
              </li>




              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Clientes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('user.add') }}">Adicionar Cliente</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.all') }}">Todos os Clientes</a></li>
                </ul>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Encomendas                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('purchases.add') }}">Criar Encomenda</a></li>
                    <li><a class="dropdown-item" href="{{ route('purchases.view') }}">Todas as Encomendas</a></li>


                </ul>
              </li>



            </div>
          </div>
        </div>
      </nav>

 <!-- .Start Navbar -->

 <div class="container">
    <!-- Start title -->
    @yield('title')
    <!-- .Start title -->

    <!-- Start content -->
    @yield('content')
    <!-- .Start content -->
    </div>




</body>
</html>
