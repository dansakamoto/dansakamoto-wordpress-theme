<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header();
$firstpost = true;
?>

<div style="float:left;">
	<div style="float:left;clear:left;width:625px;min-height:500px;">
		<span style="font-size:24px;color:#757176;">News :<?php single_month_title(' '); ?></span><br>
			<div id="jdiv" style="background-color:#757176;padding:1em 8px 0 8px;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;">

				<div id="content">
					<div class="entry_firstpost">
						<div class="latest_firstpost">
					
			
							<div class="navigation" style="position:relative;bottom:30px;font-size:11px;width:620px;text-align:right;">
								<a href="<?php echo trailingslashit(get_bloginfo('home')) ?>?p=83">archive</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
							
							<?php while ( have_posts() ) : the_post(); ?>
							
								<?php if(!$firstpost){ ?>
									<br>
									<hr class="postseparator">
									<br><br>
								<?php } ?>
		
								<span class="title2"><b><a href="<?php echo get_permalink($last_post->ID) ?>"><?php the_title() ?></a></b></span><br />
								<span class="timetime2" style="color:#4b4b4b">&nbsp;<?php the_time('l, F j, Y') ?></span>
		
								<div class="main">
		            				<?php the_content() ?>
								</div>
								<?php $firstpost = false ?>
							<?php endwhile; // end of the loop. ?>
						</div>
					</div>	
				</div>
		        
				<div class="navigation" style="position:relative;top:15px;font-size:11px;width:620px;text-align:center;">
					<a href="<?php echo trailingslashit(get_bloginfo('home')) ?>?p=83">archive</a>
				</div>

			</div>
			<br>
			<br>
			<br>
			<br>
			
			<div id="pnc" style="border:1px solid #757176;padding:5px;color:#757176;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;float:left;width:613px;">
				<?php include('requirements/mailchimp.php'); ?>
			</div>

			<?php get_sidebar() ?>
		</div>
</div>

<?php get_footer(); ?>