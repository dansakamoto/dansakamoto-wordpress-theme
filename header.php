<!DOCTYPE html>

<!--[if IE 6]>
	<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
	<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
	<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
	<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $page, $paged; ?>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<title>
		<?php
		wp_title( '|', true, 'right' );
	
		// Add the blog name.
		bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?>
	</title>
	
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="profile" href="//gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style type="text/css"> body{ background-image:url('<?php echo get_template_directory_uri(); ?>/images/bg_blur4.jpg'); } </style>
	
	<!-- load jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<script type="text/javascript">
		$(document).ready(function() { sizeCheck();});
		
		$(window).resize(function() {sizeCheck();});
		
		// Switch to mobile-optimized layout when screen is less than a certian width
		function sizeCheck(){
			if ($(window).width() < 500 ) {
				$(".pieceofwork").addClass("pieceofworkmobile");
				$("#title").addClass("titlemobile");
			} else {
				$(".pieceofworkmobile").removeClass("pieceofworkmobile");
				$(".titleMobile").removeClass("titleMobile")
			}
			
			if($(window).width() < 550 ) {
				$(".smbariblock").addClass("smbariblockmobile");
			} else {
				$(".smbariblockmobile").removeClass("smbariblockmobile");
			}
		}

	</script>
		
	<?php wp_head(); ?>
	
	<!-- analytics -->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2839461-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
</head>

<body <?php body_class(); ?>>
	
		<!-- header -->
		<div id="header" class="oblock">
			<div class="centeringblock" style="padding:0;">
				<div class="iblock" style="width:100%;">
					<div class="iblock" id="title" style="text-align:left;padding-top:25px;">
					
						<a href="<?php echo trailingslashit(get_bloginfo('home'))?>">
							<div style="line-height:.5em;padding:0 20px;">
								<div style="display:inline;background:#000;color:#eee;font-family:'Helvetica Neue', Helvetica, sans-serif;font-weight:100;font-size:51px;padding:.1em 0;box-shadow: 20px 0 0 black, -20px 0 0 black;">
									<span style="line-height:1.2em;">Dan Sakamoto</span>
								</div>
								<br>
								<br>
								<div style="display:inline;background:#000;color:#eee;font-family:'Helvetica Neue', Helvetica, sans-serif;font-weight:100;font-size:17px;padding:.3em 0;letter-spacing:.1em;box-shadow: 20px 0 0 black, -20px 0 0 black;line-height:1.2em">
									VISUAL / AUDIO / BEHAVIORAL ART
								</div>
							</div>
						</a>
					
					</div> <!-- title -->
				</div> <!-- iblock -->
			</div> <!-- centering block -->
		</div> <!-- oblock -->
		
		
		<div id="smbar" class="oblock">
			<div class="centeringblock" style="padding-right:0;">
				<div class="smbariblock" style="padding-top:20px;text-align:right;">
					<img style="opacity:.6; width:171px;height:12px;padding:4px 0;" src="//www.dansakamoto.com/journal/wp-content/themes/dansakamoto/images/railx.png">
					<a target="_blank" href="//www.facebook.com/dansakamoto"><img title="facebook" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/facebook.gif"></a>
					<a target="_blank" href="//www.twitter.com/dansakamoto"><img title="twitter" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/twitter.gif"></a>
					<!--<a target="_blank" href="//dansakamoto.tumblr.com"><img title="tumblr" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/tumblr.gif"></a>-->
					<!--<a target="_blank" href="//www.flickr.com/photos/dansakamoto"><img title="flickr" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/flickr.gif"></a>-->
					<!--<a target="_blank" href="//www.vimeo.com/dansakamoto"><img title="vimeo" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/vimeo.gif"></a>-->
					<!--<a target="_blank" href="//www.soundcloud.com/dansakamoto"><img title="soundcloud" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/soundcloud.gif"></a>-->
					<a target="_blank" href="//www.instagram.com/dansakamoto"><img title="instagram" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/instagram.gif"></a>
					<a target="_blank" href="//www.linkedin.com/in/dansakamoto"><img title="linkedin" src="<?php echo get_bloginfo('template_url') ?>/images/smicons/linkedin.gif"></a>
				</div> <!-- smbariblock -->
			</div> <!-- centeringblock -->
		</div> <!-- oblock -->