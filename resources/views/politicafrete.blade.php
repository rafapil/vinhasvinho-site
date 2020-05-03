@extends('layouts.app')

@section('title', 'Politica de Frete')

@section('content')

<div id="divbackground" class="container">
    <section><img src="{{asset('img/banner-pagina-frete.jpg')}}" class="container backgroundimages"></section>
</div>

<!--<div class = "banner" class="container">
     <img class = "mySlides" src = "imagem/banner-pagina-frete.jpg" alt = "Frete" style = "width: 100%">
</div>!-->

       <div class="container">
            <div class="rules-page">

        <h2 class="title-page"><strong>POLÍTICA DE FRETE</strong></h2>
        <p>A Vinhas e Vinhos oferece a opção de <strong>FRETE GRÁTIS</strong> para muitas regiões.</p>
        <p>O valor do pedido mínimo necessário para atingir o frete grátis depende da sua região.</p><br>

        <div id="item1" class="item">
            <a data-toggle="collapse" href="#collapse-1" class="collapsed" aria-expanded="false">
                <div class="item-body">
                    <div class="content">

                        <h4 class="listadefrete"><strong><u>Frete Grátis oferecido para as seguintes regiões:</strong></u></h4><br>

                    </div>
                </div>
        </div>
        </a>
        <br>

        <div class="item-footer collapse" id="collapse-1" aria-expanded="false" style="height: 11px;">

                <p>SP Capital - R$100</p>

                <p>SP Interior - R$250</p>


                <p>Capital (e Niteroi), também MG, ES, PR, SC, RS Capitais - R$250</p>

                <p>RJ, MG, ES, PR, SC, RS Interiores - R$350</p>


                <p>Brasilia - R$300</p>

                <p>Goiais Interior- R$400</p>


                <p>BA, MT Capitais - R$350</p>

                <p>BA, MT Interiores - R$400</p>


                <p>Para as demais regiões o valor do frete pode ser calculado ao inserir CEP na página de carrinho.</p>

        </div>

        <!--final bloco1-->
        <h3 class="SubTitle"><strong> Qual meu prazo de entrega?</strong></h3>

        <p>O prazo de entrega varia com o local, a forma de pagamento escolhida e o produto desejado. Para saber o tempo médio de deslocamento do seu pedido, basta inserir seu CEP na hora de finalizar a compra.</p>
        <p>A contagem para o envio dos pedidos tem início sempre às 12h do dia em que a compra foi feita e aprovada. Para compras após esse horário, a contagem começa no dia seguinte.</p> <br>

        <p>Para pagamento em boleto bancário, o banco poderá levar até dois dias úteis para comunicar à SixWine o processo de compensação bancária.Será sempre considerado o horário de aprovação do pagamento, e não o horário em que a compra foi feita. Essa
            análise pode levar até um dia útil.</p><br>



        <p>Por exemplo: Se você comprou em 13/01/2019 (segunda-feira) às 12h, seu pagamento foi aprovado em 14/01/2019 (terça-feira) às 7h e seu prazo de entrega é de três dias úteis, então sua data prevista para entrega é 17/01/2019 (sexta-feira).</p>

        <p>Atenção: Para agilizar as entregas, às vezes enviaremos os produtos da sua compra separadamente (vinho e produtos gourmet geralmente são enviados separados).*</p> <br>


        <!--final bloco2-->

        <h3 class="SubTitle"><strong>Como vou receber minha compra em casa?</strong></h3>


        <p>Nossas entregas são realizadas por transportadoras contratadas e, de vez em quando, pelos Correios (dependendo do local). Nas entregas convencionais, os produtos são enviados diretamente ao endereço escolhido. Quando a entrega é efetuada pelos
            Correios ou em alguma região de difícil acesso ou quando não há ninguém para receber o pedido, o carteiro deixa um protocolo no endereço indicado informando que o produto está à disposição do cliente na agência de origem. Os produtos são entregues
            das 8h às 21h.</p><br>

        <h3 class="SubTitle"><strong>Posso alterar o endereço de entrega da minha compra?</strong></h3>


        <p>Sim, desde que você mude o endereço de destino até seis horas depois de efetuar a compra.Depois desse prazo, pedimos que entre em contato com a nossa equipe Suporte (suporte@vinhasevinhos.com.br).</p><br>

        <h3 class="SubTitle"><strong> Entrega para outras pessoas?</strong></h3>



        <p>A entrega poderá ser feita a terceiros, como porteiros ou parentes, mas nunca na ausência de um adulto (maior de 18 anos).</p><br>

        </div>
</div>

@endsection
