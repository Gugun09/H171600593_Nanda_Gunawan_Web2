<?php

namespace App\Http\Controllers;

use App\Kategori_Galeri;
use Illuminate\Http\Request;

class Kategori_GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_galeri = kategori_galeri::all();
        
        return view('kategori_galeri.index', compact('kategori_galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori_Galeri  $kategori_Galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Galeri $kategori_Galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori_Galeri  $kategori_Galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Galeri $kategori_Galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori_Galeri  $kategori_Galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_Galeri $kategori_Galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori_Galeri  $kategori_Galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_Galeri $kategori_Galeri)
    {
        //
    }
}
