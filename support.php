<?php
include("layout/header.php");
?>
<!-- Content-->
<div class="content">
    <?php include("layout/backbutton.php"); ?>

    <!-- section-->
    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
        <div class="bg par-elem" data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="pattern-bg"></div>
        <div class="container">
            <div class="section-title">
                <h2><span>Reach </span> Me</h2>
                <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                <div class="horizonral-subtitle"><span>Contacts</span></div>
            </div>
        </div>
        <a href="#sec1" class="custom-scroll-link hero-start-link"><span>Let's Start</span> <i class="fal fa-long-arrow-down"></i></a>
    </section>
    <!-- section end-->
    <!-- section end-->
    <section data-scrollax-parent="true" id="sec1">
        <div class="section-subtitle" data-scrollax="properties: { translateY: '-250px' }">Get in Touch<span>//</span></div>
        <div class="container">
            <!-- contact details -->
            <div class="fl-wrap   mar-bottom">
                <div class="row">
                    <div class="col-md-3">
                        <div class="pr-title fl-wrap">
                            <h3>Contact Details</h3>
                            <span>Lorem Ipsum generators on the Internet king this the first true generator</span>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- features-box-container -->
                        <div class="features-box-container single-serv fl-wrap">
                            <div class="row">
                                <!--features-box -->
                                <div class="features-box col-md-4">
                                    <div class="time-line-icon">
                                        <i class="fal fa-mobile-android"></i>
                                    </div>
                                    <h3>01. Phone</h3>
                                    <a href="#">+489756412322</a>
                                </div>
                                <!-- features-box end  -->
                                <!--features-box -->
                                <div class="features-box col-md-4">
                                    <div class="time-line-icon">
                                        <i class="fal fa-compass"></i>
                                    </div>
                                    <h3>02. Location</h3>
                                    <a href="#">USA 27TH Brooklyn NY</a>
                                </div>
                                <!-- features-box end  -->
                                <!--features-box -->
                                <div class="features-box col-md-4">
                                    <div class="time-line-icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <h3>03. Email</h3>
                                    <a href="#">yourmail@domain.com</a>
                                </div>
                                <!-- features-box end  -->
                            </div>
                        </div>
                        <!-- features-box-container end  -->
                    </div>
                </div>
            </div>
            <!-- contact details end  -->
            <div class="fw-map-container fl-wrap mar-bottom">
                <div class="map-container">
                    <div id="singleMap" data-latitude="40.7143528" data-longitude="-74.0059731" data-mapTitle="Out Location"></div>
                </div>
            </div>
            <!--  map end  -->

            <!-- section-->
            <section class="dark-bg2 small-padding order-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>I always need your support?</h3>
                        </div>
                        <div class="col-md-4"><a href="support.php" class="btn flat-btn color-btn">Donate Now!</a> </div>
                    </div>
                </div>
            </section>
            <!-- section end-->

            <div class="fl-wrap mar-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="pr-title fl-wrap">
                            <h3>Get In Touch</h3>
                            <span>Lorem Ipsum generators on the Internet king this the first true generator</span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div id="contact-form">
                            <div id="message"></div>
                            <form class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><i class="fal fa-user"></i></label>
                                            <input type="text" name="name" id="name" placeholder="Your Name *" value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label><i class="fal fa-envelope"></i> </label>
                                            <input type="text" name="email" id="email" placeholder="Email Address *" value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label><i class="fal fa-mobile-android"></i> </label>
                                            <input type="text" name="phone" id="phone" placeholder="Phone *" value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <select name="subject" id="subject" data-placeholder="Subject" class="chosen-select sel-dec">
                                                <option>Subject</option>
                                                <option value="Order Project">Order Project</option>
                                                <option value="Support">Support</option>
                                                <option value="Other Question">Other Question</option>
                                            </select>
                                        </div>
                                    </div>
                                    <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                    <div class="verify-wrap">
                                        <span class="verify-text"> How many gnomes were in the story about the "Snow-white" ?</span>
                                        <select name="verify" id="verify" data-placeholder="0" class="chosen-select">
                                            <option>0</option>
                                            <option value="9">9</option>
                                            <option value="5">5</option>
                                            <option value="7">7</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button class="btn float-btn flat-btn color-btn" id="submit">Send Message</button>
                                </fieldset>
                            </form>
                        </div>
                        <!-- contact form  end-->
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-parallax-module" data-position-top="70" data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
        <div class="bg-parallax-module" data-position-top="40" data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
        <div class="bg-parallax-module" data-position-top="80" data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
        <div class="bg-parallax-module" data-position-top="95" data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
        <div class="sec-lines"></div>
    </section>
    <!-- section end-->
    <!-- section-->
    <section class="dark-bg2 small-padding order-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Find me on social networks : </h3>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
</div>
<!-- Content end -->
<?php
include("layout/footer.php");
?>