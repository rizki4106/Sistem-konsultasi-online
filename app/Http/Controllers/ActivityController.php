<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use App\Models\Komentar;
use App\Models\Activity;

class ActivityController extends Controller
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
     * Menampilkan detail dari aktifitas konsultasi
     */
    public function detail($id){

        $data = Activity::find($id);
        $komentar = Komentar::where("activity_id", $id)->orderbyDesc("id")->get();

        return view("dashboard.activity.detail", [
            "data" => $data,
            "komentar" => $komentar,
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
     * Membuat aktifitas konsultasi baru
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile("dokumen")){
            // upload file dokumen
            $file = $request->validate([
                "dokumen" => "required"
            ]);
    
            $docs = $request->file("dokumen");
    
            // simpan informasi file kedalam database
            $original_filename = $docs->getClientOriginalName();
    
            // nama unik suapaya file yang namanya sama tidak ketimpa
            $parsed_name = Str::uuid() . '.' . $docs->extension();

            $pdf_name = Str::uuid(). '.pdf';
    
            // simpan original nama file ke dalam local disk
            $docs->storeAs("docs", $parsed_name);

            // convert file docs menjadi pdf

            docs_to_pdf("/docs/".$parsed_name, "/docs/".$pdf_name);
            
            // simpan data aktivitas
            $activity = $request->validate([
                "judul" => "required|string|max:100",
                "deskripsi" => "required|string",
                "projek_id" => "required|numeric",
                "dosen_id" => "required|numeric",
            ]);

            $insert_activity = Activity::create($activity);
            
            // simpan data file kdalam database
            File::create([
                "docs_original_name" =>  $original_filename,
                "docs_parsed_name" => $parsed_name,
                "pdf_name" => $pdf_name,
                "activity_id" => $insert_activity->id,
            ]);
        }

        return redirect($request->origin);
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
