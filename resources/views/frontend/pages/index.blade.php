@extends('frontend.master')
@section('content')
<div class="banner-area">
    <div class="hero-slider2 style2 owl-carousel owl-theme">
        @foreach ($banners as $banner)
            <div class="slider-item"
                style="background-image:url({{ asset('backend/assets/images/school/banner/' . $banner->banner_image) }})">
                <div class="container-fluid">
                    <div class="slider-content style2">
                        <h1>{{ $banner->banner_title }}</h1>
                        {!! $banner->banner_details !!}
                        <a href="courses.html" class="default-btn btn">{{ $banner->banner_button_text }} <i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="slider-item banner-bg-7">
            <div class="container-fluid">
                <div class="slider-content style2">
                    <h1>Your Future Start With Sanu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                    <a href="courses.html" class="default-btn btn">Start a Journey <i
                            class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
        <div class="slider-item banner-bg-8">
            <div class="container-fluid">
                <div class="slider-content style2">
                    <h1>Welcome to Sanu University</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                    <a href="courses.html" class="default-btn btn">Start a Journey <i
                            class="flaticon-next"></i></a>
                </div>
            </div>
        </div> --}}
    </div>
</div>


<div class="eduction-area pb-70">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-education-card bg-1">
                    <div class="edication-content">
                        <div class="icon">
                            <i class="flaticon-college"></i>
                        </div>
                        <a href="academics-details.html">
                            <h3>Lifelong learning</h3>
                        </a>
                        <a href="academics-details.html" class="read-more-btn white-color">Graduate Education<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-education-card bg-2">
                    <div class="edication-content">
                        <div class="icon">
                            <i class="flaticon-student-with-graduation-cap"></i>
                        </div>
                        <a href="academics-details.html">
                            <h3>Graduate Education</h3>
                        </a>
                        <a href="academics-details.html" class="read-more-btn white-color">Graduate Education<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-education-card bg-3">
                    <div class="edication-content">
                        <div class="icon">
                            <i class="flaticon-college-graduation"></i>
                        </div>
                        <a href="academics-details.html">
                            <h3>Undergraduate Education</h3>
                        </a>
                        <a href="academics-details.html" class="read-more-btn white-color">Graduate Education<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800"
                data-aos-once="true">
                <div class="single-education-card bg-4">
                    <div class="edication-content">
                        <div class="icon">
                            <i class="flaticon-athletics"></i>
                        </div>
                        <a href="academics-details.html">
                            <h3>University Athletics Life</h3>
                        </a>
                        <a href="academics-details.html" class="read-more-btn white-color">Graduate Education<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="campus-information-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="campus-image">
                    <img src="{{ asset('frontend') }}/assets/images/campus-information/campus-2.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="campus-content style-2">
                    <div class="campus-title">
                        <h2>Campus Information</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt
                            ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation
                            ulla mco laboris nisi ut </p> --}}
                            {!! $school_info->school_description !!}

                    </div>
                    {{-- <div class="list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Graduate Programs</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Doctoral Degrees</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Alumni & Giving</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Undergraduate</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>International Hubs</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Global Students</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="counter">
                        <div class="row">
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="65">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="30">00</span>
                                        <span class="target heading-color">k</span><span class="target">+</span>
                                    </h1>
                                    <p>Global Students</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="52">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Student Nationalities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="campus-life.html" class="default-btn btn">Start your application<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="courses-area pt-100 pb-70 bg-f4f6f9">
    <div class="container">
        <div class="section-title">
            <h2>Free Courses</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="courses-slider style-2 owl-carousel owl-theme">
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-1.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Python Programming For Data Science</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-1.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Jessica Hamson</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-2.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Databases: Advanced Topics In SQL</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-2.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Christoph Baldwin</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-3.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Analyzing Data With MS Excel & Excel</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-3.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-1.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Python Programming For Data Science</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-1.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Jessica Hamson</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-2.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Databases: Advanced Topics In SQL</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-2.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Christoph Baldwin</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-3.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Analyzing Data With MS Excel & Excel</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-3.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-courses-card style3">
                <div class="courses-img">
                    <a href="courses-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/courses/courses-2.jpg" alt="Image"></a>
                </div>
                <div class="courses-content">
                    <div class="list-1">
                        <ul class="d-flex justify-content-between">
                            <li><i class="flaticon-graduation"></i>321</li>
                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                        </ul>
                    </div>
                    <a href="courses-details.html">
                        <h3>Databases: Advanced Topics In SQL</h3>
                    </a>
                    <div class="admin-profile">
                        <img src="{{ asset('frontend') }}/assets/images/courses/admin-2.jpg" alt="Image">
                        <p>With <a href="courses-details.html">Christoph Baldwin</a></p>
                    </div>
                    <div class="bottom-content">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <ul>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                    <li class="blank"><i class="ri-star-line"></i></li>
                                </ul>
                            </li>
                            <li><a href="#">Free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="campus-life-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Campus Life</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="campus-slider2 owl-carousel owl-theme">
            <div class="single-campus-card style-3">
                <div class="img">
                    <a href="campus-life.html"><img
                            src="{{ asset('frontend') }}/assets/images/campus-life/campus-life-1.jpg"
                            alt="Image"></a>
                </div>
                <div class="campus-content">
                    <span>Art & Culture</span>
                    <a href="campus-life.html">
                        <h3>Art, exercise and escapism in nature</h3>
                    </a>
                </div>
            </div>
            <div class="single-campus-card style-3">
                <div class="img">
                    <a href="campus-life.html"><img
                            src="{{ asset('frontend') }}/assets/images/campus-life/campus-life-2.jpg"
                            alt="Image"></a>
                </div>
                <div class="campus-content">
                    <span>Athletics & Fitness</span>
                    <a href="campus-life.html">
                        <h3>Improve Athletic Performance
                            Tips From Sanu</h3>
                    </a>
                </div>
            </div>
            <div class="single-campus-card style-3">
                <div class="img">
                    <a href="campus-life.html"><img
                            src="{{ asset('frontend') }}/assets/images/campus-life/campus-life-3.jpg"
                            alt="Image"></a>
                </div>
                <div class="campus-content">
                    <span>Student Life</span>
                    <a href="campus-life.html">
                        <h3>Why I Changed My Mind About Career Connections</h3>
                    </a>
                </div>
            </div>
            <div class="single-campus-card style-3">
                <div class="img">
                    <a href="campus-life.html"><img
                            src="{{ asset('frontend') }}/assets/images/campus-life/campus-life-2.jpg"
                            alt="Image"></a>
                </div>
                <div class="campus-content">
                    <span>Athletics & Fitness</span>
                    <a href="campus-life.html">
                        <h3>Improve Athletic Performance
                            Tips From Sanu</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="admisssion-area ptb-100 admission-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="admission-left-content">
                    <h2>You're Learning Free Started Today!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                        mattis</p>
                    <a href="admission.html" class="default-btn btn">More on admission<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-6">
                <div class="admission-right-content">
                    <ul>
                        <li>
                            <p>Watch Video</p>
                        </li>
                        <li>
                            <div class="icon">
                                <a class="popup-youtube play-btn"
                                    href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                        class="ri-play-fill"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-12 col-md-6">
                <div class="admission-right-content">
                    <div class="additional-information">
                        <h3 class="text-center">Leatest News</h3>
                        <div class="list">
                            <ul class="d-flex">
                                <li class="mx-3"><a href="#">Visiting</a></li>
                                <li class="mx-3"><a href="#">Campus Tour</a></li>
                                <li class="mx-3"><a href="#">Student Life</a></li>
                                <li class="mx-3"><a href="#">Scholarship</a></li>
                                <li class="mx-3"><a href="#">Clubs and Organizations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-6">
                <div class="additional-information">
                    <h3>Additional Information</h3>
                    <div class="list">
                        <ul>
                            <li><a href="#">Visiting</a></li>
                            <li><a href="#">Campus Tour</a></li>
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">Scholarship</a></li>
                            <li><a href="#">Clubs and Organizations</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>


<div class="health-care-area pt-100 pb-70 bg-f4f6f9">
    <div class="container">
        <div class="section-title">
            <h2>Health Care</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                mattis
            </p>
        </div>
        <div class="health-care-slider owl-carousel owl-theme">
            <div class="single-health-care-card style-3">
                <div class="img">
                    <a href="health-care-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/health-care/health-care-5.jpg"
                            alt="Image"></a>
                </div>
                <div class="health-care-content">
                    <a href="health-care-details.html">
                        <h3>Happiness begins with good health</h3>
                    </a>
                    <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="single-health-care-card style-3">
                <div class="img">
                    <a href="health-care-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/health-care/health-care-6.jpg"
                            alt="Image"></a>
                </div>
                <div class="health-care-content">
                    <a href="health-care-details.html">
                        <h3>When Life Depends on Medical Technology</h3>
                    </a>
                    <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="single-health-care-card style-3">
                <div class="img">
                    <a href="health-care-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/health-care/health-care-7.jpg"
                            alt="Image"></a>
                </div>
                <div class="health-care-content">
                    <a href="health-care-details.html">
                        <h3>Making a meaningful difference in patients’ lives.</h3>
                    </a>
                    <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="single-health-care-card style-3">
                <div class="img">
                    <a href="health-care-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/health-care/health-care-6.jpg"
                            alt="Image"></a>
                </div>
                <div class="health-care-content">
                    <a href="health-care-details.html">
                        <h3>When Life Depends on Medical Technology</h3>
                    </a>
                    <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="events-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Events</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                mattis
            </p>
        </div>
        <div class="events-slider owl-carousel owl-theme">
            <div class="single-events-card style-3 mlr-5">
                <div class="events-image">
                    <a href="events-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/events/events-1.jpg" alt="Image"></a>
                </div>
                <div class="events-content">
                    <a href="events-details.html">
                        <h3>Planning and Facilitating Effective Meetings</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p>
                    <div class="date-and-read-more">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                            </li>
                            <li>
                                <a href="events-details.html" class="read-more-btn active">Read Article<i
                                        class="flaticon-next"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-events-card style-3 mlr-5">
                <div class="events-image">
                    <a href="events-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/events/events-2.jpg" alt="Image"></a>
                </div>
                <div class="events-content">
                    <a href="events-details.html">
                        <h3>Regular WordPress Meetup In New Jersey, USA</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p>
                    <div class="date-and-read-more">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                            </li>
                            <li>
                                <a href="events-details.html" class="read-more-btn active">Read Article<i
                                        class="flaticon-next"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-events-card style-3 mlr-5">
                <div class="events-image">
                    <a href="events-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/events/events-3.jpg" alt="Image"></a>
                </div>
                <div class="events-content">
                    <a href="events-details.html">
                        <h3>Monday Night Concert In Lake View,Mountain City</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p>
                    <div class="date-and-read-more">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                            </li>
                            <li>
                                <a href="events-details.html" class="read-more-btn active">Read Article<i
                                        class="flaticon-next"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-events-card style-3 mlr-5">
                <div class="events-image">
                    <a href="events-details.html"><img
                            src="{{ asset('frontend') }}/assets/images/events/events-1.jpg" alt="Image"></a>
                </div>
                <div class="events-content">
                    <a href="events-details.html">
                        <h3>Planning and Facilitating Effective Meetings</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet cons ectetur ad elit tellus luctus nec ullamc</p>
                    <div class="date-and-read-more">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <p><i class="ri-calendar-2-line"></i>April 11,2022</p>
                            </li>
                            <li>
                                <a href="events-details.html" class="read-more-btn active">Read Article<i
                                        class="flaticon-next"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="podcasts-area pt-100 pb-70 bg-f4f6f9">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title style2">
                    <h2>Our Podcasts</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec
                        ullamcorper
                        mattis </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200" data-aos-once="true">
                        <div class="single-podcasts-card style3">
                            <div class="podcasts-image">
                                <img src="{{ asset('frontend') }}/assets/images/podcasts/podcasts-4.jpg"
                                    alt="Image">
                                <a class="popup-youtube play-btn"
                                    href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                        class="ri-play-fill"></i></a>
                                <div class="episodes">
                                    <p>Episodes: 01</p>
                                </div>
                            </div>
                            <div class="podcast-content">
                                <h3>Finding Moments Of Joy In A Challenging Year</h3>
                                <div class="date">
                                    <p>April 10,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400" data-aos-once="true">
                        <div class="single-podcasts-card style3">
                            <div class="podcasts-image">
                                <img src="{{ asset('frontend') }}/assets/images/podcasts/podcasts-5.jpg"
                                    alt="Image">
                                <a class="popup-youtube play-btn"
                                    href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                        class="ri-play-fill"></i></a>
                                <div class="episodes">
                                    <p>Episodes: 03</p>
                                </div>
                            </div>
                            <div class="podcast-content">
                                <h3>Arranging and enjoying life through work</h3>
                                <div class="date">
                                    <p>April 10,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="600" data-aos-once="true">
                        <div class="single-podcasts-card style3">
                            <div class="podcasts-image">
                                <img src="{{ asset('frontend') }}/assets/images/podcasts/podcasts-6.jpg"
                                    alt="Image">
                                <a class="popup-youtube play-btn"
                                    href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                        class="ri-play-fill"></i></a>
                                <div class="episodes">
                                    <p>Episodes: 08</p>
                                </div>
                            </div>
                            <div class="podcast-content">
                                <h3>Proved, only action can bring success</h3>
                                <div class="date">
                                    <p>April 10,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="800" data-aos-once="true">
                        <div class="single-podcasts-card style3">
                            <div class="podcasts-image">
                                <img src="{{ asset('frontend') }}/assets/images/podcasts/podcasts-7.jpg"
                                    alt="Image">
                                <a class="popup-youtube play-btn"
                                    href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                        class="ri-play-fill"></i></a>
                                <div class="episodes">
                                    <p>Episodes: 11</p>
                                </div>
                            </div>
                            <div class="podcast-content">
                                <h3>Finding happy moments through challenges</h3>
                                <div class="date">
                                    <p>April 10,2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories style-2">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#"><i class="flaticon-briefcase"></i>Business</a></li>
                        <li><a href="#"><i class="flaticon-fashion"></i>Fashion</a></li>
                        <li><a href="#"><i class="flaticon-writing-tool"></i>writing</a></li>
                        <li><a href="#"><i class="flaticon-web-development"></i>Development</a></li>
                        <li><a href="#"><i class="flaticon-audio-speaker"></i>Marketing</a></li>
                    </ul>
                </div>
                <div class="subscribe-area">
                    <div class="top-content">
                        <i class="flaticon-email"></i>
                        <h3>Subscribe To Newsletter</h3>
                        <p>Get updates to news & events</p>
                    </div>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Your Email" name="EMAIL"
                            required autocomplete="off">
                        <button class="default-btn" type="submit">
                            Subscribe
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="students-stories-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Check Student stories</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-stories-card style2">
                    <div class="stories-content">
                        <h3>Why I choose Sanu_Freshman Student</h3>
                    </div>
                    <iframe src="https://www.youtube.com/embed/dT9uXvsH6EU" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-stories-card style2">
                    <div class="stories-content">
                        <h3>Why I choose Sanu University And Teachers</h3>
                    </div>
                    <iframe src="https://www.youtube.com/embed/TM9gjl-8X-E" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-stories-card style2">
                    <div class="stories-content">
                        <h3>Why I choose Sanu Campus And Environment</h3>
                    </div>
                    <iframe src="https://www.youtube.com/embed/yeZpJ6lJC54" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="lates-news-area pt-100 pb-70 bg-f4f6f9">
    <div class="container">
        <div class="section-title">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                mattis
            </p>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7">
                <div class="single-news-card style3" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="news-img">
                                <a href="news-details.html"><img
                                        src="{{ asset('frontend') }}/assets/images/news/news-1.jpg"
                                        alt="Image"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="news-content">
                                <div class="list">
                                    <ul>
                                        <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a>
                                        </li>
                                        <li><i class="flaticon-tag"></i>Social Sciences</li>
                                    </ul>
                                </div>
                                <a href="news-details.html">
                                    <h3>Professor Tom Comments On The Volunteer B. Snack Brand</h3>
                                </a>
                                <a href="news-details.html" class="read-more-btn">read More<i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-news-card style3" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="news-img">
                                <a href="news-details.html"><img
                                        src="{{ asset('frontend') }}/assets/images/news/news-2.jpg"
                                        alt="Image"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="news-content">
                                <div class="list">
                                    <ul>
                                        <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a>
                                        </li>
                                        <li><i class="flaticon-tag"></i>Social Sciences</li>
                                    </ul>
                                </div>
                                <a href="news-details.html">
                                    <h3>How To Use Technology To Adapt Your Talent To The World</h3>
                                </a>
                                <a href="news-details.html" class="read-more-btn">read More<i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img
                                src="{{ asset('frontend') }}/assets/images/news/news-4.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Here Are The Things To Look For When Selecting Course</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
