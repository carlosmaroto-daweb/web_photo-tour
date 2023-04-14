<!-- Comment Form -->
<div class="reply">
    <div class="heading">
        <h3 class="title">Leave A Reply</h3>
        <p class="title-desc">Your email address will not be published. Required fields are marked *</p>
    </div>
    <?php
        $args = array(
            'class_submit' => 'btn btn-outline-primary-2 comment-form-submit',   
        );
        comment_form($args);
    ?>
</div>

<!-- List Comments -->
<ul class="list-comments">
    <?php wp_list_comments();?>
</ul>
