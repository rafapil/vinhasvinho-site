@extends('layouts.app')
@section('title', 'Cadastro de Produtores')


@section('content')
{{-- Iniciar aqui o cadastro de produtores --}}

<div class="container my-5 py-5">
    <h1>Cadastro de produtores</h1>
    <form method="post" enctype="multipart/form-data" action="/cadProdutores/insert">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da imagem</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="segmento">Segmento</label>
            <input type="text" name="segmento" id="segmento" class="form-control">
        </div>

        <div class="form-group">
            <label for="imagem">Selecione a Imagem</label> <br>
            <input type="file" name="imagem" id="imagem">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>

    @if(@isset($produtores) && count($produtores) > 0)
    <table class="table">
        <thead>
            <tr>
                <td>
                    <h5 class="field-label-6">Nome da imagem</h5>
                </td>
                <td>
                    <h5 class="field-label-6">Seguimento da imagem</h5>
                </td>
                <td>
                    <h5 class="field-label-6">Ações</h5>
                </td>
            </tr>
        </thead>
        @foreach ($produtores as $produtor)
        <tr>
            <td>{{$produtor->imgprod_nome}}</td>
            <td>{{$produtor->imgprod_seguimento}}</td>
            <td><a href="/cadProdutores/remove/{{$produtor->imgprod_id}}" class="btn btn-danger">excluir</a></td>
        </tr>
        @endforeach
    </table>
    @else
    <h5 class="alert alert-info">Sem dados cadastrados</h5>
    @endif

</div>


@endsection