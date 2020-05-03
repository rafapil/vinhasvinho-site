<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImagensProdModel;

class AdminController extends Controller
{
    //

    public function admin()
    {
        return view('dashboard');
    }



    public function cadProdutores()
    {
        $produtores = ImagensProdModel::all();

        return view('admin.cadProdutores', compact('produtores'));
    }

    public function insert(Request $request)
    {

        $produtores = new ImagensProdModel();

        $produtores->imgprod_nome = $request->nome;
        $produtores->imgprod_seguimento = $request->segmento;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploadsProdutores';
            $arquivo->storePublicly($nomePasta); // nome temporario do arquivo
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); // faz a hash para nome do arquivo
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produtores->imgprod_urlimg = $caminhoRelativo;
        }

        $produtores->save();

        return redirect('/cadProdutores');
    }

    public function remove($id)
    {
        $removeProdutores = ImagensProdModel::find($id);
        $removeProdutores->delete();
        return redirect('/cadProdutores');
    }

    // bloco responsavel pelo cadastro e adm dos produtos 

    public function cadProdutos()
    {

        return view('admin.cadProdutos');
    }
}
