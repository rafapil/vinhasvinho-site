@extends('layouts.app')

@section('content')

<div class="container mb-3">
    <section><img src="{{asset('img/banner-regiao-tras-os-montes.png')}}" class="container backgroundimages"></section>
</div>

<section class="container mb-3">
        <div class="container row rl-mgreg">
            <div class="col rl-lf-mgreg rl-img-regiao">
                <img src="{{asset('img/imagem_tras_os_montes-pagina-regioes.jpg')}}" class="rl-imgregleft">
            </div>
            <div class="col rl-rg-mgreg ml-3">
                <br>
                <p class="col rl-titreg">TRÁS-OS-MONTES</p>
                <p>Situada a Norte de Portugal a Região de Trás-os-Montes revela-se por entre montes e pronunciados vales numa grande área de extensão. Esta é uma Região única com características especiais.</p>
                <p>Em toda a região o cenário muda rapidamente, entre exuberantes vales verdejantes, ou colinas antigas cobertas por uma colcha de retalhos de bosques.O cultivo da vinha e a produção de vinho na Região de Trás-os-Montes tem origem secular, estando esta intrinsecamente marcada nas suas rochas, uma vez que por toda a região existem vários lagares cavados na rocha de origem Romana e Pré-Romana.</p>
                <p>A existência de vinhas velhas com castas centenárias marca também de uma forma muito peculiar a qualidade reconhecida dos vinhos desta região.</p>
            </div>
        </div>
</section>

@endsection
