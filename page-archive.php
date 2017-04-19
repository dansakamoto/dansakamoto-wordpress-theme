<?php
/**
 * Archives page template
 *
 */

get_header();

while ( have_posts() ) : the_post(); ?>

<div style="float:left;">
	<div style="float:left;clear:left;width:625px;min-height:500px;">
		<span style="font-size:24px;color:#757176;">News Archive</span><br>
			<div id="jdiv" style="background-color:#757176;padding:1em 8px 0 8px;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;float:left;width:609px;">

				<div id="content" style="float:left;">
					<div class="entry_firstpost" style="float:left;">
						<div class="latest_firstpost" style="float:left;">
					
							<div class="archivelist" style="width:155px;float:left;padding:20px 20px 20px 40px;">
								<span class="title2"><b>By Month:</b></span>
								<ul class="archiveList">
									<?php wp_get_archives('type=monthly'); ?>
								</ul>
							</div>
				
							<div class="archivelist" style="width:350px;float:left;padding:20px;">
								<span class="title2"><b>By Headline:</b></span>
								<ul class="archiveList">
									<?php wp_get_archives('type=postbypost'); ?> 
								</ul>
							</div>
							
						</div>
					</div>	
				</div>
				

			</div>
			
			<br>
			<br>
			<br>			
			
			<div id="pnc" style="border:1px solid #757176;padding:5px;color:#757176;-moz-border-radius: 30px;border-radius: 30px;margin-top:4px;float:left;width:613px;">
				<?php include('requirements/mailchimp.php'); ?>
			</div>
			
			<?php get_sidebar() ?>
			
		</div>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>