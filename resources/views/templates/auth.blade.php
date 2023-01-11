{{-- template ini digunakan sebagai default styling layout untuk halaman authentikasi (login, register) --}}

@include('../_snippets.header')
<div class="container mb-5">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-md-4">
            @yield('content')
        </div>
    </div>
</div>
@include('../_snippets.footer')