@php
    $logo_info = App\Http\Controllers\frontend\FrontendController::avater();
@endphp
<div class="navbar-area nav-bg-1">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu align-items-center">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}" class="main-logo" lt="logo" style="max-height: 100px;">
                        <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}" class="white-logo"
                            alt="logo" style="max-height: 100px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                        class="main-logo img-fluid" alt="logo" style="max-height: 100px;">
                    <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}" class="white-logo" alt="logo" style="max-height: 100px;">
                </a>
                <div class="collapse navbar-collapse mean-menu align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-linkactive">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Academics
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Science</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Arts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Commerce</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/faq') }}" class="nav-linkactive">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact-us') }}" class="nav-linkactive">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admission') }}" class="nav-linkactive">
                                <button class="default-btn btn">Get Addmission</button>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="graduate-admission.html" class="nav-link">Graduate Admission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="campus-life.html" class="nav-link">Campus Life</a>
                                </li>
                                <li class="nav-item">
                                    <a href="alumni.html" class="nav-link">Alumni</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="academics.html" class="nav-link">Academics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="academics-details.html" class="nav-link">Academics
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Latest News
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="latest-news.html" class="nav-link">Our Latest News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="news-details.html" class="nav-link">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Users
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="recover-password.html" class="nav-link">Recover Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms And Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">404 Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="courses.html" class="nav-link">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses-details.html" class="nav-link">Courses Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Health Care
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="health-care.html" class="nav-link">Health Care</a>
                                </li>
                                <li class="nav-item">
                                    <a href="health-care-details.html" class="nav-link">Health Care Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Events
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="events.html" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="events-details.html" class="nav-link">Events Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                        </li> --}}
                    </ul>
                    {{-- <div class="others-options">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div> --}}
                </div>
            </nav>
        </div>
    </div>
    {{-- <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="icon">
                        <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
