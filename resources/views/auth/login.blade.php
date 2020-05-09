@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="container">
  <div class='row no-row my-5'>

    <div class="col-5 m-3">
      <h3 class="ml-5 ">Login</h3>
      <form method="POST" action="{{ route('login') }}" class="my-5">
        @csrf
        <div class="form-group">
          <label for="email">E-mail</label>
          {{-- <input type="email" name="email" id="email" class="form-control" required> --}}
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">senha</label>
          {{-- <input type="password" name="senha" id="senha" class="form-control" required> --}}
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          {{-- <button class="btn btn-maisProdutos" name="action" value="login">
            <a class="color-link-white" href="cadastropf.php">Entrar</a>
          </button> --}}

          <button type="submit" class="btn btn-maisProdutos color-link-white">
            Entrar
          </button>

          @if (Route::has('password.request'))
          <a class="btn btn-link color-link-wine" href="{{ route('password.request') }}">
            esqueci minha senha
          </a>
          @endif

        </div>

        {{-- <div class="form-group">
          <a class="color-link-wine" href="#">esqueci minha senha</a>
        </div> --}}
      </form>
    </div>


    <div class="col-5 m-3">
      <h3 class="ml-5">Criar Conta</h3>
      <form method="POST" action="{{ route('register') }}" class="my-5">
        @csrf
        <div class="form-group">
          <label for="name">Nome</label>
          {{-- <input type="nomeUser" name="email" id="nomeUser" class="form-control" required> --}}
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          {{-- <input type="emailUser" name="email" id="emailUser" class="form-control" required> --}}
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Senha</label>
          {{-- <input type="senhaUser" name="email" id="senhaUser" class="form-control" required> --}}
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password-confirm">Confirme a senha</label>
          {{-- <input type="confirmSenha" name="email" id="confirmSenha" class="form-control" required> --}}
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">

        </div>

        <div class="form-group">
          {{-- <button class="btn btn-maisProdutos" name="action" value="login"><a class="color-link-white"
              href="cadastropf.php">Prosseguir</a></button> --}}

          <button type="submit" class="btn btn-maisProdutos color-link-white">
            Prosseguir
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

@stop