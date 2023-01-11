@extends('../templates.dashboard')

@section("content")
    <div class="d-flex justify-content-between align-items-end mt-4">
        <div class="d-block">
            <h4 class="p-0 fw-bold">Projek</h4>
            <span class="text-secondary">Kumpulan pekerjaan kp atau skripsi</span>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahProjek">
            <i data-feather="plus" width="14" height="14"></i>
            Projek Baru
        </button>
    </div>

    <!-- content -->
    <div class="mt-5">
        <a href="/" class="border border-1 d-block p-3 radius-2 text-decoration-none rounded-1 mb-3 box-project">
            <h5>Penerapan algoritma neural network</h5>
            <div class="d-flex justify-content-start align-items-center">
                <span class="text-secondary">Dr. David., S.Kom., M.Kom</span>
                <i class="ms-2 me-2" data-feather="circle" width="12" size="12"></i>
                <span class="text-secondary">2 jam yang lalu</span>
            </div>
        </a>
        <a href="/" class="border border-1 d-block p-3 radius-2 text-decoration-none rounded-1 box-project mb-3">
            <h5>Penerapan algoritma neural network</h5>
            <div class="d-flex justify-content-start align-items-center">
                <span class="text-secondary">Dr. David., S.Kom., M.Kom</span>
                <i class="ms-2 me-2" data-feather="circle" width="12" size="12"></i>
                <span class="text-secondary">2 jam yang lalu</span>
            </div>
        </a>
    </div>

    <!-- modal untuk membuat projek baru -->
    <div class="modal fade" id="tambahProjek" tabindex="-1" aria-labelledby="tambahProjek" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">Projek Baru</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="modal-body form-custom">
                @csrf
                <label for="judul">Judul</label>
                <input type="text" class="form-control mb-3 mt-2 form-control-lg border-3" name="judul" id="judul" placeholder="Contoh penerapan algoritma x"/>

                <label for="objek">Objek Penelitian</label>
                <input type="text" class="form-control mb-3 mt-2 border-3" name="objek" id="objek" placeholder="Masukan objek penelitian"/>

                <label for="dosen">Dosen Pembimbing</label>
                <div class="position-relative mt-2 mb-3 hidden">
                    <input type="text" id='nama-dosen' class="form-control border-3" placeholder="Contoh Dr. DAVID, S.Kom.,M.Cs.,M.Kom"/>

                    {{-- auto complete --}}
                    <div class="form-autocomplete border border-3 remove" id="list-dosen">
                        <div class="list-value">
                            <img src="https://cdn.pixabay.com/photo/2022/12/24/21/14/portrait-7676482_960_720.jpg"/>
                            <span id='nama-dosen'>Dr. DAVID, S.Kom.,M.Cs.,M.Kom</span>
                        </div>
                        <div class="list-value">
                            <img src="https://cdn.pixabay.com/photo/2022/12/24/21/14/portrait-7676482_960_720.jpg"/>
                            <span id='nama-dosen'>Dr. DAVID, S.Kom.,M.Cs.,M.Kom</span>
                        </div>
                        <div class="list-value">
                            <img src="https://cdn.pixabay.com/photo/2022/12/24/21/14/portrait-7676482_960_720.jpg"/>
                            <span id='nama-dosen'>Dr. DAVID, S.Kom.,M.Cs.,M.Kom</span>
                        </div>
                    </div>
                </div>

                <label for="nomor">Nomor SK</label>
                <input type="text" class="form-control mb-3 mt-2 border-3" name="nomor" id="nomor" placeholder="Contoh 007.10/KP/STMIK-PTK/2022"/>

                <label for="mulai">Tanggal Mulai</label>
                <input type="date" class="form-control mb-3 mt-2 border-3" name="mulai" id="mulai" placeholder="Tanggal mulai pengerjaan"/>

                <label for="selesai">Tanggal Selesai</label>
                <input type="date" class="form-control mb-3 mt-2 border-3" name="selesai" id="selesai" placeholder="Tanggal selesai pengerjaan"/>

            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    
    <script type="text/javascript">
        if(typeof window !== "undefined"){
            const project = new Project()
            project.ShowListDosen()
        }
    </script>
@endsection