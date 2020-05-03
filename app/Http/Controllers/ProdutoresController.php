<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoresController extends Controller
{
    //
    public function produtores(){
        $produtores =   Imagensprod::where('imgprod_seguimento','=','pdt')->get();
        return view ('',compact('produtores'));
    }

    public function cadprodutores(){
        // Colocar funcao aqui

    }
}
