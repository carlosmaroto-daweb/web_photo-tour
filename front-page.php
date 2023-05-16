<?php
	get_header();
	get_template_part('nav', 'front');
?>

    <!-- Hero Section Text -->
    <div class="slider">
    	<div class="intro">
    		<div class="title">
    			<h3>Where your photos come true</h3>
    		</div>
    		<div class="content">
    			<h4><i>The best tours for photograpy lovers</i></h4>
    			<h5>Photos + Tours</h5>
    		</div>
    		<div class="action">
    			<a href="#">discover now</a>
    		</div>
    	</div>
    </div>
</div>
<main class="main">

    <!-- Partners Container -->
	<section class="logos">
		<div class="container">
			<div class="heading">
				<p class="heading-cat">Partners</p>
			</div>
			<div class="owl-carousel mb-5 owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 30,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner1.png" alt="Japan Airlines">
                </a>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner2.png" alt="Nikon">
                </a>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner3.png" alt="Turkish Airlines">
                </a>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner4.png" alt="Canon">
                </a>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner5.png" alt="United Airlines">
                </a>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner6.png" alt="Sony">
                </a>
                <a href="#" class="brand">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/partner7.png" alt="Singapore Airlines">
                </a>
            </div>
		</div>
    </section>

    <!-- Banners -->
    <section class="banners center">
    	<div class="container">
    		<div class="row">

                <!-- Banner -->
    			<div class="banner col-lg-4 col-md-6 col-sm-6">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/banner1.jpg">
        			<div class="intro">
        				<div class="title">
        					<h3>Online mega deal</h3>
        				</div>
        				<div class="content">
        					<h4>Cameras<br>& Accessories</h4>
        				</div>
        				<div class="action">
        					<a href="#">Shop Now</a>
        				</div>
        			</div>
        		</div>

                <!-- Banner -->
        		<div class="banner percent col-lg-4 col-md-6 col-sm-6">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/demos/demo-24/banners/banner-2.jpg">
        			<div class="intro">
        				<div class="title">
        					<h3>Summer</h3>
        					<h4>Sales</h4>
        				</div>
        				<div class="img-percent">
        					<img src="<?php echo bloginfo('template_directory');?>/assets/images/demos/demo-24/banners/percent.png" width="190" height="75">
        				</div>
        				<div class="action">
        					<a href="#">Discover Now</a>
        				</div>
        			</div>
        		</div>

                <!-- Banner -->
        		<div class="banner col-lg-4  col-md-6 col-sm-6">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/banner3.jpg">
        			<div class="intro">
        				<div class="title">
        					<h3>Lightning Deals</h3>
        				</div>
        				<div class="content">
        					<h4>Backpacks</h4>
        				</div>
        				<div class="action">
        					<a href="#">Shop Now</a>
        				</div>
        			</div>
        		</div>
    		</div>
    	</div>
    </section>

    <!-- Best Sellers -->
    <section class="best-sellers">
    	<div class="container">
    		<div class="heading">
        		<p class="heading-cat">favourite from every category</p>
        		<h3 class="heading-title">Best Sellers</h3>
        	</div>
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow text-center" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "margin": 30,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":3
                        },
                        "1200": {
                            "items":4
                        }
                    }
                }'>

                <!-- Article -->
                <div class="product product-10 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article1.1.jpg" alt="EOS 5D Mark IV" class="product-image">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article1.2.jpg" alt="EOS 5D Mark IV" class="product-image-hover">
                        </a>
                    </figure>
                    <div class="product-body">
                        <div class="product-action">
                            <a href="#" class="btn-cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                        </div>
                    	<div class="product-intro">
                            <h3 class="product-title">
                            	<a href="#">EOS 5D Mark IV</a>
                            </h3>
                            <div class="product-price">
                                $3,599.00
                            </div>
                    	</div>
                    	<div class="product-detail">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                </div>
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div>
                    	</div>
                    </div>
                </div>

                <!-- Article -->
                <div class="product product-10 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article2.1.jpg" alt="EF 24mm f/1.4L II USM" class="product-image">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article2.2.jpg" alt="EF 24mm f/1.4L II USM" class="product-image-hover">
                        </a>
                    </figure>
                    <div class="product-body">
                        <div class="product-action">
                            <a href="#" class="btn-cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                        </div>
                    	<div class="product-intro">
                            <h3 class="product-title">
                            	<a href="#">EF 24mm f/1.4L II USM</a>
                            </h3>
                            <div class="product-price">
                                $1,549.00
                            </div>
                    	</div>
                    	<div class="product-detail">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                </div>
                                <span class="ratings-text">( 1 Reviews )</span>
                            </div>
                    	</div>
                    </div>
                </div>

                <!-- Article -->
                <div class="product product-10 text-center">
                    <figure class="product-media">
                   		<span class="product-label label-sale">sale</span>
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article3.1.jpg" alt="Speedlite 600EX II-RT" class="product-image">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article3.2.jpg" alt="Speedlite 600EX II-RT" class="product-image-hover">
                        </a>
                    </figure>
                    <div class="product-body">
                        <div class="product-action">
                            <a href="#" class="btn-cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                        </div>
                    	<div class="product-intro">
                            <h3 class="product-title">
                            	<a href="#">Speedlite 600EX II-RT</a>
                            </h3>
                            <div class="product-price">
                            	<span class="new-price">$499.99</span>
                            	<span class="old-price">Was $599.99</span>
                            </div>
                    	</div>
                    	<div class="product-detail">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                </div>
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div>
                    	</div>
                    </div>
                </div>

                <!-- Article -->
                <div class="product product-10 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article4.1.jpg" alt="Wireless File Transmitter WFT-E9A" class="product-image">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article4.2.jpg" alt="Wireless File Transmitter WFT-E9A" class="product-image-hover">
                        </a>
                    </figure>
                    <div class="product-body">
                        <div class="product-action">
                            <a href="#" class="btn-cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                        </div>
                    	<div class="product-intro">
                            <h3 class="product-title">
                            	<a href="#">Wireless File Transmitter WFT-E9A</a>
                            </h3>
                            <div class="product-price">
                                $649.99
                            </div>
                    	</div>
                    	<div class="product-detail">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                </div>
                                <span class="ratings-text">( 1 Reviews )</span>
                            </div>
                    	</div>
                    </div>
                </div>

                <!-- Article -->
                <div class="product product-10 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article5.1.jpg" alt="Drop-In Filter Mount Adapter EF-EOS" class="product-image">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article5.2.jpg" alt="Drop-In Filter Mount Adapter EF-EOS" class="product-image-hover">
                        </a>
                    </figure>
                    <div class="product-body">
                        <div class="product-action">
                            <a href="#" class="btn-cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                        </div>
                    	<div class="product-intro">
                            <h3 class="product-title">
                            	<a href="#">Drop-In Filter Mount Adapter EF-EOS</a>
                            </h3>
                            <div class="product-price">
                                $399.99
                            </div>
                    	</div>
                    	<div class="product-detail">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                </div>
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div>
                    	</div>
                    </div>
                </div>

                <!-- Article -->
                <div class="product product-10 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article6.1.jpg" alt="Refurbished VIXIA HF G60" class="product-image">
                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article6.2.jpg" alt="Refurbished VIXIA HF G60" class="product-image-hover">
                        </a>
                    </figure>
                    <div class="product-body">
                        <div class="product-action">
                            <a href="#" class="btn-cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                        </div>
                    	<div class="product-intro">
                            <h3 class="product-title">
                            	<a href="#">Refurbished VIXIA HF G60</a>
                            </h3>
                            <div class="product-price">
                                $1,499.00
                            </div>
                    	</div>
                    	<div class="product-detail">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div>
                                </div>
                                <span class="ratings-text">( 3 Reviews )</span>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
    	</div>
    </section>

    <!-- Banners -->
    <section class="banners stretch mt-2">
    	<div class="container">
            <div class="row">

                <!-- Banner -->
                <div class="col-lg-6 col-md-6 col-12 banner-lg">
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/tour1.jpg">
                    <div class="intro">
                        <div class="title">
                            <h3>Tour</h3>
                        </div>
                        <div class="content">
                            <h4>New Zealand</h4>
                        </div>
                        <div class="action">
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>

                <!-- Banners -->
                <div class="col-lg-6 col-md-6 col-12 banner-sm-div">

                    <!-- Banner -->
                    <div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-black">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/tour2.jpg">
                        <div class="intro">
                            <div class="title">
                                <h3>Tour</h3>
                            </div>
                            <div class="content">
                                <h4>China</h4>
                            </div>
                            <div class="action">
                                <a href="#">Discover Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-white">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/tour3.jpg">
                        <div class="intro">
                            <div class="title">
                                <h3>Tour</h3>
                            </div>
                            <div class="content">
                                <h4>Namibia</h4>
                            </div>
                            <div class="action">
                                <a href="#">Discover Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-white">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/tour4.jpg">
                        <div class="intro">
                            <div class="title">
                                <h3>Tour</h3>
                            </div>
                            <div class="content">
                                <h4>Ladakh</h4>
                            </div>
                            <div class="action">
                                <a href="#">Discover Now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-black">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/tour5.jpg">
                        <div class="intro">
                            <div class="title">
                                <h3>Tour</h3>
                            </div>
                            <div class="content">
                                <h4>Patagonia</h4>
                            </div>
                            <div class="action">
                                <a href="#">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
    	<div class="container">
    		<div class="heading">
        		<p class="heading-cat">Featured Products</p>
        		<h3 class="heading-title">Featured Products</h3>
        	</div>
        	<div class="row">

                <!-- Products -->
        		<div class="col-lg-7 col-md-7 products">

                    <!-- Article -->
        			<div class="col-6">
        				<div class="product product-10 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article7.1.jpg" alt="Coolpix P1000" class="product-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article7.2.jpg" alt="Coolpix P1000" class="product-image-hover">
                                </a>
                            </figure>
                            <div class="product-body">
                                <div class="product-action">
                                    <a href="#" class="btn-cart"><span>add to cart</span></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                                </div>
                            	<div class="product-intro">
                                    <h3 class="product-title">
                                    	<a href="#">Coolpix P1000</a>
                                    </h3>
                                    <div class="product-price">
                                        $999.95
                                    </div>
                            	</div>
                            	<div class="product-detail">
                                    <div class="ratings-container">
		                                <div class="ratings">
		                                    <div class="ratings-val" style="width: 60%;"></div>
		                                </div>
		                                <span class="ratings-text">( 3 Reviews )</span>
		                            </div>
                            	</div>
                            </div>
                        </div>
        			</div>

                    <!-- Article -->
            		<div class="col-6">
						<div class="product product-10 text-center">
                            <figure class="product-media">
                            	<span class="product-label label-sale">sale</span>
                                <a href="#">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article8.1.jpg" alt="Tripod HG-100TBR" class="product-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article8.2.jpg" alt="Tripod HG-100TBR" class="product-image-hover">
                                </a>
                            </figure>
                            <div class="product-body">
                                <div class="product-action">
                                    <a href="#" class="btn-cart"><span>add to cart</span></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                                </div>
                            	<div class="product-intro">
                                    <h3 class="product-title">
                                    	<a href="#">Tripod HG-100TBR</a>
                                    </h3>
                                    <div class="product-price">
                                    	<span class="new-price">$119.99</span>
                                    	<span class="old-price">Was $149.99</span>
                                    </div>
                            	</div>
                            	<div class="product-detail">
                                    <div class="ratings-container">
		                                <div class="ratings">
		                                    <div class="ratings-val" style="width: 80%;"></div>
		                                </div>
		                                <span class="ratings-text">( 1 Reviews )</span>
		                            </div>
                            	</div>
                            </div>
                        </div>
                    </div>

                    <!-- Article -->
                    <div class="col-6">
                        <div class="product product-10 text-center">
                            <figure class="product-media">
                            	<span class="product-label label-sale">sale</span>
                                <a href="#">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article9.1.jpg" alt="Monarch Fieldscope 60ED" class="product-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article9.2.jpg" alt="Monarch Fieldscope 60ED" class="product-image-hover">
                                </a>
                            </figure>
                            <div class="product-body">
                                <div class="product-action">
                                    <a href="#" class="btn-cart"><span>add to cart</span></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                                </div>
                            	<div class="product-intro">
                                    <h3 class="product-title">
                                    	<a href="#">Monarch Fieldscope 60ED</a>
                                    </h3>
                                    <div class="product-price">
                                    	<span class="new-price">$1,399.95</span>
                                    	<span class="old-price">Was $1,499.99</span>
                                    </div>
                            	</div>
                            	<div class="product-detail">
                                    <div class="ratings-container">
		                                <div class="ratings">
		                                    <div class="ratings-val" style="width: 80%;"></div>
		                                </div>
		                                <span class="ratings-text">( 6 Reviews )</span>
		                            </div>
                            	</div>
                            </div>
                        </div>
                    </div>

                    <!-- Article -->
                    <div class="col-6">
                        <div class="product product-10 text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article10.1.jpg" alt="ME20F-SH" class="product-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article10.2.jpg" alt="ME20F-SH" class="product-image-hover">
                                </a>
                            </figure>
                            <div class="product-body">
                                <div class="product-action">
                                    <a href="#" class="btn-cart"><span>add to cart</span></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                                </div>
                            	<div class="product-intro">
                                    <h3 class="product-title">
                                    	<a href="#">ME20F-SH</a>
                                    </h3>
                                    <div class="product-price">
                                        $679.95
                                    </div>
                            	</div>
                            	<div class="product-detail">
                                    <div class="ratings-container">
		                                <div class="ratings">
		                                    <div class="ratings-val" style="width: 100%;"></div>
		                                </div>
		                                <span class="ratings-text">( 6 Reviews )</span>
		                            </div>
                            	</div>
                            </div>
                        </div>
                    </div>
        		</div>

                <!-- Deal of the day -->
        		<div class="col-lg-5 col-md-5 col-sm-8 col-12">
        			<div class="product product-10 product-lg text-center">
                        <figure class="product-media">
                        	<span class="product-label label-deal">deal of the day</span>
                            <a href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/article11.jpg" alt="CB-BP10" class="product-image">
                            </a>
                        </figure>
                        <div class="deal">
                        	<div class="deal-countdown offer-countdown" data-until="+11d"></div>
                        </div>
                        <div class="product-body">
                        	<div class="product-intro">
                                <h3 class="product-title">
                                	<a href="#">CB-BP10</a>
                                </h3>
                                <div class="product-price">
                                    $139.00
                                </div>
                        	</div>
                        	<div class="product-detail">
                                <div class="ratings-container">
	                                <div class="ratings">
	                                    <div class="ratings-val" style="width: 60%;"></div>
	                                </div>
	                                <span class="ratings-text">( 3 Reviews )</span>
	                            </div>
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
                                </div>
                        	</div>
                            <div class="product-action">
                                <a href="#" class="btn-cart"><span>add to cart</span></a>
                                <a href="#" class="btn-product-icon btn-wishlist"><span>Add to Wishlist</span></a>
                            </div>
                        </div><
                    </div>
        		</div>
        	</div>
        </div>
    </section>

    <!-- Video -->
    <section class="video-banner">
    	<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/background-video.jpg">
    	<div class="intro video">
    		<div class="title">
    			<h3><i>Travel Destinations</i></h3>
    		</div>
    		<div class="content">
    			<h4>Best of the<br>World 2023</h4>
    		</div>
    		<div class="action">
    			<a href="https://cdn.jwplayer.com/videos/2mqf8zwh-6nrQoCp5.mp4" class="btn-iframe"><i class="icon-play"></i></a>
    		</div>
    	</div>
    </section>

    <!-- Subscribe Form -->
    <section class="subscribe">
    	<div class="container">
    		<div class="heading">
        		<p class="heading-cat">Get The Latest News & Deals</p>
        		<h3 class="heading-title">Stay In The Know</h3>
        	</div>
    		<div class="col-lg-6 subscribe-form">
    			<form action="#">
                    <div class="input-group">
                        <input type="email" placeholder="Enter your Email Address" aria-label="Email Adress" required="">
                        <div class="input-group-append">
                            <button class="btn btn-subscribe" type="submit"><span>Subscribe</span></button>
                        </div>
                    </div>
                </form>
    		</div>
    	</div>
    </section>

    <!-- New Blog Posts -->
    <section class="blog mb-6">
    	<div class="container">
    		<div class="heading">
    			<p class="heading-cat">Our Fresh News</p>
    			<h3 class="heading-title">New Blog Posts</h3>
    		</div>
    		<div class="owl-carousel owl-simple mb-4" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": false,
                    "items": 3,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1,
                            "dots":true
                        },
                        "520": {
                            "items":2,
                            "dots":true
                        },
                        "768": {
                            "items":3
                        }
                    }
                }'>

                <!-- Aquí comienza el bucle-->
                <?php
                    $args = array(
                        'posts_per_page' => 3,
                    );
                    $latest_posts = new WP_Query($args);
                        
                    if($latest_posts->have_posts()):
                        while($latest_posts->have_posts()):
                            $latest_posts->the_post();
                            /* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
                            if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
                                // Recupero la imagen representativa
                                $PostImg = get_the_post_thumbnail_url();
                            } else {
                                $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
                            }
                ?>
                            <!-- Article -->
                            <article class="entry">
                                <figure class="entry-media">
                                    <a href="<?php the_permalink();?>">
                                        <img src="<?php echo $PostImg;?>" alt="Image <?php the_title();?>">
                                    </a>
                                </figure>
                                <div class="entry-body text-center">
                                    <div class="entry-meta">
                                        <a href="#"><?php the_time('j, M Y');?></a>, <?php comments_number('No comments', 'One comment', '% comments');?>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </h3>
                                    <div class="entry-content">
                                        <a href="<?php the_permalink();?>" class="read-more">read more</a>
                                    </div>
                                </div>
                            </article>

                <!-- Aquí termina el bucle-->
                <?php
                        endwhile;
                    else:
                        echo 'No posts published yet...';
                    endif;
                    
                    wp_reset_query();
                ?>
            </div>
    	</div>
    </section>

    <!-- Instagram Links -->
    <section class="instagram mb-3">
    	<div class="container">
    		<div class="heading">
    			<p class="heading-cat">Follow Us On Instagram <span class="highlight">@photo_tour<span></p>
    		</div>
        	<div class="row">
        		<div class="col-xl-5col col-md-3 col-6 instagram-feed">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/insta1.jpg">
        			<div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>2241</a>
                        <a href="#"><i class="icon-comments"></i>47</a>
                    </div>
        		</div>
        		<div class="col-xl-5col col-md-3 col-6 instagram-feed">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/insta2.jpg">
        			<div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>189</a>
                        <a href="#"><i class="icon-comments"></i>34</a>
                    </div>
        		</div>
        		<div class="col-xl-5col col-md-3 col-6 instagram-feed">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/insta3.jpg">
        			<div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>624</a>
                        <a href="#"><i class="icon-comments"></i>45</a>
                    </div>
        		</div>
        		<div class="col-xl-5col col-md-3 col-6 instagram-feed">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/insta4.jpg">
        			<div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>285</a>
                        <a href="#"><i class="icon-comments"></i>52</a>
                    </div>
        		</div>
        		<div class="col-xl-5col col-md-3 col-6 instagram-feed">
        			<img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/insta5.jpg">
        			<div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>351</a>
                        <a href="#"><i class="icon-comments"></i>52</a>
                    </div>
        		</div>
        	</div>
        </div>
    </section>
</main>

<?php
	get_footer();
?>