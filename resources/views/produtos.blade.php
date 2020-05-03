@extends('layouts.app')

@section('title', 'Produtos')

@section('content')

<main>
    <div class="container my-5">
        <div class="row no-row">
            <div class="col-12 col-sm-3 mr-5">
                <nav class="navbar-light navbar-expand-md navbar-expand-sm navigation-clean-search" id="navbar2">
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"
                            id="Toggler1"><span class="sr-only">Toggle navigation</span><span
                                class="icon-arrow-down"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-2">
                            <ul class="flex-column nav navbar-nav">
                                <h2 class="nav-link h-resp" href="#">CATEGORIAS</h2>
                                @if(isset($categorias))
                                @foreach($categorias as $categoria)
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="/produtos/categoria/{{$categoria['cat_id']}}">{{$categoria['cat_categoria']}}</a></li>
                                @endforeach
                                @endif
                                @if(isset($regioes))
                                @foreach($regioes as $regiao)
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="/produtos/regiao/{{$regiao['reg_id']}}">{{$regiao['reg_produtores']}}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                </nav>
            </div>
            <div class="col-12 col-sm-8">
                <div class="d-flex justify-content-between">
                    <div class="row col-3 col-responsive py-4">
                        <i class="material-icons"><img class="size375"
                                src="{{asset('icons/view_module-black-18dp/2x/baseline_view_module_black_18dp.png')}}"
                                iconsalt=""></i>
                        <i class="material-icons"><img class="size375"
                                src="{{asset('icons/list-black-18dp/2x/baseline_list_black_18dp.png')}}" alt=""></i>
                    </div>
                    <div class="row py-4">
                        <p class="m-2">Ordenar por:</p>
                        <div class="dropdown mr-1">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Em destaque</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/menor">Menor preço</a>
                                <a class="dropdown-item" href="/maior">Maior preço</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex row">

                @if(isset($produtos))
                @foreach($produtos as $produto)
                <div class="col-4 col-responsive my-3">
                    <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                            src="{{$produto['imgprod_urlimg']}}" class="produtosdestaque">
                        <p class="paragraphproduct">{{$produto['prod_nomevinho']}}</p>
                        <p class="paragraphproduct-00">Reserva {{$produto['prod_tipouva']}}<br></p>
                        <button class="btn btn-produtct-00" type="button"><a class="color-link-white"
                                href="/produtos/{{$produto['prod_id']}}">comprar</a></button>
                    </div>
                </div>
                @endforeach
                <div class="form-group text-center my-5">
                    {{$produtos->render()}}
                </div>
                @endif

                    {{-- <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p>
                            <button class="btn btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p>
                            <button class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                    <div class="col-4 col-responsive my-3">
                        <div class="text-center divprodutosdestaque"><img class="sizeimgprod"
                                src="{{asset('img/garrafa01.png')}}" class="produtsdestaque">
                            <p class="paragraphproduct">QUINTA DAS CORRIÇAS</p>
                            <p class="paragraphproduct-00">Reserva Tinta Amarela<br></p><button
                                class="btn btn-dark btn-produtct-00" type="button"><a class="color-link-white"
                                    href="/index/produtos/produto.php">comprar</a></button>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="form-group text-center my-5">
                    <button class="btn btn-maisProdutos" name="action" value="login">
                        <a class="color-link-white" href="#">Mais produtos</a></button>
                </div> --}}
            </div>
        </div>
    </div>
</main>

@stop
