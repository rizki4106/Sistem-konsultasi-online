{{-- 
    View ini digunakan untuk menampilkan detail dari suatu projek (kp atau skripsi)    
    dan juga menampilkan list dari aktifitas konsultasi
--}}
@extends('../templates.dashboard')
@section('content')
    <div class="mt-5 border border-0 border-bottom pb-3">
        <h4 class="fw-bold">{{ $projek->judul }}</h4>
        <div class="d-flex justify-content-start align-items-center">

            @if(session("user_jabatan") == "mahasiswa")
                <span class="text-secondary">Dosen Pembimbing {{ $projek->dosen->nama }}</span>
            @else
                <span class="text-secondary">Mahasiswa {{ $projek->user->nama }}</span>
            @endif
            <i class="ms-2 me-2" data-feather="circle" width="12" size="12"></i>
            <span class="text-secondary">2 februari 2023 sampai 3 februari 2024</span>
        </div>
    </div>

    <!-- action button -->
    <div class="d-flex justify-content-between align-items-end mt-4">
        <div class="d-block">
            <h5 class="p-0">Aktifitas</h5>
            <span class="text-secondary">Kumpulan aktifitas konsultasi</span>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAktifitas">
            <i data-feather="plus" width="14" height="14"></i>
            Aktifitas Baru
        </button>
    </div>

    <!-- list activity -->
    <div class="mt-5">
        @foreach ($activity as $item)
        
            <a href="/activity/detail/{{$item->id}}" class="border border-1 d-block p-3 radius-2 text-decoration-none rounded-1 mb-3 box-project">
                <h5>{{$item->judul}}</h5>
                <div class="d-flex justify-content-start align-items-center">
                    <span class="text-secondary">{{$item->projek->user->nama}}</span>
                    <i class="ms-2 me-2" data-feather="circle" width="12" size="12"></i>
                    <span class="text-secondary">{{$item->created_at}}</span>

                    <!-- dokumen -->
                    <div class="d-flex justify-content-start align-items-center border rounded-5 p-1 ps-3 pe-3 ms-2">
                        <span class="text-decoration" style="font-size: 12px;">{{$item->file[0]->docs_original_name}}</span>
                    </div>
                    <!--  -->
                </div>
            </a>
        @endforeach
    </div>

    {{-- modal untuk menambahkan aktifitas baru --}}
    <div class="modal fade" id="tambahAktifitas" tabindex="-1" aria-labelledby="tambahAktifitas" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="/api/activity/create" enctype="multipart/form-data" method="POST">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">Projek Baru</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body form-custom">
                @csrf

                <input type="hidden" name="projek_id" value="{{$projek_id}}"/>
                <input type="hidden" name="origin" value="/projek/read/{{$projek->slug}}"/>
                <label for="subjek">Subjek</label>
                <input type="text" class="form-control mb-3 mt-2 form-control-lg border-3" name="judul" id="subjek" placeholder="Contoh konsultasi bab 1"/>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload dokumen (docs, docx)</label>
                    <input name="dokumen" class="form-control border-3" type="file" id="formFile">
                </div>

                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control border-3 mt-2 mb-3" placeholder="Masukan deskripsi tentang konsultasi kamu hari ini" id="deskripsi" rows="3"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
    </div>
@endsection