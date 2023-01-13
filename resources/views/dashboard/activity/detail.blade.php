@include('../../_snippets.header')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">

            {{-- header --}}
            <div class="d-flex justify-content-start align-items-center mb-5">
                <i data-feather="arrow-left" width="14" height="14"></i>
                <span class="ms-2" onclick="goBack()" style="cursor: pointer;">kembali</span>
            </div>

            {{-- general info --}}
            <div class="d-flex justify-content-start align-items-center">
                <span class="text-secondary">Kerja Praktek</span>
                <i data-feather="circle" class="ms-2 me-2" width="12" height="12"></i>
                <span class="text-secondary">{{$data->projek->user->nama}}</span>
            </div>
            <h5>{{$data->projek->judul}}</h5>
            <hr/>
            {{-- info aktivitas --}}
            <div class="accordion" id="accordionExample">

                {{-- informasi tentang pesan konsultasi --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-button border-0 d-flex justify-content-start align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="text-secondary">Pesan tanggal {{$data->created_at}}</span>
                        </div>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <h6 class="fw-bold">{{$data->judul}}</h6>
                        <p>{{$data->deskripsi}}</p>
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
                        <form action="/komentar/add" method="POST">
                            @csrf
                            <input type="hidden" name="activity_id" value="{{ $data->id }}"/>
                            <textarea 
                                class="form-control" 
                                placeholder="berikan masukan dan pendapat anda mengenai laporan ini" 
                                rows="4"
                                name="body"
                            ></textarea>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm mt-3">kirim</button>
                            </div>
                        </form>

                        <hr/>

                        {{-- list feedback --}}
                        @foreach($komentar as $k)
                        <div class="border border-1 p-3 rounded">
                            {{-- header feedback --}}
                            <div class="d-flex justify-content-start align-items-start">
                                <img src="https://cdn.pixabay.com/photo/2022/11/14/10/37/chinese-lanterns-7591296_960_720.jpg" width="32" height="32" class="rounded"/>
                                <div class="ms-3">
                                    <span class="d-blok fw-semibold">{{$k->user->nama}}</span>
                                    <br/>
                                    <span class="d-blok text-secondary">{{$k->created_at}}</span>
                                </div>
                            </div>
                            {{-- body feeedback --}}
                            <div class="d-block mt-3 mb-2">
                                <p>{{ $k->body }}</p>
                            </div>
                        </div>
                        @endforeach
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

<span id="src-pdf" pdf-src="{{$data->file[0]->pdf_name}}"/>

<script>

    /**
     * Menangani tombol kembali pada saat diklik
     **/

    function goBack(){
        window.history.back()
    }

    const activity = new Activity()

    // menambil nama file pdf yang akan ditampilkan
    const pdf_src = document.querySelector("#src-pdf").getAttribute("pdf-src")

    // menampilkan halaman pdf
    activity.LoadPdf(`{{ asset('docs/${pdf_src}') }}`, ".container-canvas")
</script>
@include('../../_snippets.footer')