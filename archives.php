<?php
    /*
    *   Template Name: Archives
    *
    */
    get_header();
    get_template_part('nav', 'blog');
?>

<main class="main">

    <!--  -->
    <div class="page-header text-center" style="background-image: url(<?php echo bloginfo('template_directory');?>/assets/images/page-header-bg.jpg)">
        <div class="container">
            <h1 class="page-title">Blog Masonry 4 Columns<span>Blog</span></h1>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Archives</li>
            </ol>
        </div>
    </nav>

    <!--  -->
    <div class="page-content">
        <div class="container">

            <!--  -->
            <nav class="blog-nav">
                <ul class="menu-cat entry-filter justify-content-center">
                    <li class="active"><a href="#" data-filter="*">All Blog Posts<span>12</span></a></li>
                    <li><a href="#" data-filter=".lifestyle">Lifestyle<span>3</span></a></li>
                    <li><a href="#" data-filter=".shopping">Shopping<span>1</span></a></li>
                    <li><a href="#" data-filter=".fashion">Fashion<span>3</span></a></li>
                    <li><a href="#" data-filter=".travel">Travel<span>6</span></a></li>
                    <li><a href="#" data-filter=".hobbies">Hobbies<span>2</span></a></li>
                </ul>
            </nav>

            <!--  -->
            <div class="entry-container max-col-4">

                <!--  -->
                <div class="entry-item lifestyle shopping col-sm-6 col-md-4 col-lg-3">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/assets/images/blog/masonry/4cols/post-1.jpg" alt="image desc">
                            </a>
                        </figure>
                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">2 Comments</a>
                            </div>
                            <h2 class="entry-title">
                                <a href="#">Cras ornare tristique elit.</a>
                            </h2>
                            <div class="entry-cats">
                                in <a href="#">Lifestyle</a>,
                                <a href="#">Shopping</a>
                            </div>
                        </div>
                    </article>
                </div>
                
            </div>

            <!--  -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link page-link-next" href="#" aria-label="Next">
                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>
		
<?php
    get_footer();
?>