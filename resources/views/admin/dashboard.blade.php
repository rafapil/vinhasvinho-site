@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container ">


  <!-- Navbar -->

  <!-- End Navbar -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">produtores</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/cadProdutores">Gestão de produtores</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">produtos</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/cadProdutos">Gestão de produtos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">pedidos</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="#">Gestão de pedidos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                {{-- <i class="fa fa-twitter"></i> --}}
                <i class="material-icons">clientes</i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="#">Gestão de clientes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">

            <div class="card-body">
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons box-redux">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">

            <div class="card-body">
              <h4 class="card-title">Email Subscriptions</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons box-redux">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">

            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons box-redux">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Gestão de categorias</h4>
              <form id="wf-form-squad" method="post" action="/categoria/insert">
                @csrf
                <label for="name_categoria" class="mt-1 ml-3">Cadastro de categoria</label>
                <input type="text" class="w-input" maxlength="256" name="name_categoria" data-name="Name 2"
                  placeholder="" id="name_empresa" required>
                <input type="submit" value="Incluir" data-wait="Por favor aguarde..." class="w-button mt-2 my-2">
              </form>
            </div>
            <div class="card-body table-responsive">
              @if(@isset($categorias) && count($categorias) > 0)
              <table class="table table-hover">
                <thead class="text-warning">
                  <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categorias as $categoria)
                  <tr>
                    <td>{{$categoria->cat_id}}</td>
                    <td>{{$categoria->cat_categoria}}</td>
                    <td><a href="/categoria/remove/{{$categoria->cat_id}}" class="btn btn-danger">excluir</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <h5 class="alert alert-info">Sem dados cadastrados</h5>
              @endif
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Gestão de regiões</h4>
              <form id="wf-form-squad" method="post" action="/regiao/insert">
                @csrf
                <label for="name_regioes" class="mt-1 ml-3">Cadastro de regiões</label>
                <input type="text" class="w-input" maxlength="256" name="name_regioes" data-name="Name 2" placeholder=""
                  id="name_empresa" required>
                <input type="submit" value="Incluir" data-wait="Por favor aguarde..." class="w-button mt-2 my-2">
              </form>
            </div>
            <div class="card-body table-responsive">
              @if(@isset($regioes) && count($regioes) > 0)
              <table class="table table-hover">
                <thead class="text-warning">
                  <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($regioes as $regiao)
                  <tr>
                    <td>{{$regiao->reg_id}}</td>
                    <td>{{$regiao->reg_produtores}}</td>
                    <td><a href="/regiao/remove/{{$regiao->reg_id}}}" class="btn btn-danger">excluir</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <h5 class="alert alert-info">Sem dados cadastrados</h5>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>


@endsection