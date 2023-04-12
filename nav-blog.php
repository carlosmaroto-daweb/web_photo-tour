<div class="page-wrapper">
    <header class="header header-intro-clearance header-3 no-padding-lr dark-background">

        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="header-left text-white">
                    <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                </div>
                <div class="header-right">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">USD</a>
                                        <div class="header-menu dark-background">
                                            <ul>
                                                <li><a href="#">Eur</a></li>
                                                <li><a href="#">Usd</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">English</a>
                                        <div class="header-menu dark-background">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Spanish</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="<?php echo get_page_link(get_page_object('Private')->ID);?>" ><i class="icon-user"></i>Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header Middle -->
        <div class="header-middle">
            <div class="container">

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

                <!-- Search Form -->
                <div class="header-center">
                    <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="<?php echo home_url('/');?>">
                            <div class="header-search-wrapper search-wrapper-wide">
                                <label for="ws" class="sr-only">Search</label>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                <input type="search" class="form-control" name="s" id="s" placeholder="Search in blog ...">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Wishlist and Cart -->
                <div class="header-right">
                    <div class="wishlist">
                        <a href="#" title="Wishlist">
                            <div class="icon">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">3</span>
                            </div>
                            <p class="text-white">Wishlist</p>
                        </a>
                    </div>
                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <div class="icon">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </div>
                            <p class="text-white">Cart</p>
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
        </div>

        <!-- Sticky Header -->
        <div class="header-bottom sticky-header">
            <div class="container">

                <!-- Browse Categories -->
                <div class="header-left">
                    <div class="dropdown category-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                            Browse Categories <i class="icon-angle-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <nav class="side-nav">
                                <ul class="menu-vertical sf-arrows">
                                    <?php wp_list_categories('title_li=');?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Menu Link -->
                <div class="header-right">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container ">
                                <a href="<?php echo home_url('/');?>" class="black-text">Home</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul black-text">Shop</a>
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
                                <a href="#" class="sf-with-ul black-text">Product</a>
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
                                <a href="<?php echo get_page_link(get_page_object('Reviews')->ID);?>" class="black-text">Reviews</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_object('Blog')->ID);?>" class="black-text">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_object('Archives')->ID);?>" class="black-text">Archives</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
