<?php get_header(); ?>
<div id="container_main">
		<div id="content_main">
			<div id="search_container">
				<div id="search">
				 	<?php get_search_form(); ?>
				</div>
			</div>
			<?php the_post(); ?>
<h1><span class="some_red">//</span><?php modesty_date_as_title(); ?></h1>
			<div id="<?php the_ID(); ?>" <?php post_class(); ?> >
				<h2>
				<div class="info"><?php the_author_posts_link(); ?> | <?php the_time('j. F, Y'); ?><!-- | <?php edit_post_link(); ?>--> </div>
				</h2>
				<div><?php the_content();?></div>
				<?php modesty_are_there_pages(); ?>
				<?php if( has_tag() ):?>
				<div class="tags">
					<h3>Tags</h3>
					<p><?php the_tags('',', ',''); ?></p>
				</div>
				<?php endif; ?>
			</div>
			<?php comments_template(); ?>
		</div>
	</div>
<?php get_footer('singlep'); ?>