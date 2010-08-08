	<div id="sidebar">
		<ul>

		<img src="/rachel/wp-content/littlebird.jpg" />
			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.-->
			<li><h2><?php _e('Hello...'); ?></h2>
			<p>My blog usually covers silly, little things. Nothing super-important or weighty. I also like to include lots of images. Thanks for visiting. Have fun!</p>
			<p><a href="http://www.lamblefamily.com/rachel">Blog (updated almost daily)</a><br />
			<a href="http://www.rljart.com">Visit my splash page.</a></p>
			</li>

			

			<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>

			<?php include (TEMPLATEPATH . '/tagboard.php'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>				
				<?php get_links_list(); ?>
			
			<li><h2><?php _e('Categories'); ?></h2>
				<ul>
				<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
				</ul>
			</li>
			
			<li>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
			
			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>
			
		 <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
			</li>
			
			<li><h2><?php _e('Archives'); ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
				<!--
				<li><h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
				-->
			<?php } ?>
			
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>
			
		</ul>
	</div>

