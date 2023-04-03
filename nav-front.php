<div class="page-wrapper">
	<div class="background" style="background-image: url(<?php echo bloginfo('template_directory');?>/assets/images/phototour/index-bg.jpg);">
		<header class="header">

            <!--  -->
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
                                <li><a href="<?php echo get_page_link(get_page_by_title('About')->ID);?>">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="<?php echo get_page_link(get_page_by_title('Private')->ID);?>"><i class="icon-user"></i>Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!--  -->
            <div class="header-middle sticky-header">

                <!--  -->
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                    <a href="<?php echo get_page_link(get_page_by_title('Home')->ID);?>" class="logo">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/phototour/logo.png" alt="Molla Logo">
                    </a>
                </div>

                <!--  -->
                <div class="header-center">
                	<nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="<?php echo get_page_link(get_page_by_title('Home')->ID);?>">Home</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Shop</a>
                                <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div>
                                                        <ul>
                                                            <li><a href="#">Shop List</a></li>
                                                            <li><a href="#">Shop Grid 2 Columns</a></li>
                                                            <li><a href="#">Shop Grid 3 Columns</a></li>
                                                            <li><a href="#">Shop Grid 4 Columns</a></li>
                                                            <li><a href="#"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop no sidebar</div>
                                                        <ul>
                                                            <li><a href="#"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                            <li><a href="#">Shop Fullwidth No Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div>
                                                        <ul>
                                                            <li><a href="#">Product Category Boxed</a></li>
                                                            <li><a href="#"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div>
                                                        <ul>
                                                            <li><a href="#">Cart</a></li>
                                                            <li><a href="#">Checkout</a></li>
                                                            <li><a href="#">Wishlist</a></li>
                                                            <li><a href="#">My Account</a></li>
                                                            <li><a href="#">Lookbook</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="#" class="banner banner-menu">
                                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/menu/banner-1.jpg" alt="Banner">
                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Product</a>
                                <div class="megamenu megamenu-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-col">
                                                <div class="menu-title">Product Details</div>
                                                <ul>
                                                    <li><a href="#">Default</a></li>
                                                    <li><a href="#">Centered</a></li>
                                                    <li><a href="#"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                    <li><a href="#">Gallery</a></li>
                                                    <li><a href="#">Sticky Info</a></li>
                                                    <li><a href="#">Boxed With Sidebar</a></li>
                                                    <li><a href="#">Full Width</a></li>
                                                    <li><a href="#">Masonry Sticky Info</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner banner-overlay">
                                                <a href="#">
                                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/menu/banner-2.jpg" alt="Banner">
                                                    <div class="banner-content banner-content-bottom">
                                                        <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Reviews')->ID);?>" class="white-text">Reviews</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Blog')->ID);?>" class="white-text">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Archives')->ID);?>" class="white-text">Archives</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!--  -->
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
                                            <a href="#">Beige knitted elastic runner shoes</a>
                                        </h4>
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $84.00
                                        </span>
                                    </div>
                                    <figure class="product-image-container">
                                        <a href="#" class="product-image">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/products/cart/product-1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div>
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="#">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $76.00
                                        </span>
                                    </div>
                                    <figure class="product-image-container">
                                        <a href="#" class="product-image">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/products/cart/product-2.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div>
                            </div>
                            <div class="dropdown-cart-total">
                                <span>Total</span>
                                <span class="cart-total-price">$160.00</span>
                            </div>
                            <div class="dropdown-cart-action">
                                <a href="#" class="btn btn-primary">View Cart</a>
                                <a href="#" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
	        