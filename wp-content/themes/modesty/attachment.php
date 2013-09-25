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
<!-- Code from theme "BlankSlate" -->

				<div><?php if ( wp_attachment_is_image( $post->ID ) ) : $att_image = wp_get_attachment_image_src( $post->ID, "large"); ?>
<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>" height="<?php echo $att_image[2]; ?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a></p>
<?php else : ?>
<a href="<?php echo wp_get_attachment_url($post->ID); ?>" title="<?php echo esc_html(get_the_title($post->ID), 1); ?>" rel="attachment"><?php echo basename($post->guid); ?></a>
<?php endif; ?></div>

<!-- End of code from theme "BlankSlate" -->	
			</div>
			<?php comments_template(); ?>
		</div>
	</div>
<?php get_footer('singlea'); ?>