<!-- comment/discussion section-->
<?php if(have_comments()) :?>
    <h4 id="commentNum"><?php comments_number('No Comments', 'One Comment','% Comments');?></h4>
    <ul class="commentlist">
        <?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
    </ul>
    <?php endif;?>

        <?php


//------------------------
$args = array(
  'id_form'           => 'commentform',
  'class_form'        => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Write a Reply or Comment' ),
  'title_reply_to'    => __( 'Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Comment' ),
  'format'            => 'HTML5',

  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="2000" rows="3" aria-required="true">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

    //for some stupid reason I have to have this blank for word press not to show default settings
    'comment_notes_before' => '',
    'fields' => '',
);

comment_form($args);?>