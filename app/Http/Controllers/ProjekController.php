<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjekController extends Controller
{
    /**
     * Menampilkan halaman index list project mahasiswa
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.mahasiswa");
    }

    /**
     * Menampilkan halaman index list projek yang harus di koreksi dosen
     */

    public function dosen(){
        return view("dashboard.dosen");
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
     * menampilkan halaman detail projek
     *
     * @param  string $slug -> slug dari title project
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view("dashboard.projek");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
