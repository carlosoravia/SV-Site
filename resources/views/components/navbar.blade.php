{{-- laptop / tablet version --}}
<div class="d-none d-md-block m-3 sticky-top" onscroll="spread()" id="nav">
    <nav class="navbar navbar-expand-lg bg-dark rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                    <li class="nav-item m-3">
                        <a class="nav-link text-light active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link text-light" href="{{route('aboutUs')}}">Chi sono</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link text-light" href="{{route('contactUs')}}">Contattami</a>
                    </li>
                    <li class="nav-item m-3 dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servizi</a>
                        <ul class="dropdown-menu bg-secondary">
                            <li><a class="dropdown-item text-light" href="#">Per le aziende</a></li>
                            <li><a class="dropdown-item text-light" href="#">Per i comuni</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item m-3">
                        <button class="btn btn-outline-light my-auto" id="darkMode">
                            <i class="bi bi-cloud-moon-fill"></i>
                            <i class="bi bi-airplane-fill"></i>
                        </button>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
{{-- mobile version  --}}
<div class="d-md-none m-1 sticky-top">
    <nav class="navbar navbar-expand-lg bg-dark rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                    <li class="nav-item m-3">
                        <a class="nav-link text-light active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link text-light" href="{{route('aboutUs')}}">Chi sono</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link text-light" href="{{route('contactUs')}}">Contattami</a>
                    </li>
                    <li class="nav-item m-3 dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servizi</a>
                        <ul class="dropdown-menu bg-secondary">
                            <li><a class="dropdown-item text-light" href="#">Per le aziende</a></li>
                            <li><a class="dropdown-item text-light" href="#">Per i comuni</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
