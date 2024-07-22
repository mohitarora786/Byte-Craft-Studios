<section class="contact-one" style="background-image:url({{ asset('images/background/map-1.webp') }})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title">
                        <div id="service-title">Contact us</div>
                    </div>
                    <h2 class="sec-title_heading">Grow Your Business With <br> <span>Our Expertise</span></h2>
                </div>
                <div class="right-box">
                    <div class="sec-title_text">Succinctly conveys our commitment to helping businesses expand
                        <br>
                        and thrive through our specialized knowledge and experience.
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Contact Block -->
                    <div class="contact-block">
                        <div class="block-inner">
                            <span class="icon"><img src="{{ asset('images/icons/contact-1.webp') }}" alt="" /></span>
                            <strong>Head Office</strong>
                            Vishnu Mahajan Nagar, Bhusawal, Maharashtra, India
                        </div>
                        <div class="block-inner" style="margin-top: 15px;">
                            <!-- <span class="icon"><img src="images/icons/contact-1.webp" alt="" /></span> -->
                            <strong>Pune Office</strong>
                            Hinjewadi Phase-1, Pune, Maharashtra, India
                        </div>
                    </div>

                    <!-- Contact Block -->
                    <div class="contact-block">
                        <div class="block-inner">
                            <span class="icon"><img src="{{ asset('images/icons/contact-2.webp') }}" alt="" /></span>
                            <strong>Telephone number</strong>
                            <a class="mmlink" href="tel:+918668367265">+91 866 - 8367 - 265</a>
                        </div>
                    </div>

                    <!-- Contact Block -->
                    <div class="contact-block">
                        <div class="block-inner">
                            <span class="icon"><img src="{{ asset('images/icons/contact-3.webp') }}" alt="" /></span>
                            <strong>Mail address</strong>
                            <a class="mmlink" href="mailto:contact@/">contact@/</a>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .mmlink {
                    color: #e6e6dd;
                    font-size: 15px;
                }
            </style>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="https://formspree.io/f/xpwazoqg" id="contact-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" name="username" placeholder="Your name*" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email address *</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Phone *</label>
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="text-dark col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label for="subject">Subject *</label>
                                    <select name="subject" id="subject" required onchange="toggleFields()">
                                        <option value="" class="text-dark col-lg-6 col-lg-12" disabled selected>Select a subject</option>
                                        <option value="career">Career</option>
                                        <option value="quote">Get Quote</option>
                                        <option value="message">Message</option>
                                    </select>
                                </div>

                                <div id="file-upload" class="col-lg-6 col-md-12 col-sm-12 form-group hide-file-upload">
                                    <label for="file">Choose a file</label>
                                    <input type="file" name="file" id="file">
                                </div>

                                <div id="message-field" class="col-lg-12 col-md-12 col-sm-12 form-group hide-message-field">
                                    <label>Your message</label>
                                    <textarea name="message" placeholder="Your text here..."></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="btn-style-seven theme-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send message</span>
                                            <span class="text-two">Send message</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Comment Form -->
                </div>
            </div>
        </div>
    </div>
</section>
