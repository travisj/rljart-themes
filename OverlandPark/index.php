<?php get_header();?>
<div id="bd">
	<div class="yui-gf">
		<div class="yui-u">
		<div class="yui-gc">
		
			<!-- middle column -->
			<div id="main" class="yui-u first" style="width: 65.5%">
				<?php if (have_posts()) {
					while (have_posts()) {
						the_post();
				?>
					<div class="post">
						<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet_heart.gif" /> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry">
							<p class="date"><?php the_time('M jS Y h:i:s a') ?> <?php edit_post_link('Edit', '', ''); ?></p>
							<?php the_content('Continue Reading &raquo;'); ?>
					        <?php wp_link_pages(); ?>
							<p class="cat_and_comment">
								<span class="comment"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
								Categories: <?php the_category(', ') ?>
							</p>
							<?php comments_template(); ?>
						</div>
					</div>
				<?php } ?>
				<p><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>		
				<?php } ?>
			</div>
			
			
			
			<!-- right column -->
			<div id="right" class="yui-u logos" style="width: 32.4%">
				<div class="dashed_underline">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/clickityclick.gif" />
				</div>
				
				<div class="dashed_underline">
					<a href="http://pages.teamintraining.org/nyc/nyc10/rjohnsochx"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/06/blog_icon.gif"></a>
					</div>
					
				<!--
				<script type="text/javascript" src="http://apps.lls.org/Apps360//swfobject.js"></script>
				<script type="text/javascript"> windowOnLoad = window.onload; window.onload = function(){ if(windowOnLoad){windowOnLoad()} swfobject.embedSWF("http://apps.lls.org/Apps360//genericWidget.swf", "etoolsFundraiserWidget", "184", "250", "9.0.0", "http://apps.lls.org/Apps360//expressInstall.swf", { programGroupName:"tnt", constituentID:"1607936236", eventID:"5297" } , {bgcolor:"#ffffff"},{});}</script>
				<div id="etoolsFundraiserWidget"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" border="0" /></a></div> 
			-->
			
			<a href="http://www.rljart.com/blog/?cat=63"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/01/cupcakebadge.gif" alt="cupcakebadge" title="cupcakebadge" width="210" height="70" class="aligncenter size-full wp-image-2541" /></a>
			
			<div class="dottedline">
				<a href="http://www.rljart.com/blog/?cat=64"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/01/museumbadge.gif" alt="museumbadge" title="museumbadge" width="210" height="70" class="alignnone size-full wp-image-2542" /></a>
				</div>
			
			<div class="dottedline">
				<a href="http://www.swap-bot.com/"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/01/swapbotrachel.gif" /></a>
				</div>
			
			<!-- 	
			<div class="dottedline">
				<a href="http://craftycon.com"><img src="http://craftycon.com/CraftyCon2010/wp-content/uploads/speakingcratfycon_transp.png" mce_src="http://craftycon.com/CraftyCon2010/wp-content/uploads/speakingcratfycon_transp.png"/></a>
				</div>
					-->
					
					<!--
				<div class="dottedline">
				<a  href="http://dollarstorecrafts.com/stash/" target="_blank"><img src="http://dollarstorecrafts.com/wp-content/uploads/2010/03/StashBustParticipantBadge.jpg" border="0"></a>
				</div>
				-->
				
				<!--
				<div class="dottedline">
					<a href="http://www.nablopomo.com/"><img src="http://www.rljart.com/blog/wp-content/uploads/2009/11/nablopomoicon.jpg" alt="nablopomoicon" title="nablopomoicon" width="200" height="90" class="alignnone size-full wp-image-2279" /></a>				
				</div>
				-->
				
			
				<div class="dottedline">
					<a href="http://mechroboticon.com/"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/01/mechroboticonlogolight.gif" alt="mechroboticonlogolight" title="mechroboticonlogolight" width="200" height="70" class="aligncenter size-full wp-image-2540" /></a>
					<!-- <a href="http://www.mechroboticon.com"><img src="http://www.rljart.com/blog/wp-content/mechroboticonlogo.gif"></a> -->
				</div>
			
			
				<div class="dottedline">
					<a href="http://www.craftcritique.com">
						<img src="http://www.rljart.com/blog/wp-content/uploads/2009/05/reporterblue.gif" alt="Craft Critique Reporter" title="Craft Critique Reporter" width="200" height="50" />
					</a>
				<!-->	
				<br />
					<a href="http://www.craftcritique.com">
						<img border="0" alt="I Love CraftCritique.com" src="http://images.craftcritique.com/CC-still1.jpg"/>
					</a> 
					-->
				</div>
				
				<!--<a href="http://www.eugenecottage.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eclgo2.gif" /></a> -->
				
				
					<div class="dottedline">
						<br />
					<a href="http://www.lamblefamily.com"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/01/lamble.gif"  /></a>
					</div>
				
				<!--
				<div class="dottedline">	
					<a href="http://www.lamblefamily.com/">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/lamble.gif" />
					</a>
				</div>
				-->
				
				<!--
				<h2>what's up with Travis?</h2>
				<style type="text/css">
					#me_travisj_org div.entry {
						margin-bottom: 10px;

					}
					#me_travisj_org p.caption {
						padding: 3px 10px;
						font-size: 10px;
						color: #3c3c3c;
					}
				</style>
				<div id="me_travisj_org"></div>
				<script type="text/javascript">
					function tumble(t) {
						var travis = document.getElementById('me_travisj_org');
						for (i in t.posts) {
							var container = document.createElement('div');
							container.className = 'entry photo'
							var img = document.createElement('img');
							img.src = t.posts[i]['photo-url-100']
							var caption = document.createElement('p');
							caption.innerHTML = t.posts[i]['photo-caption'];
							caption.className = 'caption';
							container.appendChild(img);
							container.appendChild(caption);
							travis.appendChild(container);
						}
					}
				</script>
				<script type="text/javascript" src="http://me.travisj.org/api/read/json?callback=tumble&num=5&type=photo"></script>
				-->
				
				<!-- WISHPOT <div class="dottedline" style="text-align:center">	
				 <img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://counters.gigya.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyNTEwNDMxNjc5MDEmcHQ9MTI1MTA*MzE3NDM3MCZwPTE5MDI1MSZkPSZnPTEmbz*1NWU3YTgzZmI3ODc*ZDBkOTk3ZTk5MTIwODYyMjI2YiZvZj*w.gif" /><div style="width:170px; padding:0px;"><embed src="http://www.wishpot.com/widget/v1/wishpot_blog_gadget_v3.swf?feedUrl=http%3A%2F%2Fwww.wishpot.com%2Fpublic%2Frss%2Flist.aspx%3Fuid%3D22547%26list%3D91660%26rcgen%3Dwidget%26pkey%3D22547&skin=widget_1_v2_wishpot2.jpg&domain=http%3a%2f%2fwww.wishpot.com%2fwidget%2fv1%2fskins%2f&txtColor=0x000000" width="170" height="341"></embed><br /><div style="text-align:right; margin-top:15px; padding-right: 10px;"><a href="http://www.wishpot.com/list.aspx?uid=22547&list=91660&rc=widget&pkey=22547" target="_blank" style="color:0x666666; font-family: Arial, Helvetica, sans-serif; font-size: 11px; text-decoration:none" title="View my Wish List"><b>View my wish list on Wishpot &raquo</b></a></div></div>
				</div> -->
				
				
				<h2>my flickr</h2>
				<br />
				<a href="http://flickr.com/photos/29867888@N00/"><img src="http://bighugelabs.com/flickr/profilewidget/recent.explore.compact/000000/ffffff/29867888@N00.jpg" border="0" alt="rlj. Get yours at bighugelabs.com/flickr" title="rlj. Get yours at bighugelabs.com/flickr" /></a>
				
				
				<div class="dottedline">
					<br />
					<!-- Facebook Badge START -->
					<a href="http://www.facebook.com/rachelj" title="Rachel Lamble Johnson" target="_TOP">
						<img src="http://badge.facebook.com/badge/11513427.1099.702504061.png" alt="Rachel Lamble Johnson" style="border: 0px;" />
					</a><!-- Facebook Badge END -->
				</div>
		
		
				<div class="dottedline">
					<br />
					<a href="http://www.linkedin.com/pub/2/309/588" ><img src="http://www.linkedin.com/img/webpromo/btn_viewmy_160x33.gif" width="160" height="33" border="0" alt="View Rachel Johnson's profile on LinkedIn"></a>
				</div>
				
				
					<div class="dottedline">
						<br />
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">
	<img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" />
	</a>
	<br />This work is licensed under a 
	<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-
	</p>
	<p>Noncommercial-Share Alike 3.0 License</p></a>
	</div>
	
			</div>
		
		</div>
		</div>
		
		<!-- left column -->
		<div id="left" class="yui-u first">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/welcome.gif" />
			<div class="rightcenter">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/me.png" >
			</div>
			<p>
			I'm Rachel and this is my website. It is where I write about art, crafts, design, New York City, and generally share probably a little too much about my daily life. Enjoy! 
			</p>
			<br />
			
			<a href="http://feeds.feedburner.com/rljart/latest" title="Subscribe to my feed" rel="alternate" type="application/rss+xml"><img src="http://www.rljart.com/blog/wp-content/uploads/2010/01/RSSbutton2.gif" alt="subscribe via RSS" style="border:0"/></a>
			
			
			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
			
			<div id="twitter_div">
			<h2 class="twitter-title">my tweets</h2>
			<ul id="twitter_update_list"></ul>
			</div>
			<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
			<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/rljart.json?callback=twitterCallback2&count=1"></script>
			<br />
			
			<a href="http://twitter.com/rljart"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twittericon4.png" /></a>
			

			<!--
			<h2>twitter</h2>
			<div style="width:176px;text-align:center"><embed src="http://twitter.com/flash/twitter_badge.swf"  flashvars="color1=6737100&type=user&id=794334"  quality="high" width="176" height="176" name="twitter_badge" align="middle" allowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /><br><a style="font-size: 10px; color: #66CCCC; text-decoration: none" href="http://twitter.com/rljart">follow rljart at http://twitter.com</a></div>
			-->
			
			<h2>links</h2>
			<?php get_select_link_list(); ?>
			
			<h2>categories</h2>
			<?php wp_dropdown_categories(array('orderby'=>'name', 'show_option_all'=>'Select...')); ?>
			
			<h2>archive</h2>
			<form name="archiveform" action="">
			<select name="archive_chrono" onchange="window.location =
			(document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
			<option value=''>Select Month</option>
			<?php wp_get_archives('type=monthly&format=option'); ?>
			</select>
			</form>
			
			<h2>search</h2>
			<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="Search" />
			</div>
			</form>
			<br />
			
			
			
			<h2>subscribe via email</h2>
			<form style="border:0px solid #ccc;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=rljart/latest', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="rljart/latest" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /><p>Delivered by <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p></form>
			<br />
		
			<!-- delicious -->
			<script type="text/javascript" src="http://del.icio.us/feeds/js/ilovecutethings?count=5;title=my%20del.icio.us;icon=s;name"></script>
			<noscript><a href="http://del.icio.us/ilovecutethings">my del.icio.us</a></noscript>
			<br />
			
			<h2>fave images from the web</h2>
			<script src="http://imgfave.com/embed/widget/975/4/1?border=ffffff&text=61b8c2" type="text/javascript"></script>
			
			<h2>i love the cute</h2>
			<div><img src="http://rljart.com/blog/wp-content/cutethings.jpg" alt="i love cute things" />
				</div>
			
			<!--
			<h2>creative commons</h2>
			<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">
<img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" />
</a>
<br />This work is licensed under a 
<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-
</p>
<p>Noncommercial-Share Alike 3.0 License</p></a>
-->

		</div>
		
	</div>
</div>
<?php get_footer();?>
