@include('../../_snippets.header')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">

            {{-- header --}}
            <div class="d-flex justify-content-start align-items-center mb-5">
                <i data-feather="arrow-left" width="14" height="14"></i>
                <span class="ms-2">kembali</span>
            </div>

            {{-- general info --}}
            <div class="d-flex justify-content-start align-items-center">
                <span class="text-secondary">Kerja Praktek</span>
                <i data-feather="circle" class="ms-2 me-2" width="12" height="12"></i>
                <span class="text-secondary">Rizki Maulana</span>
            </div>
            <h5>Penerapan algoritma neural network untuk self driving car</h5>
            <hr/>
            {{-- info aktivitas --}}
            <div class="accordion" id="accordionExample">

                {{-- informasi tentang pesan konsultasi --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-button border-0 d-flex justify-content-start align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="text-secondary">Pesan tanggal 7 Januari 2022, 12:30 WIB</span>
                        </div>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <h6 class="fw-bold">Konsultasi Bab 1</h6>
                        <p>Pada bab 1 ini saya menjabarkan mengenai
                            latar belakang dan alasan saya memilih
                            topik penelitian ini</p>
                      </div>
                    </div>
                </div>

                {{-- pemberian feedback --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pendapat
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <textarea class="form-control" placeholder="berikan masukan dan pendapat anda mengenai laporan ini" rows="4"></textarea>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary btn-sm mt-3">kirim</button>
                        </div>

                        <hr/>

                        {{-- list feedback --}}
                        <div class="border border-1 p-3 rounded">
                            {{-- header feedback --}}
                            <div class="d-flex justify-content-start align-items-start">
                                <img src="https://cdn.pixabay.com/photo/2022/11/14/10/37/chinese-lanterns-7591296_960_720.jpg" width="32" height="32" class="rounded"/>
                                <div class="ms-3">
                                    <span class="d-blok fw-semibold">Rizki Maulana</span>
                                    <br/>
                                    <span class="d-blok text-secondary">2 jam yang lalu</span>
                                </div>
                            </div>
                            {{-- body feeedback --}}
                            <div class="d-block mt-3 mb-2">
                                <p>Bab 1 sudah di acc</p>
                            </div>
                        </div>
                        {{--  --}}
                      </div>
                    </div>
                </div>

                {{-- list feedback --}}
            </div>
            {{--  --}}
        </div>
        <div class="col-md-8">
            <div class="p-3 container-canvas">

            </div>
        </div>
    </div>
</div>

<script>
    const activity = new Activity()
    activity.LoadPdf("{{ asset('assets/pdf/example-2.pdf') }}", ".container-canvas")
</script>
@include('../../_snippets.footer')