@extends('layouts.app')

@section('title', 'Privacidade')

@section('content')

<div id="divbackground" class="container">
    <section><img src="{{asset('img/banner-pagina-privacidade.jpg')}}" class="container backgroundimages" alt = "Política de Privacidade"> </section>
</div>

  <!--<div class ="banner" class="container">
            <img class = "mySlides" src = "assets/img/banner-pagina-privacidade2.jpg" alt = "Política de Privacidade" style = "width: 100%">
</div>-->

    <div class="container">
        <div class="rules-page">

        <h2 class="title-page"><strong>POLÍTICA DE PRIVACIDADE</strong></h2>

        <p>A Vinhas e vinho tem o compromisso com a privacidade e segurança de seus clientes durante todo o processo de navegação e compra pelo site. Os dados cadastrais dos clientes não são vendidos, trocados ou divulgados para terceiros, exceto quando
            essas informações são necessárias para o processo de entrega, para cobrança ou para participação em promoções solicitadas pelos clientes - isso porque seus dados pessoais são peça fundamental para que seu pedido chegue em segurança até sua
            casa de acordo com nosso prazo de entrega.</p>

        <p>Os e-mails e telefones disponibilizados são utilizados apenas para contatos referentes às compras realizadas em nosso site. Não armazenamos informações que não sejam necessárias para a efetivação da compra.</p>

        <p>Com prévia autorização dos clientes, enviamos e-mails informando as promoções vigentes em nossa loja. Nossos clientes podem solicitar o não recebimento dos e-mails a qualquer momento</p>

        <p>O uso do CPF é exigido por lei para a emissão de notas fiscais e para o envio de mercadorias. As senhas fornecidas em nosso banco de dados são arquivadas de maneira criptografada, assim, apenas o dono do cadastro pode ter conhecimento. </p>

        <p>Os números de cartões de crédito fornecidos são registrados diretamente no banco de dados das administradoras de cartão, não permitindo o acesso a essas informações por parte da Vinhas e Vinhos. Ao informar os dados para a administradora, esta
            realiza a verificação da transação online e retorna informando apenas se a compra está liberada ou não.</p> <br>
         </div>
    </div>

@endsection
