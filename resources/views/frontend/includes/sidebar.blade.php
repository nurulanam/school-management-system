<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <a href="index.html">
                    <img src="{{ asset('frontend') }}/assets/images/logo.png" class="main-logo" alt="logo">
                    <img src="{{ asset('frontend') }}/assets/images/white-logo.png" class="white-logo"
                        alt="logo">
                </a>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <div class="sidebar-btn">
                        <a href="contact.html" class="default-btn">Let’s Talk</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                        <li><i class="ri-mail-line"></i><a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#29414c454546695a48475c074a4644"><span
                                    class="__cf_email__"
                                    data-cfemail="abc3cec7c7c4ebd8cac5de85c8c4c6">[email&#160;protected]</span></a>
                        </li>
                        <li><i class="ri-map-pin-line"></i> 413 North Las Vegas, NV 89032</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                class="flaticon-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/?lang=en" target="_blank"><i
                                class="flaticon-instagram"></i></a>
                    </li>
                </ul>
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" required
                                        data-error="Please enter your phone number"
                                        placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="6" required
                                        data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message<span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
