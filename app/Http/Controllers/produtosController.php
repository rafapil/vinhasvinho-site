<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\categoriaModel;
use\App\pagProdutoModel;
use\App\produtosModel;
use\App\regioesModel;

class produtosController extends Controller
{
    public function mostrarProdutos()
    {
        $produtos=produtosModel::paginate(9);
        $categorias=categoriaModel::all();
        $regioes=regioesModel::all();

        return view('produtos', compact('produtos','categorias', 'regioes'));
    }

    public function filtroCategoria($cat_id)
    {
        $produtos=produtosModel::where('categoria_cat_id', '=', $cat_id)->paginate(9);
        $categorias=categoriaModel::all();
        $regioes=regioesModel::all();

        return view ('produtos', compact('produtos', 'categorias', 'regioes'));
    }

    public function filtroRegiao($reg_id)
    {
        $produtos=produtosModel::where('regioes_reg_id', '=', $reg_id)->paginate(9);
        $categorias=categoriaModel::all();
        $regioes=regioesModel::all();

        return view ('produtos', compact('produtos', 'categorias', 'regioes'));
    }

    public function mostrarProduto($prod_id)
    {
        $produto=pagProdutoModel::find($prod_id);

        return view ('produto', compact('produto'));
    }

    
}
