@extends('layouts.app')

@section('title', 'Minho')

@section('content')

<div class="container mb-3">
    <section><img src="{{asset('img/banner-regiao-minho.jpg')}}" class="container backgroundimages"></section>
</div>

<section class="container mb-3">

        <div class="container row rl-mgreg">
            <div class="col rl-lf-mgreg rl-img-regiao">
                <img src="{{asset('img/imagem_minho-pagina-regioes.jpg')}}" class="rl-imgregleft">
            </div>
            <div class="col rl-rg-mgreg ml-3">
                <br>
                <p class="col rl-titreg">MINHO</p>

                <p>O Vinho Verde, produzido na Região Demarcada dos Vinhos Verdes, em Portugal, constitui uma denominação de origem controlada cuja demarcação remonta a 1908.</p>
                <p>Único no mundo. Naturalmente leve e fresco, produzido no território do Entre os rios Douro e Minho, no noroeste de Portugal, uma região costeira geograficamente bem localizada para a produção de excelentes vinhos brancos.</p>
                <p>Berço da carismática casta Alvarinho e produtora de vinhos de lote únicos, a Região dos Vinhos Verdes oferece um conjunto ímpar de vinhos muito gastronómicos. Com moderado teor alcoólico, e portanto menos calórico.
                <p>O Vinho Verde é um vinho frutado, fácil de beber, óptimo como aperitivo ou em harmonização com refeições leves e equilibradas: saladas, peixes, mariscos, carnes brancas, petiscos, sushi, sashimi e outros pratos internacionais.</p>
            </div>
        </div>
</section>

@endsection
