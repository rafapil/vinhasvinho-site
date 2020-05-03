@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

<div id="divbackground" class="container">
    <section><img src="{{asset('img/banner_faq.jpg')}}" class="container backgroundimages"></section>
</div>

<!--<div class = "banner" class="container">
    <img class = "mySlides" src = "assets/img/faq03.jpg" alt = "FAQ" style = "width: 100%">
</div> -->

    <div class="container">
     <div class="rules-page">


        <h2 class="title-page"><strong>Dúvidas?</strong></h2>

        <div id="item1" class="item">
            <a data-toggle="collapse" href="#collapse-1" class="collapsed" aria-expanded="false">
                <div class="item-body">
                    <div class="content">

                        <h4 class="pergunta">1- Como faço para realizar um pedido?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-1" aria-expanded="false" style="height: 11px;">
            <p>Achou o produto que você queria? Escolha seu tamanho e clique em “Comprar”.</p>
            <p>Você poderá optar por selecionar mais produtos ou ir para o carrinho. Feito?</p>
            <p>Agora insira seu CEP para calcular o valor do frete.</p>
            <p>Clique em “Finalizar compra”, faça seu login (ou crie um caso não tenha), escolha a forma de pagamento e clique em "Finalizar compra".</p>
            <p>Não se esqueça de conferir o valor final do carrinho.</p>
            <p>Quando o pagamento for confirmado, enviaremos um e-mail com a data prevista de entrega.</p> <br>

        </div>

        <!--final bloco1-->

        <div id="item2" class="item">
            <a data-toggle="collapse" href="#collapse-2" class="collapsed" aria-expanded="false">
                <div class="item-body">

                    <div class="content">

                        <h4 class="pergunta">2- Como faço para saber meu e-mail de cadastro?</h4>
                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-2" aria-expanded="false" style="height: 11px;">
            <p>Para recuperar seu e-mail de cadastro clique em "Entrar" e depois em "Esqueceu seu e-mail?", insira o CPF cadastrado e mostraremos o e-mail.</p>
            <p>Para sua segurança alguns caracteres serão ocultados.</p> <br>

        </div>


        <!--final bloco2-->

        <div id="item3" class="item">
            <a data-toggle="collapse" href="#collapse-3" class="collapsed" aria-expanded="false">
                <div class="item-body">

                    <div class="content">

                        <h4 class="pergunta">3- Como faço para recuperar minha senha?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-3" aria-expanded="false" style="height: 11px;">
            <p>Esqueceu sua senha? Isso acontece!</p>
            <p>Clique em "Entrar" e em seguida "Relembrar sua senha". Preencha o campo com seu e-mail ou CPF e pronto!</p><br>

        </div>

        <!--final bloco3-->

        <div id="item4" class="item">
            <a data-toggle="collapse" href="#collapse-4" class="collapsed" aria-expanded="false">
                <div class="item-body">

                    <div class="content">

                        <h4 class="pergunta">4- Como faço para alterar meu endereço de entrega?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-4" aria-expanded="false" style="height: 11px;">
            <p>Para alterar o endereço de entrega ou cobrança, acesse “Entrar” e clique em “Meus endereços”. Nessa página, você poderá editar o endereço cadastrado ou adicionar um novo. Lembramos que não efetuamos
                entregas em caixas postais.</p>


            <p>Importante! Por motivos de segurança, para pedidos já finalizados não é possível alterar o endereço de entrega. A alteração do endereço só será possível para uma nova compra.</p><br>

        </div>


        <!--bloco 4 final-->

        <div id="item5" class="item">
            <a data-toggle="collapse" href="#collapse-5" class="collapsed" aria-expanded="false">
                <div class="item-body">
                    <div class="content">
                        <h4 class="pergunta">5- Onde vejo o prazo de entrega do pedido?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-5" aria-expanded="false" style="height: 11px;">
            <p> O prazo de entrega do pedido é informado, após colocar o CEP e na página de finalização a gente confirma essa data. Enviamos por e-mail também, assim você pode se preparar melhor para o recebimento,
                mas se quiser, dá para acompanhar pelo site e pelo aplicativo, neste passo a passo feito para você:

                <ol>
                    <li>Faça seu login e clique em minha conta.</li>

                    <li>Clique em pedidos e, após isso, localize o pedido que quer acompanhar.</li>

                    <li>Clique em ver mais detalhes, assim você poderá localizar a data de entrega ao lado direito da tela, além de ver o endereço, transportadora e até mesmo acompanhar a entrega.</li><br>
                </ol>

        </div>

        <!--bloco5 final-->

        <div id="item6" class="item">
            <a data-toggle="collapse" href="#collapse-6" class="collapsed" aria-expanded="false">
                <div class="item-body">

                    <div class="content">

                        <h4 class="pergunta">6- Qual é o prazo para confirmação de pagamento?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-6" aria-expanded="false" style="height: 11px;">
            <p> A confirmação de pagamento do pedido pode levar até 2 (dois) dias úteis.</p>
            <p>Se após 3 dias úteis, você não receber a confirmação por e-mail, entre em contato com nossa Central de Relacionamento.</p><br>

        </div>
        <!--bloco6 final-->

        <div id="item7" class="item">
            <a data-toggle="collapse" href="#collapse-7" class="collapsed" aria-expanded="false">
                <div class="item-body">

                    <div class="content">

                        <h4 class="pergunta">7- O que significa pedido em análise?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-7" aria-expanded="false" style="height: 11px;">
            <p>Para sua segurança, todo pedido realizado com cartão de crédito passa por uma análise de dados cadastrais. A análise é realizada em até 72 horas após a finalização do pedido. Nesse período, poderá
                ocorrer contato telefônico por nosso departamento responsável para confirmação de dados. Por isso, é muito importante que seus dados cadastrais estejam atualizados e completos, pois facilita e agiliza nosso contato. Assim que seu pedido
                for aprovado você receberá um e-mail de confirmação. </p><br>
        </div>

        <!--bloco7 final-->

        <div id="item8" class="item">
            <a data-toggle="collapse" href="#collapse-8" class="collapsed" aria-expanded="false">
                <div class="item-body">

                    <div class="content">

                        <h4 class="pergunta">8- Como faço para cancelar minha compra?</h4>

                    </div>
                </div>
        </div>
        </a>

        <div class="item-footer collapse" id="collapse-8" aria-expanded="false" style="height: 11px;">
            <p>Se a forma de pagamento escolhida foi o boleto bancário e o pagamento ainda não foi efetuado, o pedido será cancelado automaticamente às 0h do dia seguinte ao vencimento do boleto, sem qualquer
                ônus para você.</p>

            <p>Se efetuou o pagamento com cartão de crédito e a Nota Fiscal não tiver sido emitida, você poderá solicitar o cancelamento ao entrar em contato com nossa Central de Relacionamento ou por meio do autoatendimento.</p><br>
        </div>
      </div>
    </div>

@endsection
