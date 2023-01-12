<nav class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 d-flex justify-content-between align-items-center border-bottom pt-3 pb-3">

            <!-- user info -->
            <div class="d-flex justify-content-start">
                @if(session("user_nama"))
                    <span class="fw-bold">Hi, {{session("user_nama")}}</span>
                @endif
                <a href='/' class="text-secondary text-decoration-none">
                    <div class="position-relative ms-3">
                        <i data-feather="bell" width="18" height="18"></i>
                    </div>
                </a>
            </div>

            <!-- user action -->
            <div class="d-flex justify-content-end align-items-center">
                <a href="/user/logout" class="text-secondary text-decoration-none">
                    <i data-feather="log-out" width="16" height="16"></i>
                </a>
            </div>
        </div>
    </div>
</nav>