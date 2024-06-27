<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Augusto";
        $idade = 20;

        $arr = [10, 20, 30, 40, 50];
        $nomes = ["Augusto", "Maria", "Joao", "Saulo"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Programador",
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function product_teste($id = null)
    {
        return view('product', ['id' => $id]);
    }
}
