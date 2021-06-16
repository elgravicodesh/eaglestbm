<?php
include("layout/header.php");
?>
                <!-- Content-->
                <div class="content">
                <?php include("layout/backbutton.php");?>

                    <!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2><span> Mixing</span> and <br> <span> Mastering</span>  </h2>
                                <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <div class="horizonral-subtitle"><span>Services</span></div>
                            </div>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span>Let's Start</span> <i class="fal fa-long-arrow-down"></i></a>
                        </div>
                    </section>
                    <!-- section end-->
                    <section data-scrollax-parent="true">
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span>how much</div>
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h3>Nulla tristique mi a massa</h3>
                                <h2>Booking <span>Plans</span></h2>
                                <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.  </p>
                            </div>
                            <div class="fl-wrap mar-top">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- <div class="pr-title fl-wrap">
                                            <h3>Get In Touch</h3>
                                            <span>Lorem Ipsum generators on the Internet   king this the first true generator</span>
                                        </div> -->
                                    </div>
                                    <div class="col-md-7">
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-user"></i></label>
                                                            <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-envelope"></i> </label>
                                                            <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-mobile-android"></i> </label>
                                                            <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
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
                                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
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
                            <!-- about-wrap end  -->
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end-->  
                    <!-- section --> 
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span>Services</div>
                        <div class="container">
                            <!-- serv-carousel-wrap-->  
                            <div class="serv-carousel-wrap slider-carousel-wrap fl-wrap">
                                <div class="sp-cont  sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                                <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
                                <!-- serv-carousel --> 
                                <div class="serv-carousel fl-wrap cur_carousel-slider-container">
                                    <!-- serv-carousel-item --> 
                                    <div class="serv-carousel-item">
                                        <div class="serv-wrap fl-wrap">
                                            <div class="time-line-icon">
                                                <i class="fal fa-desktop"></i>
                                            </div>
                                            <h4>Web Design</h4>
                                            <div class="process-details">
                                                <div class="serv-img">
                                                    <img src="images/services/1.jpg" alt=""> 
                                                    <a href="images/services/1-big.jpg" class="serv-zoom   image-popup"><i class="fal fa-search"></i></a>
                                                </div>
                                                <h6>Duis autem vel eum iriure dolor</h6>
                                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                <ul>
                                                    <li>Concept</li>
                                                    <li>Design</li>
                                                    <li>3D Modeling</li>
                                                </ul>
                                            </div>
                                            <span class="process-numder">01.</span>
                                        </div>
                                    </div>
                                    <!-- serv-carousel-item end --> 
                                    <!-- serv-carousel-item --> 
                                    <div class="serv-carousel-item">
                                        <div class="serv-wrap fl-wrap">
                                            <div class="time-line-icon">
                                                <i class="fal fa-mobile-android"></i>
                                            </div>
                                            <h4>Ui/Ux Design</h4>
                                            <div class="process-details">
                                                <div class="serv-img">
                                                    <img src="images/services/1.jpg" alt=""> 
                                                    <a href="images/services/1-big.jpg" class="serv-zoom   image-popup"><i class="fal fa-search"></i></a>
                                                </div>
                                                <h6>Duis autem vel eum iriure dolor</h6>
                                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                <ul>
                                                    <li>Concept</li>
                                                    <li>Design</li>
                                                    <li>3D Modeling</li>
                                                </ul>
                                            </div>
                                            <span class="process-numder">02.</span>
                                        </div>
                                    </div>
                                    <!-- serv-carousel-item end -->    
                                    <!-- serv-carousel-item --> 
                                    <div class="serv-carousel-item">
                                        <div class="serv-wrap fl-wrap">
                                            <div class="time-line-icon">
                                                <i class="fab fa-pagelines"></i>
                                            </div>
                                            <h4>Branding</h4>
                                            <div class="process-details">
                                                <div class="serv-img">
                                                    <img src="images/services/1.jpg" alt=""> 
                                                    <a href="images/services/1-big.jpg" class="serv-zoom   image-popup"><i class="fal fa-search"></i></a>
                                                </div>
                                                <h6>Duis autem vel eum iriure dolor</h6>
                                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                <ul>
                                                    <li>Concept</li>
                                                    <li>Design</li>
                                                    <li>3D Modeling</li>
                                                </ul>
                                            </div>
                                            <span class="process-numder">03.</span>
                                        </div>
                                    </div>
                                    <!-- serv-carousel-item end -->                                       
                                    <!-- serv-carousel-item --> 
                                    <div class="serv-carousel-item">
                                        <div class="serv-wrap fl-wrap">
                                            <div class="time-line-icon">
                                                <i class="fal fa-shopping-bag"></i>
                                            </div>
                                            <h4>Ecommerce</h4>
                                            <div class="process-details">
                                                <div class="serv-img">
                                                    <img src="images/services/1.jpg" alt=""> 
                                                    <a href="images/services/1-big.jpg" class="serv-zoom   image-popup"><i class="fal fa-search"></i></a>
                                                </div>
                                                <h6>Duis autem vel eum iriure dolor</h6>
                                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
                                                <ul>
                                                    <li>Concept</li>
                                                    <li>Design</li>
                                                    <li>3D Modeling</li>
                                                </ul>
                                            </div>
                                            <span class="process-numder">04.</span>
                                        </div>
                                    </div>
                                    <!-- serv-carousel-item end -->                                                                       
                                </div>
                                <!-- serv-carousel  end--> 
                            </div>
                            <!-- serv-carousel-wrap end-->  
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <section class="dark-bg sinsec-dec sinsec-dec2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="video-box fl-wrap">
                                        <img src="images/all/2.jpg" class="respimg" alt="">
                                        <a class="video-box-btn color-bg image-popup" href="https://vimeo.com/110234211"><i class="fal fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="video-promo-text fl-wrap mar-top">
                                        <h3>My Presentation Video </h3>
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        <a href="#" class="btn float-btn flat-btn color-btn mar-top">My Youtube Chanel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="half-bg-dec single-half-bg-dec" data-ran="12"></div>
                        <div class="sec-lines"></div>
                    </section>
                    
                    <!-- section end-->              
                    <!-- section-->
                    <?php include("layout/order.php"); ?>
                    <!-- section end-->
                </div>
                <!-- Content end -->
<?php
include("layout/footer.php");
?>