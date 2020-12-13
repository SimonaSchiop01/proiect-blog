<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
	<section class="logo">
		<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png"></a>
	</section>
	<section class="menu">
		<?php if(has_nav_menu( 'primary' )):?>
                <nav class="header-nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                        )
                    ); ?>
                </nav>
        <?php endif; ?>
	</section>
</header>