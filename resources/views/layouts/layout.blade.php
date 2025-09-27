<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VendasPro')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>

<body>
    <div id="wrapper" class="d-flex">
        @auth
        <!-- Sidebar -->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom py-4 px-3">
                <strong>VendasPro</strong>
            </div>

            <div class="list-group list-group-flush" id="sidebarAccordion">
                <a href="/dashboard" class="list-group-item list-group-item-action">Dashboard</a>

                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#cadastrosSubmenu" role="button" aria-expanded="false" aria-controls="cadastrosSubmenu">
                    Cadastros <i class="bi bi-caret-down-fill float-end"></i>
                </a>
                <div class="collapse" id="cadastrosSubmenu" data-bs-parent="#sidebarAccordion">
                    <a href="/products/create" class="list-group-item list-group-item-action ps-5">Produtos</a>
                    <a href="/category/create" class="list-group-item list-group-item-action ps-5">Categorias</a>
                    <a href="/suppliers/create" class="list-group-item list-group-item-action ps-5">Fornecedores</a>
                    <a href="/clients/create" class="list-group-item list-group-item-action ps-5">Clientes</a>
                </div>

                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#listagemSubmenu" role="button" aria-expanded="false" aria-controls="listagemSubmenu">
                    Listagem <i class="bi bi-caret-down-fill float-end"></i>
                </a>
                <div class="collapse" id="listagemSubmenu" data-bs-parent="#sidebarAccordion">
                    <a href="/products/list" class="list-group-item list-group-item-action ps-5">Produtos</a>
                    <a href="/category/list" class="list-group-item list-group-item-action ps-5">Categorias</a>
                    <a href="/suppliers/list" class="list-group-item list-group-item-action ps-5">Fornecedores</a>
                    <a href="/clients/list" class="list-group-item list-group-item-action ps-5">Clientes</a>
                </div>
            </div>
        </div>
        @endauth
        @guest
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom py-4 px-3">
                <strong>VendasPro</strong>
            </div>
            <div class="p-3">
                <p>Faça login para ter acesso!</p>
                <a href="/login" class="btn btn-comprar  w-100">Login</a>
            </div>
        </div>
        @endguest



        <div id="page-content-wrapper" class="w-100">

            <nav class="navbar navbar-expand-lg navbar-dark border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-light" id="sidebarToggle">
                        <i class="bi bi-list"></i>
                    </button>
                    <a class="navbar-brand ms-3" href="/">VendasPro</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Sair
                                    </a>
                                </form>
                            </li>
                            @endauth
                            @guest
                            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register">Cadastrar</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="container my-5">
                @yield('content')
            </main>

            <footer class="footer text-center">
                <div class="container">
                    <p>&copy; {{ date('Y') }} Marketplace. Todos os direitos reservados.</p>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    </script>
</body>

</html>