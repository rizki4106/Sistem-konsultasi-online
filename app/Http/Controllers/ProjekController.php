<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;
use App\Models\Activity;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class ProjekController extends Controller
{
    /**
     * Menampilkan halaman index list project mahasiswa
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

        // mendapatkan jabatan user
        $role = $req->session()->get("user_jabatan");

        // 
        $data = array([]);

        if($role == "mahasiswa") {

            // mendapatkan data kripsi atau kp mahasiswa
            $data = Projek::where("user_id", $req->session()
            ->get("user_id"))
            ->orderbyDesc("id")->get();

        }else{

            // menampilkan pekerjaan yang harus dikoreksi oleh dosen dari mahasiswa
            $data = Activity::where("dosen_id", $req->session()->get("user_id"))->orderbyDesc("id")->get();
        }

        return view("dashboard.index", [
            "data" => $data,
        ]);
    }

    /**
     * Menampilkan halaman index list projek yang harus di koreksi dosen
     */

    public function dosen(){
        return view("dashboard.dosen");
    }

    /**
     * menampilkan semua projek bimbingan dosen
     */

    public function bimbingan(Request $req){

        $data = Projek::where("dosen_id", $req->session()->get("user_id"))->orderbyDesc("id")->get();

        return view("dashboard.dosen.bimbingan", [
            "data" => $data,
        ]);
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
        $data = $request->validate([
            "user_id" => "required|numeric",
            "dosen_id" => "required|numeric",
            "judul" => "required|string|max:50",
            "objek" => "required|string|max:50",
            "nomor_sk" => "required|string|max:50",
            "dimulai_pada" => "required|string",
            "selesai_pada" => "required|string"
        ]);

        // menambahkan slug
        $data['slug'] = Str::slug($data['judul'], '-') .'-'. Str::uuid();

        Projek::create($data);

        return redirect('/');
    }

    /**
     * menampilkan halaman detail projek
     *
     * @param  string $slug -> slug dari title project
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $projek = Projek::where("slug", $slug)->first();
        $activity = Activity::where("projek_id", $id)->orderbyDesc("id")->get();

        return view("dashboard.projek", [
            "projek" => $projek,
            "activity" => $activity,
            "projek_id" => $id,
        ]);
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
