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
                            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @endguest
                            @auth
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
