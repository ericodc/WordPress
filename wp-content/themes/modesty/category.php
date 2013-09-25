<?php get_header();?>
	<div id="container_main">
		<div id="content_main">
			<div id="search_container">
				<div id="search">
				 	<?php get_search_form(); ?>
				</div>
			</div>
<h1><span class="some_red">//</span><span class="some_red"> >> </span><span><?php single_cat_title() ?></span></h1>
<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
<!--?php rewind_posts(); ?-->
			<?php
				while(have_posts()) : the_post();?>
			<div id="<?php the_ID(); ?>" <?php post_class(); ?> >
				<h2><a href="<?php the_permalink(); ?>"><?php modesty_date_as_title();?></a>
				<div class="info"><?php the_author_posts_link(); ?> | <?php the_time('j. F, Y'); ?><!-- | <?php edit_post_link(); ?>--> </div>
				</h2>
				<div><?php the_content();?></div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php get_footer();?>