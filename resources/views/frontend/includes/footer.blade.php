<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-logo-area">
                    @php
                        $logo_info = App\Http\Controllers\frontend\FrontendController::avater();
                    @endphp
                    <a href="{{ url('/') }}">
                        @if (!empty($logo_info))
                        <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                        alt="Image" class="img-fluid" alt="logo" style="max-height: 100px;">
                        @else
                            <img src="https://via.placeholder.com/100x100/3B3486/FFFFFF/?text=LOGO"
                            alt="Image" class="img-fluid" alt="logo" style="max-height: 100px;">
                        @endif
                        </a>
                    <p>Sanu University was established by J.H Merthon in 1810 for the public benefit.
                        Afterwards, it
                        is recognized globally</p>
                    <div class="contact-list">
                        <ul>
                            <li><a href="tel:+01987655567685">+01-9876-5556-7685
                                </a></li>
                            <li><a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#4120252c282f0132202f346f242534"><span
                                        class="__cf_email__"
                                        data-cfemail="f59491989c9bb586949b80db909180">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>Campus Life</h3>
                    <div class="list">
                        <ul>
                            <li><a href="campus-life.html">Accessibility</a></li>
                            <li><a href="campus-life.html">Financial Aid</a></li>
                            <li><a href="campus-life.html">Food Services</a></li>
                            <li><a href="campus-life.html">Housing</a></li>
                            <li><a href="campus-life.html">Information Technologies</a></li>
                            <li><a href="campus-life.html">Student Life</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>Our Campus</h3>
                    <div class="list">
                        <ul>
                            <li><a href="campus-life.html">Acedemic</a></li>
                            <li><a href="campus-life.html">Planning & Administration</a></li>
                            <li><a href="campus-life.html">Campus Safety</a></li>
                            <li><a href="campus-life.html">Office of the Chancellor</a></li>
                            <li><a href="campus-life.html">Facility Services</a></li>
                            <li><a href="campus-life.html">Human Resources</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="footer-widjet">
                    <h3>Academics</h3>
                    <div class="list">
                        <ul>
                            <li><a href="academics.html">Canvas</a></li>
                            <li><a href="academics.html">Catalyst</a></li>
                            <li><a href="academics.html">Library</a></li>
                            <li><a href="academics.html">Time Schedule</a></li>
                            <li><a href="academics.html">Apply For Admissions</a></li>
                            <li><a href="academics.html">Pay My Tuition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('frontend') }}/assets/images/shape-1.png" alt="Image">
        </div>
    </div>
</div>
