<?php

namespace App\Http\Controllers;

use App\Models\ServicePages;
use App\Models\SiteFooter;
use App\Models\SitePatrocinio;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $slug = $request->route('slug');
        $service = ServicePages::getSlug($slug);
        $patrocinios = SitePatrocinio::all();
        $footer = SiteFooter::all();
    

        if ($service) {
            return view('servicePages.default', compact('service', 'patrocinios', 'footer', 'slug'));
        } else {
            echo "Página não encontrada";
        }

        // echo $slug;
        //return view('servicePages.default');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
