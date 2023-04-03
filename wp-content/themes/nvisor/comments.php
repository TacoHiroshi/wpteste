<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
<div class="details-comment-box"> 
    <h3 class="com-title"><?php comments_number( esc_html__('0 Comment', 'nvisor'), esc_html__('1 Comment', 'nvisor'), esc_html__('% Comments', 'nvisor') ); ?></h3>
    <?php wp_list_comments('callback=nvisor_theme_comment'); ?>  
</div>
<?php
// Are there comments to navigate through?
if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
<div class="text-center">
  <ul class="pagination">
    <li>
      <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
      paginate_comments_links( 
      array(
      'prev_text' => wp_specialchars_decode('<i class="fa fa-angle-left"></i>',ENT_QUOTES),
      'next_text' => wp_specialchars_decode('<i class="fa fa-angle-right"></i>',ENT_QUOTES),
      ));  ?>
    </li> 
  </ul>
</div>
<?php endif; // Check for comment navigation ?>
<?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php echo esc_html__( 'Comments are closed.' , 'nvisor' ); ?></p>
    <?php endif; ?> 
    <?php endif; ?>


<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'comment-form',        
                'class_form' => 'contact-comments', 
                'title_reply_before'=> '<h3 class="form-title">',                
                'title_reply'=> esc_html__( 'Leave a Comment', 'nvisor' ),
                'title_reply_after'=> '</h3>',
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'cookies' => '',
                    'author' => '<div class="row">
    <div class="col-lg-6">
        <div class="details-form">
            <input type="text" id="author" name="author" placeholder="'. esc_attr__('Name', 'nvisor').'" required="" />
        </div>
    </div>',
                    'email' => '<div class="col-lg-6">
        <div class="details-form">
            <input type="text" id="email" name="email" placeholder="'.esc_attr__('Email', 'nvisor').'" required="" />
        </div>
    </div>
    </div>'  ,                                                                                 
                ) ),   
                'comment_field' => '<div class="col-lg-12">
        <div class="details-form">
            <textarea id="message" name="comment"'.$aria_req.' placeholder="'.esc_attr__('Your Comment', 'nvisor').'"></textarea>
        </div>
    </div>',                    
                 'label_submit' => ''.esc_attr__('Post Comment', 'nvisor').'',
                 'comment_notes_before' => '',
                 'submit_button' => '<div class="contact-submit"><button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">%4$s</button></div>',
                 'comment_notes_after' => '',                    
        )
?>


<?php if ( comments_open() ) : ?>
<div class="details-form-box">
<?php comment_form($comment_args); ?>
</div>
<?php endif; ?> 
