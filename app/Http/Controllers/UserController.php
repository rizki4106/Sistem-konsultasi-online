<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * menampilkan halaman login sebagai halaman default saat mengakses controller ini
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("login");
    }

    /**
     * Menampilkan halaman pendaftaran akun
     */

    public function daftar(){
        return view("daftar");
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
     * menangani pendaftaran user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // melakukan validasi terhadap data yang dikirimkan
        $data = $request->validate([
            "nama" => "required|string|max:50",
            "email" => "required|email:rfc,dns|max:50|",
            "password" => "required|string|max:50",
            "nomor_identitas" => "required|string|max:20",
            "jabatan" => "required|string|max:20",
        ]);

        // hasing password
        $data['password'] = Hash::make($request->password);
        $data['foto'] = "default.png";

        // check apakah email sudah terdaftar atau belum
        $existsing_user = Pengguna::select("email")->where("email", $request->email)->exists();

        if($existsing_user){
            return redirect('/daftar')->with("failed", "email sudah terdaftar");
        }else{

            // memasukan data pengguna
            Pengguna::create($data);

            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
