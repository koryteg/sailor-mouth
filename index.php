<?php get_header(); ?>
                <div class="span8">
    <?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<article  id="post-<?php the_ID(); ?>" <?php post_class('posts'); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p> <?php the_content(); ?></p>
			</article>
		<?php endwhile; else: ?>
			<p>i dont have posts</p>
	<?php endif; ?>
<div class="clearfix"></div>
<span id="top-btn"><a href="#top"><i class="icon-arrow-up"></i> BACK TO TOP <i class="icon-arrow-up"></i></a></span>
                </div>
                <?php get_sidebar( 'right' ); ?>
            </div>
            <hr>
<?php get_footer(); ?>