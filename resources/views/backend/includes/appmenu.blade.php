<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        @php
                    $logo_info = App\Http\Controllers\backend\DashboardController::avater();
                @endphp
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}" alt="" height="100">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ asset('backend') }}/assets/images/logo-light.png" alt=""
                    height="17"> --}}

                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                    alt="" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                {{-- Start Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link" data-key="t-horizontal">
                        <i class="mdi mdi-speedometer"></i> <span data-key="dashboard">Dashboard</span>
                    </a>
                </li>
                {{-- End Dashboard --}}

                {{-- Start School setup  --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSchoolSetup" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSchoolSetup">
                        <i class="mdi mdi-town-hall"></i> <span data-key="t-layouts">School Setup</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSchoolSetup">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('school-setup.index') }}" class="nav-link"
                                    data-key="t-horizontal">Setup</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- End Schoolsetup  --}}

                {{-- Start Banner setup  --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBanner" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBanner">
                        <i class="mdi mdi-folder-image"></i> <span data-key="t-layouts">Manage Banner</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBanner">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('banner.index') }}" class="nav-link"
                                    data-key="t-horizontal">Banners</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- End Banner  --}}

                {{-- Start Teacher Menu --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTeacher" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarTeacher">
                        <i class="mdi mdi-account-tie-hat"></i> <span data-key="t-layouts">Manage Teachers</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTeacher">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('teacher.index') }}" class="nav-link"
                                    data-key="t-horizontal">Teachers</a>
                                <a href="{{ route('teacher.create') }}" class="nav-link"
                                    data-key="t-horizontal">Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- End Teacher Menu  --}}

                {{-- Start Classes Menu --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarClasses" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarClasses">
                        <i class="mdi mdi-google-classroom"></i> <span data-key="t-layouts">Manage Classes</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarClasses">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('classes.index') }}" class="nav-link"
                                    data-key="t-horizontal">Teachers</a>
                                <a href="{{ route('classes.create') }}" class="nav-link"
                                    data-key="t-horizontal">Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- End Classes Menu  --}}

                {{-- Start Setting Menu --}}
                <li class="menu-title"><span data-key="t-menu">Others Setting</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('setting.index') }}">
                        <i class="mdi mdi-spin mdi-youtube-studio"></i>
                        <span data-key="t-layouts">Setting</span>
                    </a>
                </li>
                {{-- End Setting Menu  --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
