		<footer class="footer">

			<!-- Service Container -->
			<div class="container service">
				<div class="row">

					<!-- Icon Box -->
					<div class="col-sm-6 col-lg-3">
	                    <div class="icon-box icon-box-side">
	                        <span class="icon-box-icon">
								<i class="bi bi-hourglass-split"></i>
	                        </span>
	                        <div class="icon-box-content">
	                            <h3 class="icon-box-title">More than 6</h3>
	                            <p>years of experience</p>
	                        </div>
	                    </div>
	                </div>
	                
					<!-- Icon Box -->
	                <div class="col-sm-6 col-lg-3">
	                    <div class="icon-box icon-box-side">
	                        <span class="icon-box-icon">
								<i class="bi bi-camera"></i>
	                        </span>
	                        <div class="icon-box-content">
	                            <h3 class="icon-box-title">20 Photo Tour</h3>
	                            <p>organized last year</p>
	                        </div>
	                    </div>
	                </div>
	                
					<!-- Icon Box -->
	                <div class="col-sm-6 col-lg-3">
	                    <div class="icon-box icon-box-side">
	                        <span class="icon-box-icon">
								<i class="bi bi-people"></i>
	                        </span>
	                        <div class="icon-box-content">
	                            <h3 class="icon-box-title">More than 350</h3>
	                            <p>happy customers</p>
	                        </div>
	                    </div>
	                </div>
	                
					<!-- Icon Box -->
	                <div class="col-sm-6 col-lg-3">
	                    <div class="icon-box icon-box-side">
	                        <span class="icon-box-icon">
								<i class="bi bi-emoji-laughing"></i>
	                        </span>
	                        <div class="icon-box-content">
	                            <h3 class="icon-box-title">Over 98%</h3>
	                            <p>satisfaction rate</p>
	                        </div>
	                    </div>
	                </div>
				</div>
            </div>

			<!-- Description and Links Container -->
            <div class="footer-middle">
            	<div class="container">
            		<div class="row">
	                
						<!-- Description Web and Social Networks -->
	            		<div class="col-lg-3 col-md-12">
		                    <div class="widget widget-about">
                            	<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/logo.png" class="footer-logo" alt="PhotoTour Logo">
		                        <p>Workshops Photo Tours by Dream Photo Expeditions. All our Photography Tours and Workshops are organized by our own official Travel Agency.</p>
		                        <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
		                    </div>
		                </div>
	                
						<!-- Account Link -->
						<div class="col-lg-3 col-sm-4 col-md-4">
							<div class="widget">
								<h4 class="widget-title">My Account</h4>
								<ul class="widget-list">
									<li><a href="<?php echo get_page_link(get_page_object('Private')->ID);?>">Sign In</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">My Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
	                
						<!-- Contact and Legal Link -->
		                <div class="col-lg-3 col-sm-4 col-md-4">
		                    <div class="widget">
		                        <h4 class="widget-title">Contact</h4>
		                        <ul class="widget-list">
		                            <li><a href="tel:#"><i class="bi bi-telephone"></i> Call: +34 625 01 44 81</a></li>
		                            <li><a href="mailto:#"><i class="bi bi-envelope"></i> info@phototour.com</a></li>
		                        </ul>
		                    </div>
		                    <div class="widget">
		                        <h4 class="widget-title">Legal</h4>
		                        <ul class="widget-list">
		                            <li><a href="#">Terms</a></li>
		                            <li><a href="<?php echo get_page_link(get_page_object('Privacy Policy')->ID)?>">Privacy</a></li>
		                        </ul>
		                    </div>
		                </div>
	                
						<!-- Menu Link -->
						<div class="col-lg-3 col-sm-4 col-md-4">
							<div class="widget">
								<h4 class="widget-title">Explore</h4>
								<ul class="widget-list">
									<li><a href="<?php echo home_url('/');?>">Home</a></li>
									<li><a href="#">Shop</a></li>
									<li><a href="<?php echo get_page_link(get_page_object('Reviews')->ID);?>">Reviews</a></li>
									<li><a href="<?php echo get_page_link(get_page_object('Blog')->ID);?>">Blog</a></li>
									<li><a href="<?php echo get_page_link(get_page_object('Archives')->ID);?>">Archives</a></li>
								</ul>
							</div>
						</div>
	            	</div>
            	</div>
			</div>

			<!-- Copyright and Payment Container -->
			<div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2023 PhotoTour. All Rights Reserved.</p>
					<figure class="footer-payments">
						<img src="<?php echo bloginfo('template_directory');?>/assets/images/payments.png" alt="Payment methods" width="272" height="20">
					</figure>
                    </div>
                </div>
            </div>
		</footer>
    </div>

	<!-- Button Scroll Top -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

	<!-- Mobile Menu -->
    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">

			<!-- Close Menu -->
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

			<!-- Search Form -->
            <form action="<?php echo home_url('/');?>" class="mobile-search">
                <label for="ws" class="sr-only">Search</label>
                <input type="search" class="form-control" name="s" id="s" placeholder="Search in...">
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
	                
			<!-- Menu Link -->
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a href="<?php echo home_url('/');?>">Home</a>
                    </li>
                    <li>
                        <a href="#">Shop</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(get_page_object('Reviews')->ID);?>">Reviews</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(get_page_object('Blog')->ID);?>">Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(get_page_object('Archives')->ID);?>">Archives</a>
                    </li>
                </ul>
            </nav>
	                
			<!-- Social Networks -->
            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div>
        </div>
    </div>
</body>

<?php
	wp_footer();
?>
</html>