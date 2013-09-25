	<div id="container_main">
		<div id="content_main">
			<div id="search_container">
				<div id="search">
				 	<?php get_search_form(); ?>
				</div>
			</div>
			<h1><span class="some_red">//</span>Home</h1>
			<?php
				while(have_posts()) : the_post();?>
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<div id="<?php the_ID(); ?>" <?php post_class(); ?> >
				<h2><a href="<?php the_permalink(); ?>"><?php modesty_date_as_title();?></a>
				<div class="info"><?php the_category('&raquo;'); ?> | <?php the_author_posts_link(); ?> | <?php the_time('j. F, Y'); ?><!-- | <?php edit_post_link(); ?>--> </div>
				</h2>
				<div><?php the_content();?></div>
			</div>
			<?php else: ?>
			<div id="<?php the_ID(); ?>" <?php post_class('post_tiny'); ?> >
				<h2><a href="<?php the_permalink(); ?>"><?php modesty_date_as_title();?></a>
				<div class="info"><?php the_category('&raquo;'); ?> | <?php the_author_posts_link(); ?> | <?php the_time('j. F, Y'); ?><!-- | <?php edit_post_link(); ?>--> </div>
				</h2>
				<div><?php the_content();?></div>
			</div>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>