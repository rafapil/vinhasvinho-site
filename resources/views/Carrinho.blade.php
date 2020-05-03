@extends('layouts.app')

@section('title', 'Carrinho')

@section('content')

<main>
  <div class="container my-5">
    <h1>Carrinho</h1><br>
    <table class="table ajuste-borda">
      <thead>
        <tr>
          <th class="text-center">Produto</th>
          <th>Preço unitário</th>
          <th>Quantidade</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr class="borda-bot">
          <td>
            <div class="row borda_carrinho">
              <div class="text-center m-4">
                <img src="../../public/img/garrafa02.png" class="rounded img-fluid img-carrinho" alt="Responsive image">
              </div>
              <div>
                <p class="descricao-carrinho mt-4"><strong>QUINTA-DAS-CORRIÇAS</strong></p>
                <p class="descricao-carrinho">Estoque:<strong> Disponível</strong></p>
                <p class="descricao-carrinho">Unidade ou Caixa:<strong> 1 Unidade</strong></p>
              </div>
            </div>
          </td>
          <td class="pt-5">R$ 110,00</td>
          <td>
            <div class="form-group--number">
              <button class="minus mt-4"><span>-</span></button>
              <input class="form-control mt-4" type="text" value="2">
              <button class="plus mt-4"><span>+</span></button>
            </div>
          </td>
          <td class="pt-5">R$ 220,00</td>
        </tr>
      </tbody>
    </table>
    <div class="form-group text-center my-5">
      <button class="btn btn-irailda btn-dark" name="action" value="login">
        <a class="color-link-white" href="">Prosseguir</a>
      </button>
    </div>
  </div>

</main>

<!-- <main class="container ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="ps-product__preview" href="#">
                    <img class="mr-15" src="assets/img/garrafa02.png" alt=""> air jordan One mid</a></td>
                  <td>$150</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text" value="2">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>$300</td>
                  <td>
                    <div class="ps-remove"></div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__total">
                <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> -->

@endsection
