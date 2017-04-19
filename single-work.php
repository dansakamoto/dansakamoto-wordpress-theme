<?php
/**
 * Home page template
 *
 */
 
$flickr_set = get_post_meta(get_the_ID(), 'flickr_set', true);
$flickr_height = get_post_meta(get_the_ID(), 'flickr_height', true);
$flickr_landscape_crop = get_post_meta(get_the_ID(), 'flickr_landscape_crop', true);

get_header();

$work = get_posts(array('post_type' => 'work', 'numberposts' => -1));

$sticky = simplexml_load_file('http://dansakamoto.tumblr.com/api/read/?tagged=sticky&num=1');
$sticky = $sticky->posts->post;

$postNum = 5;

$postNum++;
$tumblr = simplexml_load_file("http://dansakamoto.tumblr.com/api/read/?num=$postNum&tagged=context"); // get one extra in case of overlap with sticky
$postNum--;

?>


<!-- project -->
	<div id="contents" class="oblock">
		<div class="centeringblock">
			<div class="iblock">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="contentstitle" style="font-size:36px;">
					<?php the_title() ?>
				</div> <!-- sectiontitle -->
				<div class="contentsbody">
					

				<div class="workdetails">
					<?php echo get_post_meta(get_the_ID(), 'work_details', true) ?>
				</div> <!-- sectiontitle -->
				<div class="workcontent">
				
				<?php if($flickr_set){ ?>
									
										<div id="galleria"></div>
										<br>
										<div style="width:100%;text-align:center;padding:8px 0;">
										<a class="downloadbutton" href="http://www.flickr.com/photos/dansakamoto/sets/<?php echo $flickr_set ?>/" target="_blank">View photos on Flickr</a>					</div>
									
									<?php } ?>
				
				<?php the_content() ?>
					
				
					<!--	<div class="worktitle"><span class="spanspanspan"><?php echo $awork->post_title ?></span></div>
						<div class="workdescription"><?php echo get_post_meta($awork->ID, 'work_description', true) ?></div>-->
					</div></a>
	
					<?php endwhile; // end of the loop. ?>
					
					
				</div>
				
					
				</div>
				
			</div> <!-- iblock -->
		</div> <!-- centering block -->
	</div> <!-- oblock -->

	
	<!-- contents -->
	<div id="contents" class="oblock otherprojects">
		<div class="centeringblock">
			<div class="iblock">
				<div class="contentstitle projectstitle">
					Other Projects
				</div> <!-- sectiontitle -->
				<div class="contentsbody">
					
				<?php foreach($work as $awork){
					if(get_the_ID() == $awork->ID) continue;
				 ?>
		
					<?php 
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $awork->ID ), 'single-post-thumbnail' );
						$thumb = $thumb[0];
						$link = get_post_meta($awork->ID, 'link_override', true);
						$target = 'target="_blank" ';
						if(!$link){
							$link = get_permalink($awork->ID);
							$target = '';
						}
					?>
					
					<a <?php echo $target ?>href="<?php echo $link ?>"><div class="pieceofwork">
						<img style="width:100%;" src="<?php echo $thumb ?>"><br>
						<div class="worktitle"><span class="spanspanspan"><?php echo $awork->post_title ?></span></div>
						<div class="workdescription"><?php echo get_post_meta($awork->ID, 'work_description', true) ?></div>
					</div></a>
		
		<?php } ?>	
					
					
					
				</div>
				
			</div> <!-- iblock -->
		</div> <!-- centering block -->
	</div> <!-- oblock -->
	
	
	
	<div class="oblock moretumblr">
			<div class="centeringblock">
				<div class="iblock">	
					
					<div class="sectionbody">
						<div class="tumlink">
							<a href="http://www.dansakamoto.com">Home</a>
						</div>
					</div>
	    		</div> <!-- iblock -->
		</div> <!-- centeringblock -->
	</div> <!-- oblock -->
	
	<?php if($flickr_set){ ?>
	
		<style>
		#galleria{
			height:<?php echo $flickr_height ?>px;
		}
		</style>
	
		<script>
    	// Load the Twelve theme
    	Galleria.loadTheme('<?php echo get_template_directory_uri(); ?>/requirements/galleria/themes/twelve/galleria.twelve.min.js');
		
    	// Initialize Galleria
   		Galleria.run('#galleria', {
    	    flickr: 'set:<?php echo $flickr_set; ?>',
    	    flickrOptions: {
            	sort: 'date-posted-asc',
            	description: true
    	    },
    	    imageCrop: <?php if($flickr_landscape_crop) echo "false"; else echo "true" ?>,
    	    clicknext: true,
    	    fullscreenCrop: false
		});
    	</script>
	<?php } ?>

<?php get_footer(); ?>