@extends('layouts.app')

@section('title', 'Regioes')

@section('content')


<div id="divbackground" class="container">
    <section><img src="{{asset('img/regioes-up.jpg')}}" class="container backgroundimages"></section>
</div>
<section id="regioes" class="container">
    <div class="container row rl-black">
        <div class="col rl-black">
            <p>Os Melhores Vinhos Portugues</p>
            <p>O vinho português é considerado um dos melhores do mundo devido a diversidade de uvas que podem ser
                encontradas no país e ao clima variado de suas regiões.</p>
        </div>
    </div>
    <div class="container row rl-mgreg">

        <div class="col rl-lf-mgreg rl-img-regiao">
            <img src="{{asset('img/TRAS-OS-MONTES.png')}}" class="rl-imgregleft">
        </div>
        <div class="col rl-rg-mgreg">
            <br>
            <p class="col rl-titreg">TRÁS-OS-MONTES</p>
            <p>Situada a Norte de Portugal a Região de Trás-os-Montes revela-se por entre montes e pronunciados vales
                numa grande área de extensão. Esta é uma Região única com características especiais.</p>

            <div class="d-xl-flex justify-content-xl-center align-center">
                <a href="tras-os-montes">
                    <button
                        class="btn btn-light d-xl-flex justify-content-xl-center align-items-xl-end btn-more-products"
                        type="button">SAIBA MAIS</button>
                </a>
            </div>
        </div>

    </div>

    <div class="container row rl-mgreg">

        <div class="col rl-lf-mgreg rl-img-regiao">
            <img src="{{asset('img/DOURO.png')}}" class="rl-imgregleft">
        </div>
        <div class="col rl-rg-mgreg">
            <br>
            <p class="col rl-titreg">DOURO</p>
            <p>Ao longo de quase dois milénios, fez-se, na encostas xistosas do vale do Douro, uma paisagem vitícola
                singular, um vinho excepcional.</p>
            <div class="d-xl-flex justify-content-xl-center align-center">
                <a href="douro">
                    <button
                        class="btn btn-light d-xl-flex justify-content-xl-center align-items-xl-end btn-more-products"
                        type="button">SAIBA MAIS</button>
                </a>
            </div>
        </div>

    </div>

    <div class="container row rl-mgreg">

        <div class="col rl-lf-mgreg rl-img-regiao">
            <img src="{{asset('img/MINHO.png')}}" class="rl-imgregleft">
        </div>
        <div class="col rl-rg-mgreg">
            <br>
            <p class="col rl-titreg">MINHO</p>

            <p>O Vinho Verde, produzido na Região Demarcada dos Vinhos Verdes, em Portugal, constitui uma denominação de
                origem controlada cuja demarcação remonta a 1908.</p>
            <div class="d-xl-flex justify-content-xl-center align-center">
                <a href="minho">
                    <button
                        class="btn btn-light d-xl-flex justify-content-xl-center align-items-xl-end btn-more-products"
                        type="button">SAIBA MAIS</button>
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
