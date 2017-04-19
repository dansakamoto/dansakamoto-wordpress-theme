<?php
/**
 * Home page template
 *
 */

get_header('home');

$work = get_posts(array('post_type' => 'work', 'numberposts' => -1));

$sticky = simplexml_load_file('http://dansakamoto.tumblr.com/api/read/?tagged=sticky&num=1');
$sticky = $sticky->posts->post;

$postNum = 6;

$postNum++;
$tumblr = simplexml_load_file("http://dansakamoto.tumblr.com/api/read/?num=$postNum&tagged=context"); // get one extra in case of overlap with sticky
$postNum--;

?>
	
		
	
	<!-- contents -->
	<div id="contents" class="oblock">
		<div class="centeringblock">
			<div class="iblock">
				<div class="contentstitle projectstitle">
					Projects
				</div> <!-- sectiontitle -->
				<div class="contentsbody">
					
				<?php foreach($work as $awork){ ?>
		
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
	
	
	
	

	
	

<?php get_footer(); ?>