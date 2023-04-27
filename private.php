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
    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17 mh75" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/phototour/background-private.jpg')">
        <div class="container">
            
            <!-- User Logged -->
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
                                <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email-2">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email-2" name="singin-email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="singin-password-2">Password *</label>
                                            <input type="password" class="form-control" id="singin-password-2" name="singin-password" required>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember-2">
                                                <label class="custom-control-label" for="signin-remember-2">Remember Me</label>
                                            </div>
                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- Register Form -->
                                <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email-2">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email-2" name="register-email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="register-password-2">Password *</label>
                                            <input type="password" class="form-control" id="register-password-2" name="register-password" required>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                                <label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- User Not Logged -->
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
                        <div class="col-xl-5col col-lg-4 col-md-3 col-6">
                            <a href="#" class="element-type">
                                <div class="element">
                                    <i class="element-img"></i>
                                    <i class="element-hover-img"></i>
                                    <p>ADMIN AREA</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-5col col-lg-4 col-md-3 col-6">
                            <a href="#" class="element-type">
                                <div class="element">
                                    <i class="element-img"></i>
                                    <i class="element-hover-img"></i>
                                    <p>LOG OUT</p>
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