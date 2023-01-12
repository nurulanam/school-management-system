<div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-left-content">
                    <p>Get the latest updates and Sanu's response to COVID-19</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header-right-content">
                    <div class="list">
                        <ul>
                            {{-- @guest

                            @endguest --}}
                            @if(auth()->guest())
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
