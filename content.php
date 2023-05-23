<?php
	global $PostImg;
?>
<!-- Article -->
<article class="entry">
    <figure class="entry-media">
        <a href="<?php the_permalink();?>">
            <img src="<?php echo $PostImg;?>" alt="<?php the_title();?>">
        </a>
    </figure>
    <div class="entry-body">
        <div class="entry-meta">
            <span class="entry-author">
                by <?php the_author_posts_link();?>
            </span>
            <span class="meta-separator">|</span>
            <?php the_time('j, M Y');?>
            <span class="meta-separator">|</span>
            <?php comments_number('No comments', 'One comment', '% comments');?>
            <span class="meta-separator">|</span>
            <?php echo get_num_visits($post->ID);?>
        </div>
        <br/>
        <h2 class="entry-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h2>
        <div class="entry-cats">
            in <?php the_category(' & ');?>
        </div>
        <div class="entry-content">
            <p><?php the_excerpt();?></p>
            <div class="link-button mt-4">
                <a href="<?php the_permalink();?>">Continue Reading</a>
            </div>
        </div>
    </div>
</article>