<?php

namespace App\Http\Controllers;

use App\CategoriaModel;
use Illuminate\Http\Request;
use App\ImagensProdModel;
use App\RegioesModel;

class AdminController extends Controller
{
    //

    // Bloco dedicado exclusivamente para a view Admin
    public function admin()
    {
        $categorias = CategoriaModel::all();
        $regioes = RegioesModel::all();
        return view('admin.dashboard', compact('categorias', 'regioes'));
    }

    public function categoriaRemove($id)
    {
        $categoriaRemove = CategoriaModel::find($id);
        $categoriaRemove->delete();
        return redirect('/admin');
    }

    public function regiaoRemove($id)
    {
        $regiaoRemove = RegioesModel::find($id);
        $regiaoRemove->delete();
        return redirect('/admin');
    }

    public function insertCategoria(Request $request)
    {
        //
        $categoria = new CategoriaModel();
        $categoria->cat_categoria = $request->name_categoria;
        $categoria->save();
        return redirect('/admin');
    }

    public function insertRegiao(Request $request)
    {
        //
        $regiao = new RegioesModel();
        $regiao->reg_produtores = $request->name_regioes;
        $regiao->save();
        return redirect('/admin');
    }


    // Bloco para Produtores
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
