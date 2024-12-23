<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\ServicePages;
use App\Models\SiteFooter;
use App\Models\SitePatrocinio;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function index(Request $request) 
    {   
        $slug = $request->route('slug');
        $busca=Categoria::where('slug', $slug)->first();
        $service = ServicePages::getSlug($slug);
        $patrocinios = SitePatrocinio::all();
        $footer = SiteFooter::all();
        $categorias = Categoria::whereNot('slug', $slug)->withCount('servicePages')->get(['nome', 'slug']);   
  
       
        $result=Categoria::getSlug($slug)->paginate(4);

      

        return view('categoria',compact('service', 'patrocinios', 'footer', 'slug', 'result', 'categorias', 'busca'));
    }
}
