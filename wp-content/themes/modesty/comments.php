<?php if( comments_open() ):?>
<div class="comments">
	<h2>Comments</h2>
	<?php wp_list_comments( ); ?>
	<?php paginate_comments_links(); ?>
</div>
<div class="comments">
	<?php comment_form(); ?>
</div>
<?php endif; ?>

