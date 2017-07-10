<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
<<<<<<< HEAD:1 - PHP for WordPress/1.08 - PRACTICE - The Loop/1.08-phpforwp-completed/index.php
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
=======
  <link rel="stylesheet" href="/wp-content/themes/1.08-phpforwp-completed/style.css">
>>>>>>> 6a462cbe4150dda549be54cdbb95bfb531d45164:1 - PHP for WordPress/1.08 - PRACTICE - The Loop/1.08-phpforwp-completed/index.php
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; else: ?>

      <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
      <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

    <?php endif; ?>

  </div>

</body>
</html>
