<!-- Sidebar Admin-->
@if (Auth::user()->role == 'admin')
 <div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/user/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png"
                        alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->role }}
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="/dashboard" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-folder-open"></i>
                        <p>Data Umum</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/siswa">
                                    <span class="sub-item">Siswa</span>
                                </a>
                            </li>

                            <li>
                                <a href="/guru">
                                    <span class="sub-item">Guru</span>
                                </a>
                            </li>

                            <li>
                                <a href="/mapel">
                                    <span class="sub-item">Mapel</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kelas">
                                    <span class="sub-item"> Kelas </span>
                                </a>
                            </li>
                            <li>
                                <a href="/jadwal">
                                    <span class="sub-item"> Jadwal </span>
                                </a>
                            </li>
                            <li>
                                <a href="/user">
                                    <span class="sub-item"> User </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div> 
<!-- End Sidebar Admin -->


<!-- Sidebar Siswa-->
@elseif(Auth::user()->role == 'siswa')
     <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="../assets/img/user/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png"
                            alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ Auth::user()->siswa->nama }}
                                <span class="user-level">Siswa</span>
                            </span>
                        </a>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a href="/dashboard" class="collapsed">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">User</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#akademik">
                            <i class="fas fa-folder-open"></i>
                            <p>Akademik</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="akademik">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/siswa/presensi">
                                        <span class="sub-item">Scan Presensi</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/kehadiran">
                                        <span class="sub-item">Kehadiran</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> 
<!-- End Sidebar Siswa  -->

<!-- Sidebar Guru  -->
@elseif(Auth::user()->role == 'guru')
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/user/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png"
                        alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->guru->nama }}
                            <span class="user-level">Guru</span>
                        </span>
                    </a>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="dashboard.php" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#aka">
                        <i class="fas fa-folder-open"></i>
                        <p>Akademik</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="aka">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/generate/presensi">
                                    <span class="sub-item">Generate Presensi</span>
                                </a>
                            </li>

                            <li>
                                <a href="/nilai">
                                    <span class="sub-item">Input Nilai</span>
                                </a>
                            </li>

                            <li>
                                <a href="/absen-siswa">
                                    <span class="sub-item">Kehadiran Siswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar Guru -->
@endif