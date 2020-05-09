@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="container">
    <div class='row no-row my-5'>

      <div class="col-5 m-3">
        <h3 class="ml-5 ">Login</h3>
        <form method="POST" class="my-5">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
          </div>
          <div class="form-group">
            <button class="btn btn-maisProdutos" name="action" value="login">
            <a class="color-link-white" href="cadastropf.php">Entrar</a>
            </button>
          </div>
          <div class="form-group">
            <a class="color-link-wine" href="#">esqueci minha senha</a>
          </div>
        </form>
      </div>
      <div class="col-5 m-3">
      <h3 class="ml-5">Criar Conta</h3>
        <form method="POST" class="my-5">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group">
            <button class="btn btn-maisProdutos" name="action" value="login"><a class="color-link-white" href="cadastropf.php">Prosseguir</a></button>
          </div>
        </form>
      </div>
    </div>
  </section>

@stop
