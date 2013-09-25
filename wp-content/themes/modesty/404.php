<?php
/**
 * The template for displaying 404 pages (Not Found).
 * Based on twentytwelve theme.
 */

get_header(); ?>
<div id="container_main">
		<div id="content_main">
			<div id="search_container">
				<div id="search">
				 	<?php get_search_form(); ?>
				</div>
			</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'You are going to far, here is nothing!', 'modesty' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Do not lose yourself, my friend.', 'modesty' ); ?></p>
					<!--p><?php get_search_form(); ?></p-->
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
</div>
<?php get_footer(); ?>