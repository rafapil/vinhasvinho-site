@extends('layouts.app')

@section('title', 'Cadastro de Produtos')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="cadastropf.php">Pessoa Física</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-irailda btn-dark" href="cadastropj.php">Pessoa Jurídica</a>
                    </li>
                </ul>

                <div class="tab-content m-5" style="padding: 20px; 16px;">
                    <form action="" method="post">
                        <p><strong>*Campos obrigatórios</strong></p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div style="padding:5px 0;">
                                    <input type="text" class="form-control" placeholder="*Nome" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div style="padding:5px 0;">
                                    <input type="text" class="form-control" placeholder="*Razão Social" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div style="padding:5px 0;">
                                    <input type="text" class="form-control" placeholder="*CNPJ" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*CEP" maxlength="8">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*Endereço">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*Número">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*Bairro">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*Cidade">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <select class="custom-select">
                                        <option selected>Estado</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-lg-2 col-md-2 col-sm-2">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="DDD">
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <p><br>Telefone</p>
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="(DDD) 0000-0000">
                                </div>
                            </div>
                            <!-- <div class="col-lg-2 col-md-2 col-sm-2">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*DDD">
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <p><br>Celular</p>
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="(DDD) 0000-0000">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="text" class="form-control" placeholder="*Confirmar E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="password" class="form-control" placeholder="*Senha" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div style="padding-top:5px;padding-bottom:5px;">
                                    <input type="password" class="form-control" placeholder="*Confirmar Senha" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 38px;">
                            <label class="form-check-label" for="novidades">
                                <input type="checkbox" name="novidades" id="novidades" class="form-check-input"><span
                                    class="myp">Quero acompanhar o andamento dos pedidos via sms</span>
                            </label>
                        </div>
                    </form>
                    <div class="form-group my-5">
                        <button class="btn btn-irailda btn-dark" name="action" value="login">
                            <a class="color-link-white" href="">Prosseguir</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
