	<div id="container_bottom">
		<div id="content_bottom">
			<div id="np">
				<div class="np">
					<?php next_post_link('%link','&laquo;&laquo;&laquo;'); ?>
					<?php _e( ' Next ', 'modesty' ); ?> | 
					<?php _e( ' Previous ', 'modesty' ); ?>
					<?php previous_post_link('%link','&raquo;&raquo;&raquo;'); ?>
				</div>
			</div>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
			<div id="powered">Theme made by <a href="http://www.clearview.zzl.org/wpdev/">Igor T.</a> | Powered by <a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a> | <?php wp_loginout(); ?> | <?php wp_register('',''); ?> | <a href="<?php bloginfo('rss2_url'); ?>">RSS</a> | 
			<a href="#logo">Back to Top</a>
			</div>
		</div>
	</div>
<?php wp_footer();?>
</body>
</html>