<div class="comments-wrapper">


  <div class="comments" id="comments">


    <div class="comments-header">

      <h2 class="comment-reply-title">
        <?php if (!have_comments()) {
          echo "Leave a Comment";
        } else {
          echo get_comments_number() . "Comments";
        } ?>
      </h2>

    </div>

    <div class="comments-inner"><!-- .comments-inner -->

      <?php wp_list_comments(
        array(
          'avatar_size' => 120,
          'style' => 'div'
        )
      ) ?>

    </div><!-- comments -->

    <hr class="" aria-hidden="true">

    <?php
    if (comments_open()) {
      comment_form(array(
        'class_form' => '',
        'title_replay_before' => '<h2 id="replay-title" class="comments-replay-title">',
        'title_replay_after' => '</h2>'
      ));
    }
    ?>

  </div>