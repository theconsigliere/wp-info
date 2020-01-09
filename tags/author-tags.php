<?php


the_author_meta();
get_the_author_meta();

// Common the_author_meta() fields

?>

<div class="author-bio">
        <h2><?php the_author_meta( 'display_name' ) ?></h2>
        <ul>
          <li>user_login: <?php the_author_meta( 'user_login' ); ?></li>
          <li>user_pass: <?php the_author_meta( 'user_pass' ); ?></li>
          <li>user_nicename: <?php the_author_meta( 'user_nicename' ); ?></li>
          <li>user_email: <?php the_author_meta( 'user_email' ); ?></li>
          <li>user_url: <?php the_author_meta( 'user_url' ); ?></li>
          <li>display_name: <?php the_author_meta( 'display_name' ); ?></li>
          <li>nickname: <?php the_author_meta( 'nickname' ); ?></li>
          <li>first_name: <?php the_author_meta( 'first_name' ); ?></li>
          <li>last_name: <?php the_author_meta( 'last_name' ); ?></li>
          <li>description: <?php the_author_meta( 'description' ); ?></li>
          <li>user_level: <?php the_author_meta( 'user_level' ); ?></li>
          <li>get_avatar <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></li>
          <li>get_edit_user_link
            <a href="<?php echo get_edit_user_link( get_the_author_meta( 'ID' ) ); ?>">
              <?php _e( 'Edit', 'wptags' ); ?>
            </a>
          </li>
        </ul>
</div>