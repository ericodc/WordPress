<?php get_header(); ?>
<div id="container_main">
		<div id="content_main">
			<div id="search_container">
				<div id="search">
				 	<?php get_search_form(); ?>
				</div>
			</div>
			<?php 
			$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
			?>
			<h1><span class="some_red">//</span><?php echo $curauth->display_name; ?></h1>
			<div class="post">
			<div style="float:right;margin-right:20px;">
			<?php 
				if (function_exists('get_avatar')) {
      					echo get_avatar($email, $size = '160');
   					} else {
      					//alternate gravatar code for < 2.5
      					$grav_url = "http://www.gravatar.com/avatar/" . 
         					md5(strtolower($email)) . "?d=" . urlencode($default) . "&s=" . $size;
     					 echo "<img src='$grav_url'/>";
					}?>
			</div>
				<h2>Profile</h2>
				<h4><span class="some_red">//</span>Nickname: <span class="notrans"><?php echo $curauth->nickname; ?></span></h4>
				<h4><span class="some_red">//</span>First Name: <span class="notrans"><?php echo $curauth->first_name; ?></span></h4>
				<h4><span class="some_red">//</span>Last Name: <span class="notrans"><?php echo $curauth->last_name; ?></span></h4>
				<h4><span class="some_red">//</span>Registered: <span class="notrans"><?php echo $curauth->user_registered; ?></span></h4>
				<h4><span class="some_red">//</span>ID: <span class="notrans"><?php echo $curauth->ID; ?></span></h4>
				<h4><span class="some_red">//</span>User Level: <span class="notrans"><?php echo $curauth->user_level; ?></span></h4>
				<h4><span class="some_red">//</span>User Status: <span class="notrans"><?php echo $curauth->user_status; ?></span></h4>
				<h4><span class="some_red">//</span>Description: <span class="notrans"><?php echo $curauth->description; ?></span></h4>
			</div>
			<!--div class="comments">
				<?php comments_template(); ?>
			</div-->
			<?php if ( have_posts() ) : ?>
<h1><span class="some_red">//</span>Posts</h1>
			<?php
				while(have_posts()) : the_post();?>
			<div id="<?php the_ID(); ?>" <?php post_class('post_tiny'); ?> >
				<h4><a href="<?php the_permalink(); ?>"><?php modesty_date_as_title();?></a>
				<div class="info"><?php the_category('&raquo'); ?> | <?php the_time('j. F, Y'); ?><!-- | <?php edit_post_link(); ?>--> </div>
				</h4>
			</div>
			<?php endwhile; ?>
<?php else : ?>
<div id="post-0" class="post">
<h2 ><?php _e( 'Nothing found.', 'modesty' ) ?></h2>
<div>
<p><?php _e( 'This user has not posted anything yet', 'modesty' ); ?></p>
</div>
</div>
<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>