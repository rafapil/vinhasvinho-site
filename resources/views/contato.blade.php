@extends('layouts.app')

@section('title', 'Contato')

@section('content')

<section class='container'>
    <form action="" method="post" class="form-contato d-flex flex-column p-5">
        <label for="nome">Nome: *</label>
        <input id="nome" type="text">

        <label for="e-mail">E-mail: *</label>
        <input id="email" type="email">

        <label for="assunto">Assunto: </label>
        <input type="text" id="assunto">

        <label for="mensagem">Mensagem </label>
        <textarea name="" id="mensagem" cols="30" rows="10"></textarea>

        <button class="col-lg-3 col-md-3 col-sm-12 col-12 align-self-end mt-3 p-2 button-contato" type="submit">Enviar</button>
    </form>
</section>

@endsection
