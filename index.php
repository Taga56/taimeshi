<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(' | ',true,'right');?><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header>
       <h1>
          <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="鯛めしBAR">
          </a>
       </h1>
       <nav>
           <?php wp_nav_menu(); ?>
       </nav>
   </header>
   <main>
       <?php if(have_posts()): ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		
		
		
		
		
		
		<?php endwhile; ?>
<?php else: ?>
        <p>現在、準備中のページです。</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/prepare.png" alt="申し訳ございません。">
<?php endif; ?>
   </main>
    <footer>
        <?php wp_nav_menu(); ?>
    </footer>
</body>
</html>