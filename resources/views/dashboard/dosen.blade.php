@extends('../templates.dashboard')

@section("content")

    {{-- navigation dosen --}}
    <div class="d-flex justify-content-start align-items-center mt-4 border border-0 border-bottom">
        <a href='/' class="text-decoration-none me-4 text-dark border-bottom border-5 pb-3 fw-bold border-dark">
            <i data-feather="check-circle" width="16" height="16"></i>
            <span>Task</span>
        </a>
        <a href='/' class="text-decoration-none me-4 text-secondary pb-3">
            <i data-feather="book" width="16" height="16"></i>
            <span>Bimbingan</span>
        </a>
        <a href='/' class="text-decoration-none text-secondary pb-3">
            <i data-feather="users" width="16" height="16"></i>
            <span>Mahasiswa</span>
        </a>
    </div>

    {{-- filter --}}
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div class="d-flex justify-content-start align-items-center">
            <select class="form-control me-2 border-3">
                <option>Menunggu</option>
                <option>Selesai</option>
            </select>
            <input type="date" class="form-control border-3" placeholder="Tanggal"/>
        </div>
        <div class="d-flex-justify-content-end align-items-center">
            <div class="input-group">
                <input type="text" class="form-control border-3" placeholder="Telusuri" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <i data-feather="search" width="16" height="16"></i>
                </button>
              </div>
        </div>
    </div>
    
    <!-- content -->
    <div class="mt-5">
        <a href="/" class="border border-1 d-block p-3 radius-2 text-decoration-none rounded-1 mb-3 box-project">
            <h5>konsultasi bab 1</h5>
            <div class="d-flex justify-content-start align-items-center">
                <span class="text-secondary">Rizki Maulana</span>
                <i class="ms-2 me-2" data-feather="circle" width="12" size="12"></i>
                <span class="text-secondary">2 jam yang lalu</span>

                <!-- dokumen -->
                <div class="d-flex justify-content-start align-items-center border rounded-5 p-1 ps-3 pe-3 ms-2">
                    <span class="text-decoration" style="font-size: 12px;">document.docs</span>
                </div>
                <!--  -->
            </div>
        </a>
    </div>

@endsection