<?php 
/*
 * Template Name: Full Width
 */ 
?>
<?php get_header(); ?>
                <div class="span12">
    <?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<article  id="post-<?php the_ID(); ?>" <?php post_class('posts'); ?>>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</article>
		<?php endwhile; else: ?>
			<p>sorry, we couldnt find your page</p>
	<?php endif; ?>
	<?php if(get_the_excerpt()): ?>
		<p><?php echo get_the_excerpt(); ?></p>
	<?php endif; ?>
<div class="clearfix"></div>
<span id="top-btn"><a href="#top"><i class="icon-arrow-up"></i> BACK TO TOP <i class="icon-arrow-up"></i></a></span>
                </div>
            </div>
            <hr>
<?php get_footer(); ?>