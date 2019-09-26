<?php

namespace App\Http\Controllers;

use App\Kategori_Pengumuman;
use Illuminate\Http\Request;

class Kategori_PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_pengumuman = kategori_pengumuman::all();
        
        return view('kategori_pengumuman.index', compact('kategori_pengumuman'));
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
     * @param  \App\Kategori_Pengumuman  $kategori_Pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Pengumuman $kategori_Pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori_Pengumuman  $kategori_Pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Pengumuman $kategori_Pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori_Pengumuman  $kategori_Pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_Pengumuman $kategori_Pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori_Pengumuman  $kategori_Pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_Pengumuman $kategori_Pengumuman)
    {
        //
    }
}
