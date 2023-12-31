<!-- Logo Header -->
<div class="logo-header" data-background-color="">

    @if (Auth::user()->hak_akses == "Admin")
    <a href="{{ route('Admin.home')}}" class="logo">
        <img src="{{ asset('assets/dashboard/img/logo-nav.png')}}" alt="logo-nav" class="navbar-brand ml--5" width="200px" style="margin-left: -20px;">
    </a>
    @elseif (Auth::user()->hak_akses == "Kemahasiswaan")
    <a href="{{ route('Kemahasiswaan.home')}}" class="logo">
        <img src="{{ asset('assets/dashboard/img/logo-nav.png')}}" alt="logo-nav" class="navbar-brand ml--5" width="200px" style="margin-left: -20px;">
    </a>
    @elseif (Auth::user()->hak_akses == "Skretariat Musik")
    <a href="{{ route('SkretariatMusik.home')}}" class="logo">
        <img src="{{ asset('assets/dashboard/img/logo-nav.png')}}" alt="logo-nav" class="navbar-brand ml--5" width="200px" style="margin-left: -20px;">
    </a>
    @elseif (Auth::user()->hak_akses == "Mahasiswa")
    <a href="{{ route('Mahasiswa.home')}}" class="logo">
        <img src="{{ asset('assets/dashboard/img/logo-nav.png')}}" alt="logo-nav" class="navbar-brand ml--5" width="200px" style="margin-left: -20px;">
    </a>

    @endif

    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
        </span>
    </button>
    <button class="topbar-toggler more"><i class="fa fa-user"></i></button>
    <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
        </button>
    </div>
</div>
<!-- End Logo Header -->

<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="">

    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="{{ asset('assets/dashboard/img/logo.png')}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    <img src="{{ asset('assets/dashboard/img/logo.png')}}" alt="..." width="50px">
                                </div>
                                <div class="u-text">
                                    <p>{{Auth::user()->name}}</p>
                                    <h5 class="text-muted">{{Auth::user()->email}}</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            {{-- @if (Auth::user()->akses == 'Mahasiswa')
                            <a class="dropdown-item" href="{{ route('ProfileMahasiswa.index')}}">My Profile</a>
                            @elseif (Auth::user()->akses == 'Admin')
                            <a class="dropdown-item" href="{{ route('ProfileAdmin.index')}}">My Profile</a>
                            @else
                            <a class="dropdown-item" href="#">My Profile</a>
                            @endif --}}

                            {{-- <div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->
