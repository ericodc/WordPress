<?php get_header(); ?>
	<div id="container_main">
		<div id="content_main">
			<div id="search_container">
				<div id="search">
				 	<?php get_search_form(); ?>
				</div>
			</div>
<?php if ( have_posts() ) : ?>
<h1><span class="some_red">//</span><?php _e('Search', 'modesty'); ?><span class="some_red"> >></span><span><?php print(get_search_query());?></span></h1>
			<?php
				while(have_posts()) : the_post();?>
			<div id="<?php the_ID(); ?>" <?php post_class(); ?> >
				<h2><a href="<?php the_permalink(); ?>"><?php modesty_date_as_title();?></a>
				<div class="info"><?php the_category('&raquo'); ?> | <?php the_author_posts_link(); ?> | <?php the_time('j. F, Y'); ?><!-- | <?php edit_post_link(); ?>--> </div>
				</h2>
				<div><?php the_content();?></div>
			</div>
			<?php endwhile; ?>
<?php else : ?>
<div id="post-0" class="post">
<h2 ><?php _e( 'Nothing found', 'modesty' ); ?></h2>
<div>
<p><?php _e( 'Unfortunately there are no results for your search.', 'modesty' ); ?></p>
</div>
</div>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>