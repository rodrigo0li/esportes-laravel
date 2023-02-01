<?php

namespace App\Http\Controllers\Templates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Monta o template da categoria 'Exemplo'.
     *
     * @return \Illuminate\Http\Response
     */
    public function exemplo()
    {
        // carregar as informações de cada seção do banco
        // suponde que a categoria 'Exemplo' tenha id 1, fazer:
        // ex.: $banner = Banner::whereCategoria(1)->get();
        // ex.: $sobre = Sobre::whereCategoria(1)->get();
        $navbar = [];
        $banner = [];
        $sobre = [];
        $servicos = [];
        $contato = [];
        $produtoseprojetos = [];
        $colaboradoes = [];
        $depoimentos = [];
        $rodape = [];

        return view('templates.exemplo.index', ['navbar' => $navbar, 'banner' => $banner, 'sobre' => $sobre, 'servicos' => $servicos, 'contato' => $contato, 'produtoseprojetos' => $produtoseprojetos, 'colaboradores' => $colaboradoes, 'depoimentos' => $depoimentos, 'rodape' => $rodape]);
    }
}