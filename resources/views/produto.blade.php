@extends('layouts.app')

@section('title', 'Produto')

@section('content')

<section class="container">
    @if($produto)
    <div class="d-flex my-3">
        <div class="col-6-second background-color-h2">
            <h3 class="text-center m-4 p-2">{{$produto['rot_produtor']}}</h3>
            <p class="text-center m-4 px-2">{{$produto['rot_brevedescricao']}}</p>
        </div>
        <div class="col-6-second visibility">
            <img class="imgRight" src="{{$produto['rot_imgurl']}}" alt="">
        </div>
    </div>
    <div class="col-12 row my-3">
        <div class="col-6-second">
            <img class="imgLeft my-5" src="{{$produto['imgprod_urlimg']}}" alt="">
        </div>
        <div class="col-6-second">
            <h3 class="text-center m-4 p-2">{{$produto['prod_nomevinho']}}</h3>
            <h4 class="text-center m-4 p-2">{{$produto['prod_descrivinho']}}</h4>
            <p class="text-center m-4 px-2">{{$produto['rot_fulldescricao']}}</p>
            <h4 class="text-center m-4 p-2"><strong>R$ {{$produto['prod_valor']}}</strong></h4>
            <div>
                <div class="row justify-content-center my-5">
                    <button class="button_color size ">-</button>
                    <div class="size">
                        <p class="text-center">1</p>
                    </div>
                    <button class="button_color size">+</button>
                    <button class="button_color mx-2"><a class="color-link-white"
                            href="carrinho.php">Comprar</a></button>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <label class="CEPsize">Calcule o Frete<br>
                    <input class="CEP" name="cep" type="text" id="cep" value="" size="10" maxlength="9" /><button
                        class="button_color">OK</button>
                </label>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row my-3 background-color_2">
        <div class="col-6-second visibility">
            <img class="imgLeft_rot" src="{{$produto['imgprod_urlimg']}}" alt="">
        </div>
        <div class="d-flex flex-column m-3 after_768">
            <div class="d-flex m-3">
                <img class="icon_img mx-2" src="{{asset('icons/cacho-de-uvas.png')}}" alt="">
                <p class="pt-2">{{$produto['prod_tipouva']}}</p>
            </div>
            <div class="d-flex m-3">
                <img class="icon_img mx-2" src="{{asset('icons/campo.png')}}" alt="">
                <p class="pt-2">Produtos: {{$produto['rot_produtor']}}</p>
            </div>
            <div class="d-flex m-3">
                <img class="icon_img mx-2" src="{{asset('icons/pin.png')}}" alt="">
                <p class="pt-2">Região: {{$produto['reg_produtores']}}</p>
            </div>
            <div class="d-flex m-3">
                <img class="icon_img mx-2" src="{{asset('icons/wine.png')}}" alt="">
                <p class="pt-2">Teor Alcoólico: {{$produto['prod_teoralcool']}}</p>
            </div>
        </div>
    </div>
    @endif
</section>

@stop
