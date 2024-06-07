<?php
    /*
     * Template Name: Private
     */
    get_header();
    get_template_part('nav', 'blog');
?>

<main class="main">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>
    </nav>

    <!-- Login Page -->
    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17 mh75" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/photo-tour/background-private.jpg')">
        <div class="container">
            
            <!-- User Not Logged -->
            <?php
                if(!is_user_logged_in()) {
            ?>
                    <div class="form-box">
                        <div class="form-tab">

                            <!-- Nav Pills -->
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                
                                <!-- Login Form -->
                                <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                    <form name="loginform" id="loginform" action="<?php echo home_url('/')."wp-login.php";?>" method="post">
                                        <div class="form-group">
                                            <label for="user_login">Username or Email Address *</label>
                                            <input type="text" name="log" id="user_login" autocomplete="username" class="form-control" size="20" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_pass">Password *</label>
                                            <input type="password" name="pwd" id="user_pass" autocomplete="current-password" spellcheck="false" class="form-control"  size="20" required>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" name="wp-submit" id="wp-submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <input type="hidden" name="redirect_to" value="<?php echo get_page_link(get_page_object('Private')->ID);?>">
                                            <div class="custom-control custom-checkbox">
                                                <input name="rememberme" type="checkbox" id="rememberme" class="custom-control-input" value="forever">
                                                <label class="custom-control-label" for="rememberme">Remember Me</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- Register Form -->
                                <div class="tab-pane fade" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                    <form name="registerform" id="registerform" action="<?php echo home_url('/')."wp-login.php?action=register";?>" method="post" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="user_login">Username *</label>
                                            <input type="text" name="user_login" id="user_login" class="form-control" size="20" autocapitalize="off" autocomplete="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_email">Email *</label>
                                            <input type="email" name="user_email" id="user_email"  class="form-control" size="25" autocomplete="email" required>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" name="wp-submit" id="wp-submit" class="btn btn-outline-primary-2">
                                                <span>REGISTER</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <input type="hidden" name="redirect_to" value="<?php echo get_page_link(get_page_object('Private')->ID);?>">
                                            <p>Registration confirmation will be emailed.</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- User Logged -->
            <?php
                } else {
                    $author = wp_get_current_user();
                    $nombre = $author->user_login;
                    $rol = get_author_role($author->ID);
            ?>
                    <div class="row elements dark-background">
                        <div class="col-12 logged">
                            <h3>Hello <span class="main-color"><?php echo $nombre;?></span>!</h3>
                            <h5>You are <span class="main-color"><?php echo $rol;?></span></h5>
                        </div>
                        <div class="col-6">
                            <a href="<?php echo admin_url();?>" class="element-type">
                                <div class="element">
                                    <span class="dashicons dashicons-dashboard"></span>
                                    <p>Admin Area</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="<?php echo wp_logout_url(get_permalink());?>" class="element-type">
                                <div class="element">
                                    <span class="dashicons dashicons-admin-users"></span>
                                    <p>Log Out</p>
                                </div>
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</main>

<?php
    get_footer();
?>