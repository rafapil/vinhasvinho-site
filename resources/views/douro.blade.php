@extends('layouts.app')

@section('title', 'Douro')

@section('content')


<div class="container mb-3">
    <section><img src="{{asset('img/banner-regiao-douro-.jpg')}}" class="container backgroundimages"></section>
</div>

<section class="container mb-3">
        <div class="container row rl-mgreg">
            <div class="col rl-lf-mgreg rl-img-regiao">
                <img src="{{asset('img/imagem-pagina-douro-min.jpg')}}" class="rl-imgregleft">
            </div>
            <div class="col rl-rg-mgreg ml-3">
                <br>
                <p class="col rl-titreg">DOURO</p>
                <p>Ao longo de quase dois milénios, fez-se, na encostas xistosas do vale do Douro, uma paisagem vitícola singular, um vinho excepcional.</p>
                <p>Mais do que um dom da natureza, o vinho do Porto é, na sua essência, essa espessura histórica, um património cultural colectivo de trabalho e experiências, saberes e arte, que gerações e gerações acumularam.</p>
                <p>O vinho do Porto foi e é um produto chave da economia nacional e ainda mais um valor simbólico que distintamente representa a portugalidade no mundo.</p>
                <p>No último terço do séc. XVII, em tempo de rivalidades entre os impérios marítimos do Norte, flamengos e ingleses aumentam a procura dos vinhos ibéricos, em detrimento dos de Bordeaux e de outras regiões francesas.</p>
                <p>A Inglaterra importa crescentes quantidades de Porto. Em 1703, o Tratado de Methuen virá consagrar no plano diplomático este fluxo mercantil, prevendo a contrapartida de privilégios para os tecidos britânicos no mercado português.</p>
            </div>
        </div>
</section>


@endsection
