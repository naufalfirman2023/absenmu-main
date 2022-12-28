
<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">

        <a href="dashboard.php" class="logo">
            <!-- <img src="../assets/img/uty-img.jpg" alt="navbar brand" class="navbar-brand" width="40"> -->
            <b class="text-white">UTYEAHH</b>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="../assets/img/user/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png"
                                alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img
                                            src="../assets/img/user/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png"
                                            alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        @if(Auth::user()->role == 'admin')
                                        <h4>Admin</h4>
                                        <h4>Administrator</h4>
                                        @elseif(Auth::user()->role == 'guru') 
                                        <h4>{{Auth::user()->role}}</h4>
                                        <h4>{{ Auth::user()->guru->nama }}</h4>
                                        @else
                                        <h4>{{Auth::user()->role}}</h4>
                                        <h4>{{ Auth::user()->siswa->nama }}</h4>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li><div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>