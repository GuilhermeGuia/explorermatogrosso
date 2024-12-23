<?php

namespace App\Http\Controllers;

use App\Models\SiteBlog;
use App\Models\SiteCarrosel;
use App\Models\SiteCategoria;
use App\Models\SiteCidade;
use App\Models\SiteFooter;
use App\Models\SiteGaleria;
use App\Models\SiteInscricao;
use App\Models\SitePatrocinio;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $carrosel = SiteCarrosel::first();
        $categorias = SiteCategoria::all();
        $cidades = SiteCidade::all();
        $inscricao= SiteInscricao::all();
       $blog = SiteBlog::all();
       $patrocinios = SitePatrocinio::all();
       $footer = SiteFooter::all();
       $galeria= SiteGaleria::all();
        return view('welcome', compact('carrosel', 'categorias', 'cidades', 'inscricao', 'blog', 'patrocinios', 'footer', 'galeria'));
    }
}
