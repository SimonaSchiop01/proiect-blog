<?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="post">
	<?php if ( has_post_thumbnail() ): ?>
	<figure class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
	</figure>
<?php endif; ?>
</a>
<?php the_content( 'Continue reading ' . get_the_title() ); ?>