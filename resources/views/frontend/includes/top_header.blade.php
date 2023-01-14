<div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-left-content">
                    <div class="d-flex align-items-center">
                        <button class="default-btn btn btn-sm">Updates</button>
                        <marquee class="text-light">
                            <ul class="d-flex align-items-center m-0">
                                <li class="mx-3" style="color: #7743DB;"><a href="" class="text-light">This is news no 1</a></li>
                                <li class="mx-3" style="color: #7743DB;"><a href="" class="text-light">This is news no 2</a></li>
                                <li class="mx-3" style="color: #7743DB;"><a href="" class="text-light">This is news no 3</a></li>
                            </ul>
                        </marquee>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header-right-content">
                    <div class="list">
                        <ul>
                            {{-- @guest

                            @endguest --}}
                            @if (auth()->guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                            @hasrole('admin|teacher')
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @endhasrole
                            @hasrole('student')
                                <li><a href="{{ url('/student') }}">Student Dashboard</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn default-btn">Logout</button>
                                    </form>
                                </li>
                            @endhasrole
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
