{{--
    template ini digunakan untuk styling default layout dari dashboard yang menampilkan data projek 
    baik untuk mahasiswa ataupun dosen 
--}}
@include('../_snippets.header')
@include('../_snippets.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

            @yield('content')

        </div>
    </div>
</div>
@include('../_snippets.footer')