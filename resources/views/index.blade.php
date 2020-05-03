@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div id="divbackground" class="container">
    <section>
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/slide-01_vinhasevinho.jpg')}}" class="container backgroundimages" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/slide-02_vinhasevinho.jpg')}}" class="container backgroundimages" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/slide-03_vinhasevinho.jpg')}}" class="container backgroundimages" alt="Terceiro Slide">
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Imagem dos fretes nao direciona para nenhum local -->
<div id="divservicos" class="container">
    <section>

        <img src="{{asset('img/banner_entrega.png')}}" class="container backgroundimages">

    </section>
</div>
<div class="article-list">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 item-regiao">
                <!-- bloco com as imagens de regiao -->
                <a href="tras-os-montes.php"><img class="img-fluid imgdivulgation" src="{{asset('img/tras-os-montes-home.png')}}"></a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 item-regiao">
                <a href="douro.php"><img class="img-fluid imgdivulgation" src="{{asset('img/douro-home.png')}}"></a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 item-regiao">
                <a href="minho.php"><img class="img-fluid imgdivulgation" src="{{asset('img/minho-home.png')}}"></a>
                <a href="#" class="action"></a>
            </div>
        </div>
    </div>
</div>
<section id="productspremium" class="container">
    <article>
        <div>
            <p class="titulo">DESTAQUES</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center divprodutosdestaque"><img src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                    <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                    <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button class="btn btn-dark btn-produtct-00" type="button">comprar</button>
                </div>
            </div>
            <div class="col">
                <div class="text-center divprodutosdestaque"><img src="{{asset('img/garrafa02.png')}}" class="produtsdestaque">
                    <p class="paragraphproduct">ESTOPA</p>
                    <p class="paragraphproduct-00">Colheita Tinto Red<br></p><button class="btn btn-dark btn-produtct-00" type="button">comprar</button>
                </div>
            </div>
            <div class="col">
                <div class="text-center divprodutosdestaque"><img src="{{asset('img/garrafa03.png')}}" class="produtsdestaque">
                    <p class="paragraphproduct">FAFIDE</p>
                    <p class="paragraphproduct-00">Colheita Tinto<br></p><button class="btn btn-dark btn-produtct-00" type="button">comprar</button>
                </div>
            </div>
            <div class="col">
                <div class="text-center divprodutosdestaque"><img src="{{asset('img/garrafa04.png')}}" class="produtsdestaque">
                    <p class="paragraphproduct">CASTELLO D'ALBA</p>
                    <p class="paragraphproduct-00">Vinhas Velhas<br></p><button class="btn btn-dark btn-produtct-00" type="button">comprar</button>
                </div>
            </div>
        </div>
    </article>

    <div class="row d-xl-flex justify-content-center align-center"><button class="btn btn-light btn-more-products" type="button">ver mais produtos</button></div>

</section>
<section id="eventos" class="container">
    <article>
        <div class="row row-divulga">
            <div class="col col-divulgation1">
                <a href="#"><img src="{{asset('img/Rectangle_esquerda.png')}}" class="imgdivulgation"></a>
            </div>
            <div class="col col-divulgation2">
                <a href="#"><img src="{{asset('img/Rectangle_direitapng.png')}}" class="imgdivulgation"></a>
            </div>
        </div>
    </article>
</section>
<!-- Carourcel novo vai ter que ser em jquery sem ideia geral

<div id="carrocel-final" class="container">
    <img src="assets/img/logos_produtores/BANNER_PONTEDOARQUINHO-cinza(1).png" class="img-produtores">
    <img src="assets/img/logos_produtores/BANNER_QUINTADATERRINCHA-cinza.png" class="img-produtores">
    <img src="assets/img/logos_produtores/BANNER_quintadefafide.png" class="img-produtores">
    <img src="assets/img/logos_produtores/BANNER_TERRASDOSALVANTE-cinza(1).png" class="img-produtores">
</div>
-->

<section id="productspremium" class="container flex-row">
    <article>
        <div class="row d-xl-flex justify-content-center align-center"><i class="fab fa-instagram" id="instaIcon2"></i>
            <p class="titulo instagram">instagram</p>
        </div>
        <div class="row articles">
            <div class="col-12 col-sm-12 col-md-4 item-regiao col-instagram2">
                <a href="#"><img src="{{asset('img/insta001.png')}}" class="imgdivulgation"></a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 item-regiao col-instagram">
                <a href="#"><img src="{{asset('img/insta002.png')}}" class="imgdivulgation"></a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 item-regiao col-instagram2">
                <a href="#"><img src="{{asset('img/insta003.png')}}" class="imgdivulgation"></a>
            </div>
        </div>
    </article>

    <div class="row d-xl-flex justify-content-center align-center"><button class="btn btn-light d-xl-flex justify-content-xl-center align-items-xl-end btn-more-products2" type="button">mostar mais</button></div>

</section>

@stop
