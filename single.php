<?php get_header(); ?>
                <div class="span8">
    <?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<article  id="post-<?php the_ID(); ?>" <?php post_class('posts'); ?>>
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<p><small>Posted
					<time datetime="<?php the_time( 'Y-m-d' ); ?>">
						<?php the_time( 'M j' ); ?>
					</time>
					by: <?php the_author(); ?>, <?php comments_number( "0 Comments", "1 Comment", "2 Comments" ); ?>
				</small></p>
				<p> <?php the_content(); ?></p>
				<p>Listed in: <?php the_category( ", "); ?> | <?php if(get_the_tags()): the_tags(); endif; ?></p>
				<p><?php comments_template(); ?></p>
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