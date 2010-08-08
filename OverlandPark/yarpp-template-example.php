<?php /*
Example template
Author: mitcho (Michael Yoshitaka Erlewine)
*/ 
?>
<br />
<div class="dottedline2">
<h4 style="color:808080">you may also <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet_heart.gif" /> these posts:</h4>
<?php if ($related_query->have_posts()):?>
<div class="indent">
<ol>
	<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
	<?php endwhile; ?>
</ol>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
</div>
</div>