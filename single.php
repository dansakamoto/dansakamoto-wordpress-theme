<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header();

while ( have_posts() ) : the_post();

?>

<div style="float:left;padding-top:10px;">
	<div style="float:left;clear:left;width:625px;min-height:500px;">
		<span style="font-size:24px;color:#757176;">News</span><br>
			<div id="jdiv" style="background-color:#757176;padding:2em 8px 0 8px;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;">

				<div id="content">
					<div class="entry_firstpost">
						<div class="latest_firstpost">
		
							<span class="title2"><b><a href="<?php echo get_permalink($last_post->ID) ?>"><?php the_title() ?></a></b></span><br />
							<span class="timetime2" style="color:#363636">&nbsp;<?php the_time('l, F j, Y') ?></span>
		
							<div class="main">
		            			<?php the_content() ?>
							</div>
						</div>
					</div>	
				</div>
		        
				<div class="navigation" style="position:relative;top:20px;font-size:12px;width:620px;text-align:center;">
					<?php previous_post_link( '%link | ', __( '&larr; previous post', 'twentyeleven' ) ); ?><a href="<?php echo trailingslashit(get_bloginfo('home')) ?>?p=83">news archive</a><?php next_post_link( ' | %link', __( 'next post &rarr;', 'twentyeleven' ) ); ?>
				</div>

			</div>
			<br>
			<br>
			<br>
			
			<?php get_sidebar('tumblr') ?>
			
			<div id="pnc" style="border:1px solid #757176;padding:5px;color:#757176;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;float:left;width:613px;">
				<?php include('requirements/mailchimp.php'); ?>
			</div>
			<?php get_sidebar() ?>
		</div>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>