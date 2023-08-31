<?php

namespace App\Http\Controllers;
use App\Models\Produto;


class SiteController extends Controller
{
    public function index()
    {
      
        //return dd($produtos);
        //Passando dados para a view
       

        //return view('news', ['nome'=> $nome,'idade'=> $idade, 'html' => $html ]);
        $produtos = Produto::paginate(4);
        return view('site.home', compact('produtos'));
        
    }
    public function details($id) {
        $produto = Produto::findOrFail($id);
        return view('site.details', compact('produtos'));
    }
    
    
}
