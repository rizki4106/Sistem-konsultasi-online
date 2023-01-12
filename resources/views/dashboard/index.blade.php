@if(Session::get("user_jabatan") == "mahasiswa")

    @include('./dashboard.mahasiswa.index')
    @section("title")
        Dashboard {{Session::get("user_nama")}}
    @endsection

@else

    @include("./dashboard.dosen.index")

@endif