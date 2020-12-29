<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KS - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-layout-bg mb-3">
            <div class="container-fluid">
                <a class="navbar-brand " href="{{ route('home') }}">
                    <img src="{{ asset('images/ks.png') }}" alt="" width="40" height="32" class="d-inline-block align-top">
                    KS Members
                </a>

                <ul class="d-flex mt-3">
                    <li class="mx-2"><a href="{{ route('login') }}">Entrar</a></li>
                    <li class="mx-2"><a href="{{ route('register') }}">Registrar</a></li>
                    <li class="mx-2"><a href="#">Ver Membros</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="p-5 bg-layout-bg text-white text-center">
            <p>Copyright {{ date('Y') }} - KS Members</p>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
