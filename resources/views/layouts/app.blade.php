<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta charset="utf-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vinhas e Vinhos</title>

    <!-- css font e icones -->
    <link rel="stylesheet" href="{{@asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{@asset('css/font-style.css')}}">
    <link rel="stylesheet" href="{{@asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{@asset('css/font-awesome.min.css')}}" />

    <link rel="stylesheet" href="{{@asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{@asset('css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{@asset('css/Navigation-with-Search.css') }}">
    <link rel="stylesheet" href="{{@asset('css/bootstrap.min.css') }}">


</head>

<body>
    <header class="text-white container">
        <ul class="nav float-right ml-auto nav-1">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fa fa-user"
                        id="userIcon"></i>&nbsp;Minha
                    Conta</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('carrinho') }}"><i class="fa fa-shopping-cart"
                        id="cartIcon"></i>&nbsp;Carrinho</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Bem Vindo !
                    <i class="fa fa-user" id="userIcon"></i>&nbsp;{{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa fa-shopping-cart"
                        id="cartIcon"></i>&nbsp;Carrinho</a>
            </li>
            @endguest
        </ul>


        {{-- Aqui é parte dedicada para as redes sociais  --}}
        <ul class="nav text-white nav-2">
            <li class="nav-item nav-social"><a class="nav-link active" href="#"><i class="icon-social-facebook"
                        id="faceIcon"></i></a></li>
            <li class="nav-item nav-social"><a class="nav-link active" href="#"><i class="fab fa-instagram"
                        id="instaIcon"></i></a></li>
        </ul>
    </header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{@asset('img/Layer895.png')}}" height="90px"></a><button
                class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="produtos">Vinhos</a></li>

                    <li class="nav-item dropdown" role="presentation">
                        <a class="nav-link" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Regiões</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="tras-os-montes">trás os montes</a>
                            <a class="dropdown-item" href="douro">Douro</a>
                            <a class="dropdown-item" href="minho">Minho</a>
                        </div>
                    </li>


                    <li class="nav-item" role="presentation"><a class="nav-link" href="produtores">Produtores</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="quemsomos">Quem somos</a></li>
                </ul>
                <form class="form-inline ml-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label>
                        <input class="form-control search-field" type="search" name="search" id="search-field">
                        <a class="btn btn-search-00" role="button" href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Fim do Header -->
    @yield('content')
    <!-- Inicio do Footer -->

    <div class="footer-dark container">
        <footer>
            <div class="container text-left">
                <div class="row  justify-content-xl-center">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>INSTITUCIONAL</h3>
                        <ul>
                            <li><a href="quemsomos">QUEM SOMOS</a></li>
                            <li><a href="regioes">REGIÕES</a></li>
                            <li><a href="produtores">PRODUTORES</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>SUPORTE</h3>
                        <ul>
                            <li><a href="politicafrete">POLÍTICA DE FRETE</a></li>
                            <li><a href="privacidade">POLÍTICA DE PRIVACIDADE</a></li>
                            <li><a href="devolucao">POLITICA DE DEVOLUÇÃO</a></li>
                            <li><a href="faq">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Contato</h3>
                        <p class="contato">(11) 3000-7000</p>
                        <p class="contato">sac@vinhasevinho.com.br</p>
                        <!--<p class="contato"><a href="contato.php" id="saqLink">SAQ</a></p> -->
                        <p class="contato contato-space">PAGAMENTO</p>
                        <img src="{{@asset('img/credit_card_logos.png')}}">
                    </div>
                </div>
                <p class="copyright">Vinhas e Vinho S.A. CNPJ: 30472809/0000-00 | copyright 2019 - Todos os direitos
                    reservados</p>
            </div>
        </footer>
    </div>
    <script src="{{@asset('js/jquery.min.js')}}"></script>
    <script src="{{@asset('js/bootstrap.min.js')}}"></script>

</body>

</html>