<div class="page-wrapper">
	<div class="background" style="background-image: url(<?php echo bloginfo('template_directory');?>/assets/images/phototour/index-bg.jpg);">
		<header class="header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="header-left">
                    <div class="header-dropdown">
                        <a href="#">Usd</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">Eur</a></li>
                                <li><a href="#">Usd</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-dropdown">
                        <a href="#">Eng</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="<?php echo get_page_link(get_page_object('Private')->ID);?>"><i class="icon-user"></i>Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Header Middle -->
            <div class="header-middle sticky-header">

                <!-- Logo and Button Mobile Menu -->
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                    <a href="<?php echo home_url('/');?>" class="logo">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/logo.png" alt="PhotoTour Logo">
                    </a>
                </div>

                <!-- Menu Link -->
                <div class="header-center">
                	<nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active">
                                <a href="<?php echo home_url('/');?>">Home</a>
                            </li>
                            <li>
                                <a href="#" class="white-text">Shop</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_object('Reviews')->ID);?>" class="white-text">Reviews</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_object('Blog')->ID);?>" class="white-text">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_object('Archives')->ID);?>" class="white-text">Archives</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Search, Wishlist and Cart -->
                <div class="header-right">
                    <div class="header-search">
                        <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                        <form action="<?php echo home_url('/');?>">
                            <div class="header-search-wrapper">
                                <label for="ws" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="s" id="s" placeholder="Search in...">
                            </div>
                        </form>
                    </div>
                    <div class="wishlist">
                        <a href="#" title="Wishlist">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                        </a>
                    </div>
                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="#">New Zealand</a>
                                        </h4>
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $6,860.00
                                        </span>
                                    </div>
                                    <figure class="product-image-container">
                                        <a href="#" class="product-image">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/cart1.jpg" alt="New Zealand">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div>
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="#">Myanmar</a>
                                        </h4>
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $3,390.00
                                        </span>
                                    </div>
                                    <figure class="product-image-container">
                                        <a href="#" class="product-image">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/cart2.jpg" alt="Myanmar">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div>
                            </div>
                            <div class="dropdown-cart-total">
                                <span>Total</span>
                                <span class="cart-total-price">$10,250.00</span>
                            </div>
                            <div class="dropdown-cart-action">
                                <a href="#" class="btn btn-outline-primary-2"><span>View Cart</span><i class="icon-long-arrow-right"></i></a>
                                <a href="#" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
	        