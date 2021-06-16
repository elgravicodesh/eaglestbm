<!-- footer-->
<div class="height-emulator fl-wrap"></div>
<footer class="main-footer fixed-footer">
    <!--footer-inner-->
    <div class="footer-inner fl-wrap">
        <div class="container">
            <div class="partcile-dec" data-parcount="90"></div>
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-title fl-wrap">
                        <span>EaglesTBM</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer-header fl-wrap"><span>01.</span>Quick Links</div>
                    <div class="footer-box fl-wrap">
                        <div class="twitter-swiper-container fl-wrap" id="twitts-container"></div>
                        <a href="admin/index.php" class="btn float-btn trsp-btn">Dashboard</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer-header fl-wrap"><span>02.</span> Subscribe / Contacts</div>
                    <!-- footer-box-->
                    <div class="footer-box fl-wrap">
                        <p>Want to be notified when we launch a new beats. Just sign up and we'll send you a notification by email.</p>
                        <div class="subcribe-form fl-wrap">
                            <form id="subscribe" class="fl-wrap">
                                <input class="enteremail" name="email" id="subscribe-email" placeholder="email" spellcheck="false" type="text">
                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-paper-plane"></i> Send </button>
                                <label for="subscribe-email" class="subscribe-message"></label>
                            </form>
                        </div>
                        <!-- footer-contacts-->
                        <div class="footer-contacts fl-wrap">
                            <ul>
                                <li><i class="fal fa-phone"></i><span>Phone :</span><a href="#">+2348087400366</a></li>
                                <li><i class="fal fa-envelope"></i><span>Email :</span><a href="#">yourmail@domain.com</a></li>
                                <li><i class="fal fa-map-marker"></i><span>Address</span><a href="#">8 Amac Market, Abuja.</a></li>
                            </ul>
                        </div>
                        <!-- footer end -->
                        <!-- footer-socilal -->
                        <div class="footer-socilal fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!-- footer-socilal end -->
                    </div>
                    <!-- footer-box end-->
                </div>
            </div>
        </div>
    </div>
    <!--footer-inne endr-->
    <!--subfooter-->
    <div class="subfooter fl-wrap">
        <div class="container">
            <!-- policy-box-->
            <div class="policy-box">
                <span>&copy; <?php $mydate = getdate(date("U"));
                                echo "$mydate[weekday], $mydate[mday] $mydate[month], $mydate[year]"; ?>. EaglesTBM - All rights reserved. </span>
            </div>
            <!-- policy-box end-->
            <a href="#" class="to-top color-bg"><i class="fal fa-angle-up"></i><span></span></a>
        </div>
    </div>
    <!--subfooter end-->
</footer>
<!-- footer end-->
<!-- contact-btn -->
<a class="contact-btn color-bg" href="support.php"><i class="fal fa-envelope"></i><span>Get in Touch</span></a>
<!-- contact-btn end -->
</div>
<!--   content end -->
<!-- share-wrapper -->
<div class="share-wrapper isShare">
    <div class="share-title"><span>Share</span></div>
    <div class="close-share soa"><span>Close</span><i class="fal fa-times"></i></div>
    <div class="share-inner soa">
        <div class="share-container"></div>
    </div>
</div>
<!-- share-wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>