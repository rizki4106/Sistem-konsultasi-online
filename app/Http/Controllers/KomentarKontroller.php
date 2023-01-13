<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarKontroller extends Controller
{
    /**
     * Menyimpan data komentar
     * @param {str} body -> isi komentar
     * @param {activity_id} int -> id dari aktivitas
     */
    public function store(Request $request){
        
        $data = $request->validate([
            "body" => "string|required",
            "activity_id" => "required|numeric"
        ]);

        $data['user_id'] = $request->session()->get("user_id");

        // memasukan data
        Komentar::create($data);

        return redirect('/activity/detail/' . $data['activity_id']);
    }
}
