<?php
	get_header();
	the_post();
	$post_id = $post->ID;
	/* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
    if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
        // Recupero la imagen representativa
        $PostImg = get_the_post_thumbnail_url();
    } else {
        $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
    }
	get_template_part('nav', 'blog');
?>

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_page_link(get_page_by_title('Home')->ID);?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID);?>">Blog</a></li>
                <li class="breadcrumb-item active"><a href="#"><?php the_title();?></a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="entry-media single-thumb" style="background-image:url(<?php echo $PostImg;?>)">
        </div><!-- End .entry-media -->
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="entry single-entry">
                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <?php the_author_posts_link();?>
                                </span>
                                <span class="meta-separator">|</span>
                                <?php the_time('j, M Y');?>
                                <span class="meta-separator">|</span>
                                <?php comments_number('No comments', 'One comment', '% comments');?>
                            </div><!-- End .entry-meta -->
                            <br/>
                            <h2 class="entry-title entry-title-big">
                                <?php the_title();?>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <?php the_category();?>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content editor-content">
                                <p><?php the_content();?></p>
                            </div><!-- End .entry-content -->

                            <div class="entry-footer row no-gutters flex-column flex-md-row">
                                <div class="col-md">
                                    <div class="entry-tags">
                                        <span>Tags:</span> <?php echo my_tags($post_id);?>
                                    </div><!-- End .entry-tags -->
                                </div><!-- End .col -->

                                <div class="col-md-auto mt-2 mt-md-0">
                                </div><!-- End .col-auto -->
                            </div><!-- End .entry-footer row no-gutters -->
                        </div><!-- End .entry-body -->
                        <?php
                            // Halla la URl del avatar asociado a la cuenta de email
                            $avatar = get_avatar_url(get_the_author_meta('email'), array('size' => 50));
                        ?>
                        <div class="entry-author-details">
                            <figure class="author-media">
                                <img src="<?php echo $avatar;?>" alt="User name">
                            </figure><!-- End .author-media -->

                            <div class="author-body">
                                <div class="author-header row no-gutters flex-column flex-md-row">
                                    <div class="col">
                                        <h4><?php the_author_posts_link();?></h4>
                                    </div><!-- End .col -->
                                </div><!-- End .row -->
                                <?php $author = wp_get_current_user();?>
                                <div class="author-content">
                                    <p><?php echo $author->description;?></p>
                                </div><!-- End .author-content -->
                            </div><!-- End .author-body -->
                        </div><!-- End .entry-author-details-->
                    </article><!-- End .entry -->

                    <div class="related-posts">
                        <h3 class="title">Related Posts</h3><!-- End .title -->
                        
                        <div class="owl-carousel owl-simple" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    }
                                }
                            }'>
                            <article class="entry entry-grid">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/grid/3cols/post-1.jpg" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Nov 22, 2018</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">2 Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">Cras ornare tristique elit.</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        in <a href="#">Lifestyle</a>,
                                        <a href="#">Shopping</a>
                                    </div><!-- End .entry-cats -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry entry-grid">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/grid/3cols/post-2.jpg" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Nov 21, 2018</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">0 Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">Vivamus ntulla necante.</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        in <a href="#">Lifestyle</a>
                                    </div><!-- End .entry-cats -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry entry-grid">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/grid/3cols/post-3.jpg" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Nov 18, 2018</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">3 Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">Utaliquam sollicitudin leo.</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        in <a href="#">Fashion</a>,
                                        <a href="#">Lifestyle</a>
                                    </div><!-- End .entry-cats -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->

                            <article class="entry entry-grid">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/grid/3cols/post-4.jpg" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">Nov 15, 2018</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">4 Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">Fusce pellentesque suscipit.</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-cats">
                                        in <a href="#">Travel</a>
                                    </div><!-- End .entry-cats -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- End .related-posts -->

                    <div class="comments">
                        <h3 class="title">3 Comments</h3><!-- End .title -->

                        <ul>
                            <li>
                                <div class="comment">
                                    <figure class="comment-media">
                                        <a href="#">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/comments/1.jpg" alt="User name">
                                        </a>
                                    </figure>

                                    <div class="comment-body">
                                        <a href="#" class="comment-reply">Reply</a>
                                        <div class="comment-user">
                                            <h4><a href="#">Jimmy Pearson</a></h4>
                                            <span class="comment-date">November 9, 2018 at 2:19 pm</span>
                                        </div><!-- End .comment-user -->

                                        <div class="comment-content">
                                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </p>
                                        </div><!-- End .comment-content -->
                                    </div><!-- End .comment-body -->
                                </div><!-- End .comment -->

                                <ul>
                                    <li>
                                        <div class="comment">
                                            <figure class="comment-media">
                                                <a href="#">
                                                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/comments/2.jpg" alt="User name">
                                                </a>
                                            </figure>

                                            <div class="comment-body">
                                                <a href="#" class="comment-reply">Reply</a>
                                                <div class="comment-user">
                                                    <h4><a href="#">Lena  Knight</a></h4>
                                                    <span class="comment-date">November 9, 2018 at 2:19 pm</span>
                                                </div><!-- End .comment-user -->

                                                <div class="comment-content">
                                                    <p>Morbi interdum mollis sapien. Sed ac risus.</p>
                                                </div><!-- End .comment-content -->
                                            </div><!-- End .comment-body -->
                                        </div><!-- End .comment -->
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <div class="comment">
                                    <figure class="comment-media">
                                        <a href="#">
                                            <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/comments/3.jpg" alt="User name">
                                        </a>
                                    </figure>

                                    <div class="comment-body">
                                        <a href="#" class="comment-reply">Reply</a>
                                        <div class="comment-user">
                                            <h4><a href="#">Johnathan Castillo</a></h4>
                                            <span class="comment-date">November 9, 2018 at 2:19 pm</span>
                                        </div><!-- End .comment-user -->

                                        <div class="comment-content">
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                                        </div><!-- End .comment-content -->
                                    </div><!-- End .comment-body -->
                                </div><!-- End .comment -->
                            </li>
                        </ul>
                    </div><!-- End .comments -->
                    <div class="reply">
                        <div class="heading">
                            <h3 class="title">Leave A Reply</h3><!-- End .title -->
                            <p class="title-desc">Your email address will not be published. Required fields are marked *</p>
                        </div><!-- End .heading -->

                        <form action="#">
                            <label for="reply-message" class="sr-only">Comment</label>
                            <textarea name="reply-message" id="reply-message" cols="30" rows="4" class="form-control" required placeholder="Comment *"></textarea>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="reply-name" class="sr-only">Name</label>
                                    <input type="text" class="form-control" id="reply-name" name="reply-name" required placeholder="Name *">
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <label for="reply-email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="reply-email" name="reply-email" required placeholder="Email *">
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->

                            <button type="submit" class="btn btn-outline-primary-2">
                                <span>POST COMMENT</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>
                        </form>
                    </div><!-- End .reply -->
                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3">
                    <?php
                        get_sidebar();
                    ?>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

<?php
	get_footer();
?>