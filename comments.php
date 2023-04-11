<!-- Comment Form -->
<div class="reply">
    <div class="heading">
        <h3 class="title">Leave A Reply</h3>
        <p class="title-desc">Your email address will not be published. Required fields are marked *</p>
    </div>
    <?php
        $args = array(
            'class_submit' => 'btn btn-outline-primary-2',   
        );
        comment_form($args);
    ?>
    <!--<form action="#">-->
    <!--    <label for="reply-message" class="sr-only">Comment</label>-->
    <!--    <textarea name="reply-message" id="reply-message" cols="30" rows="4" class="form-control" required placeholder="Comment *"></textarea>-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-6">-->
    <!--            <label for="reply-name" class="sr-only">Name</label>-->
    <!--            <input type="text" class="form-control" id="reply-name" name="reply-name" required placeholder="Name *">-->
    <!--        </div>-->
    <!--        <div class="col-md-6">-->
    <!--            <label for="reply-email" class="sr-only">Email</label>-->
    <!--            <input type="email" class="form-control" id="reply-email" name="reply-email" required placeholder="Email *">-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <button type="submit" class="btn btn-outline-primary-2">-->
    <!--        <span>POST COMMENT</span>-->
    <!--        <i class="icon-long-arrow-right"></i>-->
    <!--    </button>-->
    <!--</form>-->
</div>

<!-- Comment -->
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
                </div>
                <div class="comment-content">
                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </p>
                </div>
            </div>
        </div>
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
                        </div>
                        <div class="comment-content">
                            <p>Morbi interdum mollis sapien. Sed ac risus.</p>
                        </div>
                    </div>
                </div>
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
                </div>
                <div class="comment-content">
                    <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                </div>
            </div>
        </div>
    </li>
</ul>
