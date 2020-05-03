<?php
require_once("conexao.php");

function produtoresLogo()
{
    global $conn;
    $consulta = $conn->query('SELECT url FROM imgprodutores');
    $produtores = $consulta->fetchAll();

    foreach ($produtores as $produtor) {
        echo "
            <div class='col-4 col-sm-4 col-md-3 p-4 shadow'>
                <img src='" . $produtor['url'] . "' class='img-produtores-p'>
            </div>
            ";
    }
}

function getCep()
{
    // Variaveis que recebem os dados e validam o mesmo 
    $cep = "04938070";
    $cep = str_replace("-", "", $cep);
    $cep = str_replace(" ", "", $cep);

    // Incluir as definicoes sobre
    $token = 'e38b05e9ec1ff7cd1a16d00be668baa2';
    $url = 'http://www.cepaberto.com/api/v3/cep?cep=' . $cep;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Token token="' . $token . '"'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);

    //var_dump($output);

    // echo $output;
    return $arrCidade = json_decode($output);


    // if($arrCidade != null){
    //     echo "CEP: $arrCidade->cep <br>";
    //     echo "Rua: $arrCidade->logradouro | Complemento: $arrCidade->complemento<br>";
    //     echo "Bairro: $arrCidade->bairro <br>";
    //     echo "Cidade: ".$arrCidade->cidade->nome ." Estado: ".$arrCidade->estado->sigla ."<br>";
    // } else {
    //     echo "Não existem informaçoes disponiveis sobre o CEP, verifique se o mesmo está correto!";
    // }

}
